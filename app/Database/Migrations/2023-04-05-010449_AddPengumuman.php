<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class AddPengumuman extends Migration
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
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
            'isi' => [
                'type'          => 'TEXT',
            ],
            'tempat' => [
                'type'          => 'VARCHAR',
                'constraint'    => '126',
            ],
            'tanggal' => [
                'type'          => 'DATE',
            ],
            'waktu_mulai' => [
                'type'          => 'TIME',
            ],
            'waktu_selesai' => [
                'type'          => 'TIME',
            ],
            'peserta' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
            'jenis_kelamin' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
            'link' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
                'null'          => true,
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengumuman');
    }

    public function down()
    {
        $this->forge->dropTable('pengumuman');
    }
}
