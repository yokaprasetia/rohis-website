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
                'tanggal'   => '2023-02-20',
                'waktu_mulai'   => '07:30:00',
                'waktu_selesai' => '11:00:00',
                'peserta'       => 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum',
                'jenis_kelamin' => 'Laki-Laki, Perempuan',
                'link'      => '',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'nama'      => 'Kajian Islam Spesial 2023',
                'isi'       => "Dalam Rangka memperingati Isra' Mi'raj, Polstat STIS mengadakan pengajian spesial unutk menumbuhkan kesaradan mahasiswa terhadap peristiwa spesial yang dirasakan oleh Rasulullah.",
                'tempat'    => 'Live Zoom STIS',
                'tanggal'   => '2023-03-01',
                'waktu_mulai'   => '08:00:00',
                'waktu_selesai' => '10:00:00',
                'peserta'       => 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum',
                'jenis_kelamin' => 'Laki-Laki, Perempuan',
                'link'      => 'https://zoom.us/',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'nama'      => "Peringatan Nuzulul Qur'an",
                'isi'       => "Memperingati Peristiwa Nuzulul Qur'an dengan mengadakan pengajian terhadap seluruh mahasiswa STIS terutama tingkat I dan II",
                'tempat'    => 'Online Melalui Zoom',
                'tanggal'   => '2023-03-30',
                'waktu_mulai'   => '19:30:00',
                'waktu_selesai' => '21:00:00',
                'peserta'       => 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum',
                'jenis_kelamin' => 'Laki-Laki, Perempuan',
                'link'      => 'https://s.stis.ac.id/VBGOCPoisson2022',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'nama'      => 'Peringatan Maulid Nabi',
                'isi'       => 'Memperingati datangnya bulan Ramadhan, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa',
                'tempat'    => 'Auditorium STIS',
                'tanggal'   => '2023-04-05',
                'waktu_mulai'   => '09:30:00',
                'waktu_selesai' => '11:30:00',
                'peserta'       => 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum',
                'jenis_kelamin' => 'Laki-Laki, Perempuan',
                'link'      => '',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
            [
                'nama'      => 'Peringatan Lebaran',
                'isi'       => 'Menyambut Lebaran, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa',
                'tempat'    => 'Auditorium STIS',
                'tanggal'   => '2023-04-20',
                'waktu_mulai'   => '09:30:00',
                'waktu_selesai' => '11:30:00',
                'peserta'       => 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum',
                'jenis_kelamin' => 'Laki-Laki, Perempuan',
                'link'      => '',
                'updated_at' => Time::now('Asia/Jakarta'),
            ],
        ];


        // Banyak data
        $this->db->table('pengumuman')->insertBatch($data);
    }
}
