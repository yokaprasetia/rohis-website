<?php

namespace App\Controllers;

use App\Models\DaftarHadirModel;
use App\Models\PengumumanModel;

use CodeIgniter\I18n\Time;

class DaftarHadir extends BaseController
{
    public function index()
    {
        $session = session();
        $modelPengumuman = new PengumumanModel();
        $modelDaftarHadir = new DaftarHadirModel();

        // Daftar kegiatan yang sudah terjadi - isBefore()
        $waktu_sekarang = Time::now('Asia/Jakarta');

        $semua_kegiatan = $modelPengumuman->orderBy('updated_at', 'DESC')->findAll();
        $daftar_kegiatan = [];
        foreach ($semua_kegiatan as $kegiatan) :
            $time = Time::parse($kegiatan['tanggal']);
            $proses = $time->isBefore($waktu_sekarang);
            if ($proses) {
                $daftar_kegiatan[] = $kegiatan;
            }
        endforeach;

        // Cek kehadiran setiap kegiatan yang !AfterNow
        // Menggunakan variabel $daftar_kegiatan;
        $nim_user = $session->get('nim');

        $kehadiran = [];
        foreach ($daftar_kegiatan as $kegiatan) :
            $id_kegiatan = $kegiatan['id'];
            $proses = $modelDaftarHadir->where('id_kegiatan', $id_kegiatan)->findAll();

            if ($proses) {
                $ada = false;
                foreach ($proses as $p) :
                    if ($p['nim'] == $nim_user) {
                        $ada = true;
                    }
                endforeach;
                if ($ada) {
                    $kehadiran[] = 'Hadir';
                } else {
                    $kehadiran[] = 'Tidak Hadir';
                }
            } else {
                $kehadiran[] = 'Tidak Hadir';
            }
        endforeach;

        // Cek kegiatan yang sedang berlangsung sameAs()
        $now = Time::now('Asia/Jakarta');
        $tanggal_sekarang = $now->toDateString();

        $cek_kegiatan_sekarang = $modelPengumuman->where('tanggal', $tanggal_sekarang)->first();
        if ($cek_kegiatan_sekarang) {
            $berlangsung = true;
            $kegiatan_berlangsung = $modelPengumuman->where('tanggal', $tanggal_sekarang)->first();
        } else {
            $berlangsung = false;
            $kegiatan_berlangsung = ''; // gak dipake
        }

        // cek kehadiran akun pada kegiatan yang sedang berlangsung
        if ($berlangsung === true) {
            $nim = $session->get('nim');
            $proses = $modelDaftarHadir->where('nim', $nim)->first();

            if ($proses) {
                $status_presensi = 'Sudah';
            } else {
                $status_presensi = 'Belum';
            }
        } else {
            $status_presensi = '';
        }

        $data = [
            'judul' => 'SiROHIS | Daftar Hadir',
            'subjudul' => 'Daftar Hadir',
            'active' => 'daftarHadir',
            'daftar_kegiatan' => $daftar_kegiatan,
            'berlangsung' => $berlangsung,
            'kegiatan_berlangsung' => $kegiatan_berlangsung,
            'kehadiran' => $kehadiran,
            'status_presensi' => $status_presensi,
        ];

        return view('page/daftarHadir', $data);
    }

    public function detail($id_kegiatan)
    {
        // Ambil Nama Kegiatan
        $modelPengumuman = new PengumumanModel();
        $pengumuman = $modelPengumuman->where('id', $id_kegiatan)->first();

        // Ambil Peserta yang hadir dari Kegiatan $id
        $modelDaftarHadir = new DaftarHadirModel();
        $peserta = $modelDaftarHadir->where('id_kegiatan', $id_kegiatan)->findAll();

        $data = [
            'judul' => 'SiROHIS | Detail Kehadiran',
            'subjudul' => 'Detail Kehadiran',
            'active' => 'daftarHadir',
            'kehadiran' => [
                'nama_kegiatan' => $pengumuman['nama'],
                'peserta' => $peserta,
            ]
        ];

        return view('page/detailKehadiran', $data);
    }

    public function tambah()
    {
        $session = session();
        $modelPengumuman = new PengumumanModel();
        $modelDaftarHadir = new DaftarHadirModel();

        $data = [
            'judul' => 'SiROHIS | Daftar Hadir',
            'subjudul' => 'Daftar Hadir',
            'active' => 'daftarHadir',
        ];

        $validationRule = [
            'file' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[file,5000]', // 1000 = 1 MB
                ],
            ],
        ];

        // Cek validasi
        if (!$this->validate($validationRule)) {
            $data['errors'] = $this->validator->getErrors();

            return view('page/daftarHadir', $data);
        }

        // proses upload file ke folder public/bukti-transaksi
        $fileTransaksi = $this->request->getFile('file');
        $namaTransaksi = 'bukti-' . $fileTransaksi->getRandomName();
        $pindah = $fileTransaksi->move('bukti-transaksi', $namaTransaksi);

        if ($pindah) {

            $now = Time::now('Asia/Jakarta');
            $tanggal_sekarang = $now->toDateString();

            $kegiatan_berlangsung = $modelPengumuman->where('tanggal', $tanggal_sekarang)->first();

            $data = [
                'id_kegiatan' => $kegiatan_berlangsung['id'],
                'nama' =>  $session->get('nama'),
                'nim' => $session->get('nim'),
                'tanggal' => $kegiatan_berlangsung['tanggal'],
                'file' => $fileTransaksi->getName(),
                'updated_at' => Time::now('Asia/Jakarta'),
            ];

            // simpan ke data base seluruh isi form
            $proses = $modelDaftarHadir->save($data);

            if ($proses) {
                $session->setFlashdata('success', "Presensi Berhasil Dilakukan!");
                return redirect()->to('/daftarHadir');
            } else {
                $session->setFlashdata('danger', "Presensi Gagal Dilakukan!");
                return redirect()->to('/daftarHadir');
            }
        }
    }
}
