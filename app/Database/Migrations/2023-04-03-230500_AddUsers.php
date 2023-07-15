<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsers extends Migration
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
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
                'null'      => true,
            ],
            'domisili' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'nim' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'kelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
                'null'      => true,
            ],
            'angkatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
                'null'      => true,
            ],
            'tingkat' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
                'null'      => true,
            ],
            'tanggal_lahir' => [
                'type'       => 'DATE',
                'null'      => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'alamat_kost' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
                'null'      => true,
            ],
            'jenis_kelamin' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'      => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
