<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use DateTime;

class AddLogAktivitas extends Migration
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
            'nama_user' => [
                'type'          => 'VARCHAR',
                'constraint'    => '126',
            ],
            'nim' => [
                'type'          => 'VARCHAR',
                'constraint'    => '126',
            ],
            'jabatan' => [
                'type'          => 'VARCHAR',
                'constraint'    => '126',
            ],
            'waktu' => [
                'type'          => 'DATETIME',
            ],
            'jenis_aktivitas' => [
                'type'          => 'VARCHAR',
                'constraint'    => '126',
            ],
            'id_aktivitas' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'aksi' => [
                'type'          => 'VARCHAR',
                'constraint'    => '126',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('logAktivitas');
    }

    public function down()
    {
        $this->forge->dropTable('logAktivitas');
    }
}
