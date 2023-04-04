<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
// use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          => 'Yoka Prasetia',
                'email'         => 'prasetia356@gmail.com',
                'no_hp'         => '0895379261962',
                'domisili'        => 'Yogyakarta',
                'nim'           => '221910846',
                'kelas'         => '4SI2',
                'angkatan'      => '61',
                'prodi'         => 'D-IV KS',
                'tanggal_lahir' => '2002-01-20',
                'password'      => password_hash('yokaprasetia', PASSWORD_DEFAULT),
                'role'          => '1',
                'is_active'     => '1',
                'alamat_kost'   => 'Jl. Solihun',
                'jenis_kelamin' => 'laki-laki',
                'foto'          => 'yoka.png',
            ],
            [
                'nama'          => 'Giman Jumadi',
                'email'         => 'giman@gmail.com',
                'no_hp'         => '0895123456789',
                'domisili'      => 'Jawa Boss',
                'nim'           => '221910811',
                'kelas'         => '4SD1',
                'angkatan'      => '60',
                'prodi'         => 'D-IV ST',
                'tanggal_lahir' => '2002-01-01',
                'password'      => password_hash('gimanjumadi', PASSWORD_DEFAULT),
                'role'          => '2',
                'is_active'     => '1',
                'alamat_kost'   => 'Jl. Ayub',
                'jenis_kelamin' => 'laki-laki',
                'foto'          => 'giman.png',
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (nama, email, no_hp, alamat, nim, kelas, angkatan, prodi, tanggal_lahir, password, role, is_active, alamat_kost, jenis_kelamin) VALUES(:nama:, :email:, :no_hp:, :alamat:, :nim:, :kelas:, :angkatan:, :prodi:, :tanggal_lahir:, :password:, :role:, :is_active:, :alamat_kost:, :jenis_kelamin:)', $data);

        // Using Query Builder
        // $this->db->table('users')->insert($data); //hanya untuk 1 data
        $this->db->table('users')->insertBatch($data); // bisa banyak data (batch)
    }
}
