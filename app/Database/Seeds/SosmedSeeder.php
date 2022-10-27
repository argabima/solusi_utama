<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SosmedSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'nama_sosmed' => 'Head Office',
                'url'  => 'Mandungan I, RT 004 RW 025, Margoluwih, Seyegan, Sleman, D.I. Yogyakarta'
            ],
            [
                'id' => '2',
                'nama_sosmed' => 'Studio',
                'url'  => 'Jl. Desa Mandungan, Margoluwih, Seyegan, Sleman, D.I. Yogyakarta'
            ],
            [
                'id' => '3',
                'nama_sosmed' => 'Email',
                'url'  => 'tratama.engineering@gmail.com'
            ],
            [
                'id' => '4',
                'nama_sosmed' => 'Phone',
                'url'  => '(0274) 555 555'
            ],
            [
                'id' => '5',
                'nama_sosmed' => 'Whatsapp',
                'url'  => '+6281234567890'
            ],
            [
                'id' => '6',
                'nama_sosmed' => 'Facebook',
                'url'  => '#facebook'
            ],
            [
                'id' => '7',
                'nama_sosmed' => 'Twitter',
                'url'  => '#twitter'
            ],
            [
                'id' => '8',
                'nama_sosmed' => 'Linkedin',
                'url'  => '#linkedin'
            ],
            [
                'id' => '9',
                'nama_sosmed' => 'Instagram',
                'url'  => '#instagram'
            ],
            [
                'id' => '10',
                'nama_sosmed' => 'Youtube',
                'url'  => '#youtube'
            ],

        ];
        $this->db->table('sosmed')->insertBatch($data);
    }
}
