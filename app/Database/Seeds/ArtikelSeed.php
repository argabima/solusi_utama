<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class ArtikelSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Artikel Pertama',
                'slug' => 'artikel-pertama',
                'isi_artikel' => 'qwertyui',
                'poster' => 'default.jpg',
                'status' => '1',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta'),
                'deleted_at' => null,
            ]
        ];
        $this->db->table('artikel')->insertBatch($data);
    }
}
