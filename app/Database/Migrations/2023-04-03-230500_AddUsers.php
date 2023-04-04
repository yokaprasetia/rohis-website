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
            ],
            'alamat' => [
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
            ],
            'angkatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'prodi' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'tanggal_lahir' => [
                'type'       => 'DATE',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'role' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'is_active' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'alamat_kost' => [
                'type'       => 'VARCHAR',
                'constraint' => '126',
            ],
            'jenis_kelamin' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
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
