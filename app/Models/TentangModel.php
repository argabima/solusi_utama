<?php

namespace App\Models;

use CodeIgniter\Model;

class TentangModel extends Model
{
    protected $table            = 'tentang_kategori';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields = ['nama_kategori'];

    public function getJabatan()
    {
        $sql = $this->db->table('tentang_jabatan');
        $sql->select('tentang_jabatan.*, tentang_kategori.id as id_kategori, tentang_kategori.nama_kategori');
        $sql->join('tentang_kategori', 'tentang_jabatan.id_kategori = tentang_kategori.id');
        return $sql->get()->getResultArray();
    }

    public function getPersonil()
    {
        $sql = $this->db->table('tentang_personil');
        $sql->select('tentang_personil.*, tentang_kategori.id as id_kategori, tentang_kategori.nama_kategori, tentang_jabatan.id as id_jabatan, tentang_jabatan.nama_jabatan');
        $sql->join('tentang_jabatan', 'tentang_jabatan.id = tentang_personil.id_jabatan');
        $sql->join('tentang_kategori', 'tentang_kategori.id = tentang_personil.id_kategori');
        return $sql->get()->getResultArray();
    }

    public function getKategoriSBU()
    {
        $sql = $this->db->table('kategori_sertifikasi');
        $sql->select('*');
        return $sql->get()->getResultArray();
    }

    public function getSertifikasi($id = null)
    {
        $sql = $this->db->table('sertifikasi');
        $sql->select('sertifikasi.*, kategori_sertifikasi.nama_kategori');
        $sql->join('kategori_sertifikasi', 'kategori_sertifikasi.id = sertifikasi.id_kategori_sertifikasi');
        if ($id) {
            $sql->where('sertifikasi.id', $id);
            return $sql->get()->getRow();
        }
        return $sql->get()->getResultArray();
    }
}
