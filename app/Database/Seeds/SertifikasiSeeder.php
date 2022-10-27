<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SertifikasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'kode_sertifikasi' => 'RE 103',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Air',
                'id_kategori_sertifikasi' => '1',
            ],
            [
                'id' => '2',
                'kode_sertifikasi' => 'RE 104',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Jalan',
                'id_kategori_sertifikasi' => '1',
            ],
            [
                'id' => '3',
                'kode_sertifikasi' => 'RE 105',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Jembatan',
                'id_kategori_sertifikasi' => '1',
            ],
            [
                'id' => '4',
                'kode_sertifikasi' => 'RE 106',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Bangunan',
                'id_kategori_sertifikasi' => '1',
            ],
            [
                'id' => '5',
                'kode_sertifikasi' => 'RE 107',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Lainnya',
                'id_kategori_sertifikasi' => '1',
            ],
            [
                'id' => '6',
                'kode_sertifikasi' => 'RE 108',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Air',
                'id_kategori_sertifikasi' => '2',
            ],
            [
                'id' => '7',
                'kode_sertifikasi' => 'RE 109',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Jalan',
                'id_kategori_sertifikasi' => '2',
            ],
            [
                'id' => '8',
                'kode_sertifikasi' => 'RE 110',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Jembatan',
                'id_kategori_sertifikasi' => '2',
            ],
            [
                'id' => '9',
                'kode_sertifikasi' => 'RE 111',
                'nama_sertifikasi' => 'Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Bangunan',
                'id_kategori_sertifikasi' => '2',
            ]
        ];
        $this->db->table('sertifikasi')->insertBatch($data);
    }
}
