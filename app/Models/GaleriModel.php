<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table            = 'galeri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields = ['nomor', 'tanggal', 'judul', 'lokasi', 'pemberi_tugas', 'nilai', 'id_kategori', 'poster'];

    public function getRelasi()
    {
        $sql = $this->db->table('galeri');
        $sql->select('galeri.*,kategori_jasa.nama_kategori');
        $sql->join('kategori_jasa', 'kategori_jasa.id = galeri.id_kategori');
        $sql->orderBy('galeri.id', 'ASC');
        return $sql->get()->getResultArray();
    }
}
