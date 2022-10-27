<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sosmed extends Migration
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
            'nama_sosmed' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'url' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sosmed');
    }

    public function down()
    {
        $this->forge->dropTable('sosmed');
    }
}
