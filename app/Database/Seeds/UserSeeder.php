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
                'role'          => 'anggota',
                'alamat_kost'   => 'Jl. Solihun',
                'jenis_kelamin' => 'laki-laki',
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
                'role'          => 'ketua',
                'alamat_kost'   => 'Jl. Ayub',
                'jenis_kelamin' => 'laki-laki',
            ],
        ];

        // 1 Data
        // $this->db->table('users')->insert($data);

        // Banyak data
        $this->db->table('users')->insertBatch($data);
    }
}
