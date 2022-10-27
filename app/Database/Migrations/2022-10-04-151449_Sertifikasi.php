<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sertifikasi extends Migration
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
            'kode_sertifikasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_sertifikasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_kategori_sertifikasi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_kategori_sertifikasi', 'kategori_sertifikasi', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('sertifikasi', true);
    }

    public function down()
    {
        $this->forge->dropTable('sertifikasi');
    }
}
