<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TentangPersonilSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'nama_personil' => 'Desi Triyatiningsih, S.Pd.AUD',
                'kampus' => 'Amikom',
                'id_jabatan'  => '1',
                'id_kategori'  => '1',
            ],
            [
                'id' => '2',
                'nama_personil' => 'Irawan Danar Subekti',
                'kampus' => 'UGM',
                'id_jabatan'  => '2',
                'id_kategori'  => '2'
            ],
            [
                'id' => '3',
                'nama_personil' => 'Aditya Noor Hadhy Utama, IAI',
                'kampus' => '(UII)',
                'id_jabatan'  => '2',
                'id_kategori'  => '1'
            ],
            [
                'id' => '4',
                'nama_personil' => 'Kurniaji Safarudin, S.TP',
                'kampus' => '(UII)',
                'id_jabatan'  => '2',
                'id_kategori'  => '2'
            ],
        ];

        $this->db->table('tentang_personil')->insertBatch($data);
    }
}
