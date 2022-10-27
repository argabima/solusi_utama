<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table            = 'artikel';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields = ['judul', 'slug', 'isi_artikel', 'poster', 'status', 'created_at', 'updated_at', 'deleted_at'];

    public function artikel()
    {
        $sql = $this->db->table('artikel');
        $sql->select('*');
        return $sql->get()->getResultArray();
    }
}
