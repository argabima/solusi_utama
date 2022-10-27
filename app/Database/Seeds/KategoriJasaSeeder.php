<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriJasaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_kategori' => 'Perencanaan',
            ],
            [
                'id' => 2,
                'nama_kategori' => 'Pengawasan',
            ],
            [
                'id' => 3,
                'nama_kategori' => 'Pengendalian',
            ],
            [
                'id' => 4,
                'nama_kategori' => 'Pengujian',
            ]
        ];
        $this->db->table('kategori_jasa')->insertBatch($data);
    }
}
