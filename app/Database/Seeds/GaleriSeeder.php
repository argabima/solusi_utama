<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nomor' => 'GAL/001',
                'tanggal' => '2021-10-04',
                'judul' => 'Galeri 1',
                'lokasi' => 'Jl. Raya Cibaduyut No. 1, Cibaduyut, Kec. Cibiru, Bandung, Jawa Barat 40614',
                'pemberi_tugas' => 'PT. Cipta Karya',
                'nilai' => '100000000',
                'id_kategori' => 1,
                'poster' => 'default.jpg',
            ],
            [
                'id' => 2,
                'nomor' => 'GAL/001',
                'tanggal' => '2021-10-04',
                'judul' => 'Galeri 1',
                'lokasi' => 'Jl. Raya Cibaduyut No. 1, Cibaduyut, Kec. Cibiru, Bandung, Jawa Barat 40614',
                'pemberi_tugas' => 'PT. Cipta Karya',
                'nilai' => '100000000',
                'id_kategori' => 1,
                'poster' => 'default.jpg',
            ],
            [
                'id' => 3,
                'nomor' => 'GAL/001',
                'tanggal' => '2021-10-04',
                'judul' => 'Galeri 1',
                'lokasi' => 'Jl. Raya Cibaduyut No. 1, Cibaduyut, Kec. Cibiru, Bandung, Jawa Barat 40614',
                'pemberi_tugas' => 'PT. Cipta Karya',
                'nilai' => '100000000',
                'id_kategori' => 1,
                'poster' => 'default.jpg',
            ]
        ];
        $this->db->table('galeri')->insertBatch($data);
    }
}
