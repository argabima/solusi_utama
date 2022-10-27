<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TentangJabatan extends Migration
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
            'nama_jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_kategori', 'tentang_kategori', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tentang_jabatan', true);
    }

    public function down()
    {
        $this->forge->dropTable('tentang_jabatan');
    }
}
