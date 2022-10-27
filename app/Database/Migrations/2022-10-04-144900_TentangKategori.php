<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TentangKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tentang_kategori', true);
    }

    public function down()
    {
        $this->forge->dropTable('tentang_kategori');
    }
}
