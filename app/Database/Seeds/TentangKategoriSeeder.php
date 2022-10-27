<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TentangKategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'nama_kategori' => 'Manajemen'
            ],
            [
                'id' => '2',
                'nama_kategori' => 'Staff'
            ]
        ];
        $this->db->table('tentang_kategori')->insertBatch($data);
    }
}
