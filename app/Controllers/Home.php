<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->tentangModel = new \App\Models\TentangModel();
        $this->faqModel = new \App\Models\FaqModel();
        helper('form', 'url');
    }
    public function index()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Home';
        return view('homepage/index', $data);
    }

    public function galeri()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Galeri';
        return view('homepage/galeri', $data);
    }

    public function tentang()
    {
        $data['kategori'] = $this->tentangModel->findAll();
        $data['jabatan'] = $this->tentangModel->getJabatan();
        $data['personil'] = $this->tentangModel->getPersonil();
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Tentang';
        return view('homepage/tentang', $data);
    }

    public function kontak()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Kontak';
        return view('homepage/kontak', $data);
    }

    public function kirim_kontak()
    {
        $validate = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus valid ',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi',
                ]
            ],
            'pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pesan harus diisi'
                ]
            ],
        ]);

        if (!$validate) {
            return view('homepage/kontak', [
                'validation' => $this->validator,
                'segment1' => $this->request->uri->getSegment(1),
                'title' => 'Kontak'
            ]);
        } else {
            $nama = $this->request->getVar('nama');
            $email = $this->request->getVar('email');
            $judul = $this->request->getVar('judul');
            $pesan = $this->request->getVar('pesan');

            $email = \Config\Services::email();
            $email->setFrom($nama);
            $email->setNewline("\r\n");
            $email->setCRLF("\r\n");
            $email->setFrom('TRATAMA', 'TRATAMA');
            $email->setTo($this->request->getVar('email'));
            $email->setSubject($judul);
            $email->setMessage($pesan);
            if ($email->send()) {
                session()->setFlashdata('pesan', 'Pesan berhasil dikirim');
                return redirect()->to('/kontak');
            } else {
                $email->printDebugger(['headers']);
                session()->setFlashdata('gagal', 'Pesan gagal dikirim');
                return redirect()->to('/kontak');
            }
        }
    }

    public function faq()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'FAQ';
        $faq = $this->faqModel->findAll();
        $data['faq'] = $faq;
        return view('homepage/faq', $data);
    }
}
