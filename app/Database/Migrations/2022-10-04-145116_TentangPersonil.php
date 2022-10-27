<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TentangPersonil extends Migration
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
            'nama_personil' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kampus' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_jabatan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_jabatan', 'tentang_jabatan', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_kategori', 'tentang_kategori', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tentang_personil', true);
    }

    public function down()
    {
        $this->forge->dropTable('tentang_personil');
    }
}
