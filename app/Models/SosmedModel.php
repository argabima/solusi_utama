<?php

namespace App\Models;

use CodeIgniter\Model;

class SosmedModel extends Model
{
    protected $table            = 'sosmed';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields = ['nama_sosmed', 'url'];

    public function sosmed()
    {
        $sql = $this->db->table('sosmed');
        $sql->select('*');
        return $sql->get()->getResultArray();
    }
}
