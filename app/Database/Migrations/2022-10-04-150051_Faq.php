<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faq extends Migration
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
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'isi' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('faq', true);
    }

    public function down()
    {
        $this->forge->dropTable('faq');
    }
}
