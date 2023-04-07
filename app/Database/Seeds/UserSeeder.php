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
                'email'         => '221910846@stis.ac.id',
                'no_hp'         => '0895379261962',
                'domisili'        => 'Yogyakarta',
                'nim'           => '221910846',
                'kelas'         => '4SI2',
                'angkatan'      => '61',
                'prodi'         => 'D-IV KS',
                'tanggal_lahir' => '2002-01-20',
                'password'      => password_hash('221910846', PASSWORD_DEFAULT),
                'role'          => 'Anggota',
                'alamat_kost'   => 'Jl. Solihun',
                'jenis_kelamin' => 'laki-laki',
            ],
            [
                'nama'          => 'Emperor Islamic',
                'email'         => '221910001@stis.ac.id',
                'no_hp'         => '0895123456789',
                'domisili'      => 'Jawa Boss',
                'nim'           => '221910001',
                'kelas'         => '4SD1',
                'angkatan'      => '60',
                'prodi'         => 'D-IV ST',
                'tanggal_lahir' => '2002-01-01',
                'password'      => password_hash('221910001', PASSWORD_DEFAULT),
                'role'          => 'Ketua',
                'alamat_kost'   => 'Jl. Ayub',
                'jenis_kelamin' => 'laki-laki',
            ],
            [
                'nama'          => 'Muhammad Leadership',
                'email'         => '211910880@stis.ac.id',
                'no_hp'         => '0895123456789',
                'domisili'      => 'Tangerang',
                'nim'           => '211910880',
                'kelas'         => '4SD1',
                'angkatan'      => '60',
                'prodi'         => 'D-IV ST',
                'tanggal_lahir' => '2002-01-01',
                'password'      => password_hash('211910880', PASSWORD_DEFAULT),
                'role'          => 'Bendahara',
                'alamat_kost'   => 'Jl. Ayub',
                'jenis_kelamin' => 'laki-laki',
            ],
        ];
        // Banyak data
        $this->db->table('users')->insertBatch($data);
    }
}
