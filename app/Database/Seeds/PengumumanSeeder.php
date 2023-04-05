<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

// use CodeIgniter\I18n\Time;

class PengumumanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Pengajian Rutin Hari Senin',
                'isi'       => 'Pengajian rutin dalam rangka mengendalikan mutu mahasiswa Politeknik Statistika STIS yang dihadiri wajib oleh mahasiswa tingkat III. Mahasiswa lain dan masyarakat umum juga boleh mengikuti kegiatan.',
                'tempat'    => 'Masjid Kampus Politeknik Statistika STIS',
                'tanggal'   => '2023-04-20',
                'waktu'     => '18.30 - 19.30 WIB',
                'peserta'   => 'Wajib bagi Mahasiswa Tingkat III, dan terbuka untuk Umum',
                'link'      => '',
                'upload_at' => Time::now(),
            ],
            [
                'nama'      => 'Kajian Islam Spesial 2023',
                'isi'       => "Dalam Rangka memperingati Isra' Mi'raj, Polstat STIS mengadakan pengajian spesial unutk menumbuhkan kesaradan mahasiswa terhadap peristiwa spesial yang dirasakan oleh Rasulullah.",
                'tempat'    => 'Live Zoom STIS',
                'tanggal'   => '2023-04-24',
                'waktu'     => '18.30 - 19.30 WIB',
                'peserta'   => 'Seluruh Mahasiswa Tingkat IV',
                'link'      => 'https://zoom.us/',
                'upload_at' => Time::now(),
            ],
            [
                'nama'      => "Peringatan Nuzulul Qur'an",
                'isi'       => "Memperingati Peristiwa Nuzulul Qur'an dengan mengadakan pengajian terhadap seluruh mahasiswa STIS terutama tingkat I dan II",
                'tempat'    => 'Online Melalui Zoom',
                'tanggal'   => '2023-04-19',
                'waktu'     => '07.30-Selesai',
                'peserta'   => 'Wajib bagi Mahasiswa Tingkat I dan II',
                'link'      => 'https://s.stis.ac.id/VBGOCPoisson2022',
                'upload_at' => Time::now(),
            ],
            [
                'nama'      => 'Peringatan Maulid Nabi',
                'isi'       => 'Memperingati datangnya bulan Ramadhan, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa',
                'tempat'    => 'Auditorium STIS',
                'tanggal'   => '2023-04-25',
                'waktu'     => '18.00 - 19.30',
                'peserta'   => 'Seluruh Mahasiswa STIS',
                'link'      => '',
                'upload_at' => Time::now(),
            ],
        ];

        // 1 Data
        // $this->db->table('pengumuman')->insert($data);

        // Banyak data
        $this->db->table('pengumuman')->insertBatch($data);
    }
}
