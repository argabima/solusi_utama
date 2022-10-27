<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'level' => 'admin',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'level' => 'pengguna',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta'),
            ]
        ];
        $this->db->table('admin')->insertBatch($data);
    }
}
