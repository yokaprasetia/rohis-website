<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDaftarHadir extends Migration
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
            'id_kegiatan' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'nama' => [
                'type'           => 'VARCHAR',
                'constraint'     => '126',
            ],
            'nim' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'tanggal' => [
                'type'          => 'DATE',
            ],
            'file' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('daftarHadir');
    }

    public function down()
    {
        $this->forge->dropTable('daftarHadir');
    }
}
