<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeri extends Migration
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
            'nomor' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'pemberi_tugas' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nilai' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'poster' => [
                'type' => 'VARCHAR',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_kategori', 'kategori_jasa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('galeri', true);
    }

    public function down()
    {
        $this->forge->dropTable('galeri');
    }
}
