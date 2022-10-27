<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Admin extends BaseController
{

    public function __construct()
    {
        session();
        $this->validation = \Config\Services::validation();
        $this->AdminModel = new \App\Models\AdminModel();
        $this->tentangModel = new \App\Models\TentangModel();
        $this->FaqModel = new \App\Models\FaqModel();
        $this->ArtikelModel = new \App\Models\ArtikelModel();
        $this->galeriModel = new \App\Models\GaleriModel();
        $this->userSession = session()->get('user');
        $this->db = \Config\Database::connect();
    }


    // -----------------Kelola Pengguna-----------------
    // -------------------------------------------------

    public function kelola_pengguna()
    {
        $data['title'] = 'Kelola Pengguna';
        $data['validation'] = $this->validation;
        $data['user'] = $this->userSession;
        $data['data'] = $this->AdminModel->where('username !=', $data['user']['username'])->findAll();
        return view('admin/kelola-pengguna/kelola-pengguna', $data);
    }

    public function tambah_pengguna()
    {
        $validation = $this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[admin.email]|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'is_unique' => 'Email sudah terdaftar',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 8 karakter'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Level harus diisi'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/kelola-pengguna')->with('pesan', 'Data gagal ditambahkan')->withInput();
        } else {
            $this->AdminModel->save([
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => $this->request->getPost('level'),
                'foto' => 'default.jpg',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ]);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/kelola-pengguna');
        }
    }

    public function hapus_pengguna($id)
    {
        $this->AdminModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/kelola-pengguna');
    }

    public function edit_pengguna($id)
    {
        $data['title'] = 'Edit Pengguna';
        $data['validation'] = $this->validation;
        $data['data'] = $this->AdminModel->where('id', $id)->first();
        return view('admin/kelola-pengguna/edit-pengguna', $data);
    }

    public function proses_edit_pengguna($id)
    {
        $user = $this->AdminModel->where('id', $id)->first();
        if ($user['email'] == $this->request->getPost('email')) {
            $rules = '';
        } else {
            $rules = '|is_unique[admin.email]';
        }
        if ($this->request->getPost('password') == '') {
            $rules2 = '';
            $password = $user['password'];
        } else {
            $rules2 = '|min_length[8]';
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }
        $validation = $this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email' . $rules,
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email tidak valid',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'max_length[255]' . $rules2,
                'errors' => [
                    'min_length' => 'Password minimal 8 karakter',
                    'max_length' => 'Password maksimal 255 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,2048]|is_image[foto]',
                'errors' => [
                    'max_size' => '{field} maksimal 2MB',
                    'is_image' => '{field} harus berupa gambar'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/kelola-pengguna/edit/' . $id)->with('pesan', 'Data gagal diubah')->withInput();
        } else {
            $foto = $this->request->getFIle('foto');
            if ($foto->getError() == 4) {
                $namaFoto = $user['foto'];
            } else {
                $namaFoto = $foto->getRandomName();
                $foto->move('img/foto_profil', $namaFoto);
                if ($user['foto'] != 'default.jpg') {
                    unlink('img/foto_profil/' . $user['foto']);
                }
            }
            $this->AdminModel->save([
                'id' => $id,
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $password,
                'level' => $this->request->getPost('level'),
                'foto' => $namaFoto,
                'updated_at' => Time::now('Asia/Jakarta')
            ]);
            session()->setFlashdata('pesan', 'Data berhasil diperbaharui');
            return redirect()->to('/admin/kelola-pengguna');
        }
    }


    // -----------------Kelola Artikel-----------------
    // -------------------------------------------------

    public function cek_slug($data)
    {
        $slug = url_title($data, '-', true);
        $cek = $this->ArtikelModel->where('slug', $slug)->first();
        if (!$cek) {
            $output = [
                'slug' => $slug,
                'status' => true,
                'pesan' => 'Slug tersedia'
            ];

            return json_encode($output);
        } else {
            $output = [
                'slug' => $slug,
                'status' => false,
                'pesan' => 'Slug sudah dipakai'
            ];

            return json_encode($output);
        }
    }
    public function cek_slug_edit($id, $data)
    {
        $slug = url_title($data, '-', true);
        $cek = $this->ArtikelModel->where('slug', $slug)->first();
        if (!$cek) {
            $output = [
                'slug' => $slug,
                'status' => true,
                'pesan' => 'Slug tersedia'
            ];

            return json_encode($output);
        } else {
            if ($cek['id'] == $id) {
                $output = [
                    'slug' => $slug,
                    'status' => true,
                    'pesan' => 'Slug tersedia'
                ];

                return json_encode($output);
            } else {
                $output = [
                    'slug' => $slug,
                    'status' => false,
                    'pesan' => 'Slug sudah dipakai'
                ];

                return json_encode($output);
            }
        }
    }

    public function daftar_artikel()
    {
        $data['title'] = 'Daftar Artikel';
        $artikel = $this->ArtikelModel->findAll();
        $data['artikel'] = $artikel;
        return view('admin/artikel/daftar-artikel', $data);
    }

    public function tambah_artikel()
    {
        $data['title'] = 'Tambah Artikel';
        $data['artikel'] = $this->ArtikelModel->artikel();
        $data['validation'] = $this->validation;
        return view('admin/artikel/tambah-artikel', $data);
    }
    public function proses_tambah_artikel()
    {
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi'
                ]
            ],
            'slug' => [
                'rules' => 'required|is_unique[artikel.slug]',
                'errors' => [
                    'required' => 'Slug harus diisi',
                    'is_unique' => 'Slug sudah terdaftar'
                ]
            ],
            'isi_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi artikel harus diisi'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,2048]|is_image[poster]',
                'errors' => [
                    'max_size' => 'maksimal File 2MB',
                    'is_image' => 'File harus berupa gambar'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/artikel/tambah')->with('pesan', 'Data gagal ditambahkan')->withInput();
        } else {
            $foto = $this->request->getFIle('poster');
            if ($foto->getError() == 4) {
                $namaFoto = 'default.jpg';
            } else {
                $namaFoto = $foto->getRandomName();
                $foto->move('img/foto_artikel', $namaFoto);
            }
            $this->ArtikelModel->save([
                'judul' => $this->request->getPost('judul'),
                'slug' => $this->request->getPost('slug'),
                'isi_artikel' => $this->request->getPost('isi_artikel'),
                'poster' => $namaFoto,
                'status' => '2',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ]);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/artikel');
        }
    }
    public function edit_artikel($slug)
    {
        $data['title'] = 'Edit Artikel';
        $data['artikel'] = $this->ArtikelModel->where('slug', $slug)->first();
        $data['validation'] = $this->validation;
        return view('admin/artikel/edit-artikel', $data);
    }
    public function proses_edit_artikel($slug)
    {

        $artikel = $this->ArtikelModel->where('slug', $slug)->first();
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul sudah terdaftar'
                ]
            ],
            'slug' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Slug harus diisi',
                    'is_unique' => 'Slug sudah terdaftar'
                ]
            ],
            'isi_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi artikel harus diisi'
                ]
            ],

            'poster' => [
                'rules' => 'max_size[poster,2048]|is_image[poster]',
                'errors' => [
                    'max_size' => 'maksimal File 2MB',
                    'is_image' => 'File harus berupa gambar'
                ]
            ]

        ]);
        if (!$validation) {
            return redirect()->to('/admin/artikel/edit/' . $slug)->with('pesan', 'Data gagal diubah')->withInput();
        } else {
            $poster = $this->request->getFIle('poster');

            if ($poster->getError() == 4) {
                $namaPoster = $artikel['poster'];
            } else {
                $namaPoster = $poster->getRandomName();
                $poster->move('img/foto_artikel', $namaPoster);
                if ($artikel['poster'] != 'default.jpg') {
                    unlink('img/foto_artikel/' . $artikel['poster']);
                }
            }

            $this->ArtikelModel->update($artikel['id'], [
                'judul' => $this->request->getPost('judul'),
                'slug' => $this->request->getPost('slug'),
                'isi_artikel' => $this->request->getPost('isi_artikel'),
                'poster' => $namaPoster,
                'updated_at' => Time::now('Asia/Jakarta')
            ]);
            session()->setFlashdata('pesan', 'Data berhasil diubah');
            return redirect()->to('/admin/artikel');
        }
    }
    public function hapus_artikel($id)
    {
        $artikel = $this->ArtikelModel->find($id);
        if ($artikel['poster'] != 'default.jpg') {
            unlink('img/foto_artikel/' . $artikel['poster']);
        }
        $this->ArtikelModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/artikel');
    }

    // - Kelola Tentang -> daftar Personil -----------------
    // -----------------------------------------------------
    public function daftar_personil()
    {
        $data['kategori'] = $this->tentangModel->findAll();
        $data['jabatan'] = $this->tentangModel->getJabatan();
        $data['personil'] = $this->tentangModel->getPersonil();
        $data['title'] = 'Kelola Daftar Personil';
        return view('admin/tentang/daftar-personil', $data);
    }

    public function tambah_kategori_personil()
    {
        $this->tentangModel->save([
            'nama_kategori' => $this->request->getPost('nama-kategori')
        ]);
        session()->setFlashdata('pesan', 'Data Kategori berhasil ditambahkan');
        return redirect()->to('/admin/daftar-personil');
    }

    public function hapus_kategori_personil($id)
    {
        $this->tentangModel->delete($id);
        session()->setFlashdata('pesan', 'Data Kategori berhasil dihapus');
        return redirect()->to('/admin/daftar-personil');
    }

    public function edit_kategori_personil($id)
    {
        $this->tentangModel->save([
            'id' => $id,
            'nama_kategori' => $this->request->getPost('nama-kategori')
        ]);
        session()->setFlashdata('pesan', 'Data Kategori berhasil diperbaharui');
        return redirect()->to('/admin/daftar-personil');
    }

    public function tambah_jabatan_personil()
    {
        $data = [
            'nama_jabatan' => $this->request->getPost('nama-jabatan'),
            'id_kategori' => $this->request->getPost('id-kategori')
        ];
        $this->db->table('tentang_jabatan')->insert($data);
        session()->setFlashdata('pesan', 'Data Jabatan berhasil ditambahkan');
        return redirect()->to('/admin/daftar-personil');
    }

    public function hapus_jabatan_personil($id)
    {
        $this->db->table('tentang_jabatan')->delete(['id' => $id]);
        session()->setFlashdata('pesan', 'Data Jabatan berhasil dihapus');
        return redirect()->to('/admin/daftar-personil');
    }

    public function edit_jabatan_personil($id)
    {
        $data = [
            'id' => $id,
            'nama_jabatan' => $this->request->getPost('nama-jabatan'),
            'id_kategori' => $this->request->getPost('id-kategori')
        ];
        $this->db->table('tentang_jabatan')->where('id', $id)->update($data);
        session()->setFlashdata('pesan', 'Data Jabatan berhasil diperbaharui');
        return redirect()->to('/admin/daftar-personil');
    }

    public function tambah_personil()
    {
        $data['kategori'] = $this->tentangModel->findAll();
        $data['jabatan'] = $this->tentangModel->getJabatan();
        $data['personil'] = $this->tentangModel->getPersonil();
        $data['validation'] = $this->validation;
        $data['title'] = 'Tambah Data Personil';
        return view('admin/tentang/tambah_data_personil', $data);
    }

    public function proses_tambah_personil()
    {
        $validation = $this->validate([
            'nama_personil' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Personil harus diisi'
                ]
            ],
            'kampus' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Kampus harus diisi'
                ]
            ],
            'id_jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Jabatan harus diisi'
                ]
            ],
            'id_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Kategori harus diisi'
                ]
            ],
        ]);
        if (!$validation) {
            return redirect()->to('/admin/daftar-personil/tambah-personil')->with('pesan', 'Data gagal ditambahkan')->withInput();
        } else {
            $data = [
                'nama_personil' => $this->request->getPost('nama_personil'),
                'kampus' => $this->request->getPost('kampus'),
                'id_jabatan' => $this->request->getPost('id_jabatan'),
                'id_kategori' => $this->request->getPost('id_kategori'),
            ];
            $this->db->table('tentang_personil')->insert($data);
            session()->setFlashdata('pesan', 'Data Personil berhasil ditambahkan');
            return redirect()->to('/admin/daftar-personil');
        }
    }

    public function hapus_personil($id)
    {
        $this->db->table('tentang_personil')->delete(['id' => $id]);
        session()->setFlashdata('pesan', 'Data Personil berhasil dihapus');
        return redirect()->to('/admin/daftar-personil');
    }

    public function edit_personil($id)
    {
        $data['kategori'] = $this->tentangModel->findAll();
        $data['jabatan'] = $this->tentangModel->getJabatan();
        $data['all_personil'] = $this->tentangModel->getPersonil();
        $data['personil'] = $this->db->table('tentang_personil')->where('id', $id)->get()->getRowArray();
        $data['validation'] = $this->validation;
        $data['title'] = 'Edit Data Personil';
        return view('admin/tentang/edit_data_personil', $data);
    }



    // -- tentang -> sertifikasi ------------------------ 
    // -------------------------------------------------- 

    public function sbu()
    {
        $data['kategori'] = $this->tentangModel->getKategoriSBU();
        $data['sertifikasi'] = $this->tentangModel->getSertifikasi();
        $tentang_kategori = $this->tentangModel->findAll();
        $data['tentang_kategori'] = $tentang_kategori;
        $data['validation'] = $this->validation;

        $data['title'] = 'Sertifikasi Badan Usaha';
        return view('admin/tentang/sbu', $data);
    }

    public function tambah_ktgori_sbu()
    {
        $validation = $this->validate([
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/sbu')->with('pesan', 'Data gagal ditambahkan')->withInput();
        } else {
            $this->db->table('kategori_sertifikasi')->insert(['nama_kategori' => $this->request->getPost('nama_kategori')]);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/sbu');
        }
        return view('admin/sbu');
    }

    public function edit_ktgori_sbu($id)
    {
        $validation = $this->validate([
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/sbu/' . $id)->with('pesan', 'Data gagal diubah')->withInput();
        } else {
            $this->db->table('kategori_sertifikasi')->where(['id' => $id])->update([
                'nama_kategori' => $this->request->getPost('nama_kategori')
            ]);
            session()->setFlashdata('pesan', 'Data berhasil diperbaharui');
            return redirect()->to('/admin/sbu');
        }
    }

    public function hapus_kategori_sbu($id)
    {
        $this->db->table('kategori_sertifikasi')->where(['id' => $id])->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/sbu');
    }

    public function tambah_sbu()
    {
        $data['title'] = 'Tambah SBU';
        $data['kategori'] = $this->tentangModel->getKategoriSBU();
        $data['sertifikasi'] = $this->tentangModel->getSertifikasi();
        $data['validation'] = $this->validation;
        $data['user'] = $this->userSession;

        return view('admin/tentang/tambah-sbu', $data);
    }
    public function proses_tambahsbu()
    {
        $validation = $this->validate([
            'kode_sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode harus diisi'
                ]
            ],
            'nama_sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Sertifikasi harus diisi'
                ]
            ],
            'id_kategori_sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ]

        ]);
        if (!$validation) {
            return redirect()->to('/admin/tambah-sbu')->with('pesan', 'Data gagal ditambahkan')->withInput();
        } else {
            $data = [
                'kode_sertifikasi' => $this->request->getPost('kode_sertifikasi'),
                'nama_sertifikasi' => $this->request->getPost('nama_sertifikasi'),
                'id_kategori_sertifikasi' => $this->request->getPost('id_kategori_sertifikasi'),
            ];
            $this->db->table('sertifikasi')->insert($data);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/sbu');
        }
    }

    public function edit_sbu($id)
    {
        $data['kategori'] = $this->tentangModel->getKategoriSBU();
        $data['sertifikasi'] = $this->tentangModel->getSertifikasi($id);
        $data['data'] = $this->db->table('sertifikasi')->where(['id' => $id])->get()->getResultArray();
        $data['validation'] = $this->validation;
        $data['user'] = $this->userSession;
        $data['title'] = 'Edit Sertifikasi Badan Usaha';
        return view('admin/tentang/edit-sbu', $data);
    }

    public function proses_edit_sbu($id)
    {
        $validation = $this->validate([
            'kode_sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode harus diisi'
                ]
            ],
            'nama_sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama SBU harus diisi'
                ]
            ],
            'id_kategori_sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ]

        ]);
        if (!$validation) {
            return redirect()->to('/admin/edit-sbu/' . $id)->with('pesan', 'Data gagal diubah')->withInput();
        } else {
            $data = [
                'kode_sertifikasi' => $this->request->getVar('kode_sertifikasi'),
                'nama_sertifikasi' => $this->request->getVar('nama_sertifikasi'),
                'id_kategori_sertifikasi' => $this->request->getVar('id_kategori_sertifikasi'),
            ];
            $this->db->table('sertifikasi')->where(['id' => $id])->update($data);

            session()->setFlashdata('pesan', 'Data berhasil diperbaharui');
            return redirect()->to('/admin/sbu');
        }
    }

    public function proses_hapus_sbu($id)
    {
        $this->db->table('sertifikasi')->where(['id' => $id])->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/sbu');
    }




    // ----------------- Kelola Galeri -----------------
    // -------------------------------------------------
    public function galeri()
    {
        $data['data'] = $this->galeriModel->getRelasi();
        $data['kategori'] = $this->db->table('kategori_jasa')->get()->getResultArray();
        $data['validation'] = $this->validation;
        $data['title'] = 'Daftar Galeri';
        return view('admin/galeri/daftar-galeri', $data);
    }

    public function tambah_kategori_jasa()
    {
        $data = [
            'nama_kategori' => $this->request->getVar('nama_kategori'),
        ];
        $this->db->table('kategori_jasa')->insert($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/galeri');
    }

    public function edit_kategori_jasa($id)
    {
        $data = [
            'nama_kategori' => $this->request->getVar('nama_kategori'),
        ];
        $this->db->table('kategori_jasa')->where(['id' => $id])->update($data);
        session()->setFlashdata('pesan', 'Data berhasil diperbaharui');
        return redirect()->to('/admin/galeri');
    }

    public function hapus_kategori_jasa($id)
    {
        $this->db->table('kategori_jasa')->where(['id' => $id])->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/galeri');
    }

    public function tambah_galeri()
    {
        $data['title'] = 'Tambah Galeri';
        $data['validation'] = $this->validation;
        $data['kategori'] = $this->db->table('kategori_jasa')->get()->getResultArray();
        return view('admin/galeri/tambah-galeri', $data);
    }

    public function proses_tambah_galeri()
    {
        $validation = $this->validate([
            'nomor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor harus diisi',
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal harus diisi'
                ]
            ],
            'judul' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Judul harus diisi'
                ]
            ],
            'lokasi' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Lokasi harus diisi'
                ]
            ],
            'pemberi_tugas' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Pemberi tugas harus diisi'
                ]
            ],
            'nilai' => [
                'rules' => 'required|is_natural',
                'errors' => [
                    'required' => 'Silahkan Masukan nilai',
                    'is_natural' => 'Nilai harus berupa angka'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,2048]|is_image[poster]',
                'errors' => [
                    'max_size' => 'maksimal File 2MB',
                    'is_image' => 'File harus berupa gambar'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/galeri/tambah')->with('pesan', 'Data gagal ditambahkan')->withInput();
        } else {
            $poster = $this->request->getFile('poster');
            if ($poster->getError() == 4) {
                $namaPoster = "default.jpg";
            } else {
                $namaPoster = $poster->getRandomName();
                $poster->move('img/foto_galeri', $namaPoster);
            }
            $this->galeriModel->save([
                'nomor' => $this->request->getVar('nomor'),
                'tanggal' => $this->request->getVar('tanggal'),
                'judul' => $this->request->getVar('judul'),
                'lokasi' => $this->request->getVar('lokasi'),
                'pemberi_tugas' => $this->request->getVar('pemberi_tugas'),
                'nilai' => $this->request->getVar('nilai'),
                'id_kategori' => $this->request->getVar('kategori'),
                'poster' => $namaPoster,
            ]);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/galeri');
        }
    }

    public function edit_galeri($id)
    {
        $data['title'] = 'Edit Galeri';
        $data['validation'] = $this->validation;
        $data['kategori'] = $this->db->table('kategori_jasa')->get()->getResultArray();
        $data['data'] = $this->galeriModel->where(['id' => $id])->first();
        return view('admin/galeri/edit-galeri', $data);
    }
    public function proses_edit_galeri($id)
    {
        $data = $this->galeriModel->where(['id' => $id])->first();
        $validation = $this->validate([
            'nomor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor harus diisi',
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal harus diisi'
                ]
            ],
            'judul' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Judul harus diisi'
                ]
            ],
            'lokasi' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Lokasi harus diisi'
                ]
            ],
            'pemberi_tugas' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Pemberi tugas harus diisi'
                ]
            ],
            'nilai' => [
                'rules' => 'required|is_natural',
                'errors' => [
                    'required' => 'Silahkan Masukan nilai',
                    'is_natural' => 'Nilai harus berupa angka'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,2048]|is_image[poster]',
                'errors' => [
                    'max_size' => 'maksimal File 2MB',
                    'is_image' => 'File harus berupa gambar'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/galeri/edit/' . $id)->with('pesan', 'Data gagal diperbaharui')->withInput();
        } else {
            $posterLama = $data['poster'];
            $poster = $this->request->getFile('poster');
            if ($poster->getError() == 4) {
                $namaPoster = $posterLama;
            } else {
                $namaPoster = $poster->getRandomName();
                $poster->move('img/foto_galeri', $namaPoster);
                if ($posterLama != 'default.jpg') {
                    unlink('img/foto_galeri/' . $posterLama);
                }
            }
            $this->galeriModel->save([
                'id' => $id,
                'nomor' => $this->request->getVar('nomor'),
                'tanggal' => $this->request->getVar('tanggal'),
                'judul' => $this->request->getVar('judul'),
                'lokasi' => $this->request->getVar('lokasi'),
                'pemberi_tugas' => $this->request->getVar('pemberi_tugas'),
                'nilai' => $this->request->getVar('nilai'),
                'id_kategori' => $this->request->getVar('kategori'),
                'poster' => $namaPoster,
            ]);
            session()->setFlashdata('pesan', 'Data berhasil Dirubah');
            return redirect()->to('/admin/galeri');
        }
    }

    public function hapus_galeri($id)
    {
        $data = $this->db->table('galeri')->where(['id' => $id])->get()->getRowArray();
        if ($data['poster'] != 'default.jpg') {
            unlink('img/foto_galeri/' . $data['poster']);
        }
        $this->db->table('galeri')->where(['id' => $id])->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/galeri');
    }


    // ----------------- Kelola Sosmed -----------------
    // -------------------------------------------------

    public function sosmed()
    {
        $data['title'] = 'Sosial Media';
        $data['validation'] = $this->validation;
        $data['user'] = $this->userSession;
        $data['data'] = $this->db->table('sosmed')->get()->getResultArray();
        return view('admin/sosmed/sosmed', $data);
    }

    public function edit_sosmed($id)
    {
        if ($this->request->getVar('url') == '') {
            $url = '#';
        } else {
            $url = $this->request->getVar('url');
        }
        $data = [
            'id' => $id,
            'url' => $url,
        ];
        $this->db->table('sosmed')->where(['id' => $id])->update($data);
        session()->setFlashdata('pesan', 'Data berhasil diperbaharui');
        return redirect()->to('/admin/sosmed');
    }


    // ------------------ Kelola FAQ -------------------
    // -------------------------------------------------
    public function faq()
    {
        $data = [
            'title' => 'FAQ Admin'
        ];
        $data['user'] = $this->userSession;
        $faq = $this->FaqModel->findAll();
        $data['faq'] = $faq;

        return view('admin/faq/faq', $data);
    }
    public function tambah_faq()
    {
        $data['title'] = 'Tambah Faq';
        $data['user'] = $this->userSession;
        return view('admin/faq/tambah-faq', $data);
    }
    public function proses_tambahfaq()
    {
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi'
                ]
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi harus diisi'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/faq')->with('pesan', 'Data gagal ditambahkan')->withInput();
        } else {
            $this->FaqModel->save([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
            ]);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/faq');
        }
    }
    public function edit_faq($id)
    {
        $data['title'] = 'Edit Faq';
        $data['validation'] = $this->validation;
        $data['user'] = $this->userSession;
        $data['faq'] = $this->FaqModel->where('id', $id)->first();
        return view('admin/faq/edit-faq', $data);
    }
    public function hapus_faq($id)
    {
        $this->FaqModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/faq');
    }
    public function proses_edit_faq($id)
    {
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi'
                ]
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi harus diisi'
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('/admin/edit-faq/' . $id)->with('pesan', 'Data gagal diubah')->withInput();
        } else {
            $this->FaqModel->save([
                'id' => $id,
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
            ]);
            session()->setFlashdata('pesan', 'Data berhasil diperbaharui');
            return redirect()->to('/admin/faq');
        }
    }
}
