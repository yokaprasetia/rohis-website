<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

// use CodeIgniter\I18n\Time;

class DaftarHadirSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [ // =============================================================== Kegiatan 1
                'id_kegiatan'   => 1,
                'nim'           => 221910740,
                'nama'          => 'Muhammad Barbara',
                'tanggal'       => '2023-02-20',
                'file'          => 'bukti-default1.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 1,
                'nim'           => 211913422,
                'nama'          => 'Muhammad Sariro Niro Kakawin',
                'tanggal'       => '2023-02-20',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 1,
                'nim'           => 212008898,
                'nama'          => 'Banendra Hayuk Saputri',
                'tanggal'       => '2023-02-20',
                'file'          => 'bukti-default3.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 1,
                'nim'           => 221910845,
                'nama'          => 'Rhuhul Sulfahmi Kun',
                'tanggal'       => '2023-02-20',
                'file'          => 'bukti-default4.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 1,
                'nim'           => 222208451,
                'nama'          => 'Siti Sowan Rumiyin',
                'tanggal'       => '2023-02-20',
                'file'          => 'bukti-default1.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 1,
                'nim'           => 221910846,
                'nama'          => 'Yoka Prasetia',
                'tanggal'       => '2023-02-20',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],

            [ //============================================================== Kegiatan 2
                'id_kegiatan'   => 2,
                'nim'           => 221910846,
                'nama'          => 'Yoka Prasetia',
                'tanggal'       => '2023-03-01',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],

            [ //============================================================== Kegiatan 3
                'id_kegiatan'   => 3,
                'nim'           => 221910740,
                'nama'          => 'Muhammad Barbara',
                'tanggal'       => '2023-03-30',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 3,
                'nim'           => 211913422,
                'nama'          => 'Muhammad Sariro Niro Kakawin',
                'tanggal'       => '2023-03-30',
                'file'          => 'bukti-default3.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 3,
                'nim'           => 212008898,
                'nama'          => 'Banendra Hayuk Saputri',
                'tanggal'       => '2023-03-30',
                'file'          => 'bukti-default4.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],

            [ //============================================================== Kegiatan 4
                'id_kegiatan'   => 4,
                'nim'           => 212008898,
                'nama'          => 'Banendra Hayuk Saputri',
                'tanggal'       => '2023-04-05',
                'file'          => 'bukti-default3.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 4,
                'nim'           => 221910845,
                'nama'          => 'Rhuhul Sulfahmi Kun',
                'tanggal'       => '2023-04-05',
                'file'          => 'bukti-default1.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 4,
                'nim'           => 222208451,
                'nama'          => 'Siti Sowan Rumiyin',
                'tanggal'       => '2023-04-05',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 4,
                'nim'           => 221910846,
                'nama'          => 'Yoka Prasetia',
                'tanggal'       => '2023-04-05',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
        ];

        // 1 Data
        // $this->db->table('daftarHadir')->insert($data);

        // Banyak data
        $this->db->table('daftarHadir')->insertBatch($data);
    }
}
