<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKeuangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nominal' => [
                'type'          => 'INT',
                'constraint'    => 11,
            ],
            'tanggal' => [
                'type'          => 'DATE',
            ],
            'jenis' => [
                'type'          => 'VARCHAR',
                'constraint'    => '126',
            ],
            'file' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
            'keterangan' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('keuangan');
    }

    public function down()
    {
        $this->forge->dropTable('keuangan');
    }
}
