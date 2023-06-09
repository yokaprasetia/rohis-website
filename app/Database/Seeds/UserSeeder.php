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
                // ============================================================== ADMIN
                'nama'          => 'Yoka Prasetia',
                'email'         => '221910846@stis.ac.id',
                'no_hp'         => '0895379261962',
                'domisili'      => 'Yogyakarta',
                'nim'           => '221910846',
                'kelas'         => '4SI2',
                'angkatan'      => '61',
                'tingkat'       => 'Tingkat IV',
                'tanggal_lahir' => '2002-01-20',
                'password'      => password_hash('221910846', PASSWORD_DEFAULT),
                'role'          => 'Admin',
                'alamat_kost'   => 'Jl. Solihun',
                'jenis_kelamin' => 'laki-laki',
            ],
            [
                // ============================================================== KETUA
                'nama'          => 'Ridwan Syech Nawawi',
                'email'         => '221112213@stis.ac.id',
                'no_hp'         => '0895379261943',
                'domisili'      => 'Jakarta',
                'nim'           => '221112213',
                'kelas'         => '4SI1',
                'angkatan'      => '61',
                'tingkat'       => 'Tingkat IV',
                'tanggal_lahir' => '2002-04-20',
                'password'      => password_hash('221112213', PASSWORD_DEFAULT),
                'role'          => 'Ketua',
                'alamat_kost'   => 'Jl. Solihun',
                'jenis_kelamin' => 'laki-laki',
            ],
            // ============================================================== Humas
            [
                'nama'          => 'Muhammad Sasmito',
                'email'         => '212110880@stis.ac.id',
                'no_hp'         => '0895123456786',
                'domisili'      => 'Tangerang',
                'nim'           => '212110880',
                'kelas'         => '2KS3',
                'angkatan'      => '63',
                'tingkat'       => 'Tingkat II',
                'tanggal_lahir' => '2003-08-24',
                'password'      => password_hash('212110880', PASSWORD_DEFAULT),
                'role'          => 'Humas',
                'alamat_kost'   => 'Jl. Sensus II',
                'jenis_kelamin' => 'laki-laki',
            ],
            // ============================================================== BENDAHARA
            [
                'nama'          => 'Siti Marfuthoh',
                'email'         => '222210886@stis.ac.id',
                'no_hp'         => '0895123456785',
                'domisili'      => 'Bengkulu',
                'nim'           => '222210886',
                'kelas'         => '1ST4',
                'angkatan'      => '64',
                'tingkat'       => 'Tingkat I',
                'tanggal_lahir' => '2004-01-01',
                'password'      => password_hash('222210886', PASSWORD_DEFAULT),
                'role'          => 'Bendahara',
                'alamat_kost'   => 'Gg. Asem',
                'jenis_kelamin' => 'Perempuan',
            ],
            // ============================================================== ANGGOTA
            [
                'nama'          => 'Muhammad Barbara',
                'email'         => '221910740@stis.ac.id',
                'no_hp'         => '0895123456784',
                'domisili'      => 'Aceh',
                'nim'           => '221910740',
                'kelas'         => '4SI2',
                'angkatan'      => '61',
                'tingkat'       => 'Tingkat IV',
                'tanggal_lahir' => '2000-06-01',
                'password'      => password_hash('221910740', PASSWORD_DEFAULT),
                'role'          => 'Anggota',
                'alamat_kost'   => 'Gg. Ayub',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama'          => 'Muhammad Sariro Niro Kakawin',
                'email'         => '211913422@stis.ac.id',
                'no_hp'         => '0895123456783',
                'domisili'      => 'Bangka',
                'nim'           => '211913422',
                'kelas'         => '4SK1',
                'angkatan'      => '61',
                'tingkat'       => 'Tingkat IV',
                'tanggal_lahir' => '2001-01-23',
                'password'      => password_hash('211913422', PASSWORD_DEFAULT),
                'role'          => 'Anggota',
                'alamat_kost'   => 'Gg. Ayub',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama'          => 'Banendra Hayuk Saputri',
                'email'         => '212008898@stis.ac.id',
                'no_hp'         => '0895123456782',
                'domisili'      => 'Yogyakarta',
                'nim'           => '212008898',
                'kelas'         => '3D32',
                'angkatan'      => '62',
                'tingkat'       => 'Tingkat III',
                'tanggal_lahir' => '2002-01-03',
                'password'      => password_hash('212008898', PASSWORD_DEFAULT),
                'role'          => 'Anggota',
                'alamat_kost'   => 'Gg. Santai',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama'          => 'Rhuhul Sulfahmi Kun',
                'email'         => '221910845@stis.ac.id',
                'no_hp'         => '0895123456781',
                'domisili'      => 'Yogyakarta',
                'nim'           => '221910845',
                'kelas'         => '4SK1',
                'angkatan'      => '62',
                'tingkat'       => 'Tingkat III',
                'tanggal_lahir' => '2002-03-14',
                'password'      => password_hash('221910845', PASSWORD_DEFAULT),
                'role'          => 'Anggota',
                'alamat_kost'   => 'Gg. Ggu',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama'          => 'Siti Sowan Rumiyin',
                'email'         => '222208451@stis.ac.id',
                'no_hp'         => '0895123456781',
                'domisili'      => 'Jawa Timur',
                'nim'           => '222208451',
                'kelas'         => '4SK1',
                'angkatan'      => '63',
                'tingkat'       => 'Tingkat II',
                'tanggal_lahir' => '2002-03-14',
                'password'      => password_hash('222208451', PASSWORD_DEFAULT),
                'role'          => 'Anggota',
                'alamat_kost'   => 'Gg. Sempit',
                'jenis_kelamin' => 'Perempuan',
            ],
        ];
        // Banyak data
        $this->db->table('users')->insertBatch($data);
    }
}
