<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TentangJabatanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'nama_jabatan' => 'Komisaris',
                'id_kategori'  => '1'
            ],
            [
                'id' => '2',
                'nama_jabatan' => 'Direktur Utama',
                'id_kategori'  => '1'
            ],
            [
                'id' => '3',
                'nama_jabatan' => 'Junior Arsitek',
                'id_kategori'  => '2'
            ],
            [
                'id' => '4',
                'nama_jabatan' => 'Drafter',
                'id_kategori'  => '2'
            ],

        ];
        $this->db->table('tentang_jabatan')->insertBatch($data);
    }
}
