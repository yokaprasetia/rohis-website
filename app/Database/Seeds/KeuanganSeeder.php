<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

// use CodeIgniter\I18n\Time;

class KeuanganSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'keterangan'      => 'Kas Rutinan',
                'nominal'       => 125000,
                'tanggal'    => '2023-04-24',
                'jenis'   => 'Masuk',
                'file'   => 'bukti-default1.png',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'keterangan'      => 'Pembelian Peralatan Kajian',
                'nominal'       => 200000,
                'tanggal'    => '2023-01-24',
                'jenis'   => 'Keluar',
                'file'   => 'bukti-default2.png',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'keterangan'      => 'Subsidi dari Kampus',
                'nominal'       => 400000,
                'tanggal'    => '2023-04-01',
                'jenis'   => 'Masuk',
                'file'   => 'bukti-default3.png',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'keterangan'      => 'Danus Rutin',
                'nominal'       => 325000,
                'tanggal'    => '2023-03-10',
                'jenis'   => 'Masuk',
                'file'   => 'bukti-default4.png',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
        ];

        // Banyak data
        $this->db->table('keuangan')->insertBatch($data);
    }
}
