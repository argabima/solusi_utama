<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSertifikasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'nama_kategori' => 'Perencanaan Arsitektur',
            ],
            [
                'id' => '2',
                'nama_kategori' => 'Perencanaan Rekayasa',
            ]
        ];
        $this->db->table('kategori_sertifikasi')->insertBatch($data);
    }
}
