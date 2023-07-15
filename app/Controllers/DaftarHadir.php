<?php

namespace App\Controllers;

use App\Models\DaftarHadirModel;
use App\Models\PengumumanModel;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;

class DaftarHadir extends BaseController
{
    public function index()
    {
        $session = session();
        $modelPengumuman = new PengumumanModel();
        $modelDaftarHadir = new DaftarHadirModel();
        $modelUser = new UserModel();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $waktu_sekarang = Time::now('Asia/Jakarta');

        $semua_kegiatan = $modelPengumuman->orderBy('updated_at', 'DESC')->findAll();

        // DAFTAR FULL KEGIATAN YANG SUDAH TERJADI =====================================================================================
        $full_kegiatan = $modelPengumuman->orderBy('tanggal', 'DESC')->findAll();
        $full_keg_before_now = [];
        foreach ($full_kegiatan as $kegiatan) :
            $time = Time::parse($kegiatan['tanggal']);
            $proses = $time->isBefore($waktu_sekarang);
            if ($proses) {
                $full_keg_before_now[] = $kegiatan;
            }
        endforeach;

        // DAFTAR KEGIATAN WAJIB YANG SUDAH TERJADI (UNTUK RIWAYAT DAFTAR HADIR) =======================================================
        $daftar_kegiatan = [];
        foreach ($semua_kegiatan as $kegiatan) :

            // FILTER KEGIATAN WAJIB USER =======================================================
            $listTingkat = explode(', ', $kegiatan['peserta']);
            $listJk = explode(', ', $kegiatan['jenis_kelamin']);
            $wajib = false;

            for ($i = 0; $i < count($listTingkat); $i++) {
                if ($listTingkat[$i] == session()->get('tingkat')) {
                    for ($j = 0; $j < count($listJk); $j++) {
                        if ($listJk[$j] == session()->get('jenis_kelamin')) {
                            $wajib = true;
                        }
                    }
                }
            }

            // FILTER KEGIATAN YANG SUDAH TERJADI - isBefore() ==================================
            if ($wajib == true) {
                $time = Time::parse($kegiatan['tanggal']);
                $proses = $time->isBefore($waktu_sekarang);
                if ($proses) {
                    $daftar_kegiatan[] = $kegiatan;
                }
            }
        endforeach;



        // CEK KEHADIRAN SETIAP KEGIATAN (!AfterNow) MENGGUNAKAN VARIABEL $daftar_kegiatan; ============================================
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

        // CEK KEGIATAN YANG SEDANG BERLANGSUNG PADA AKUN sameAs() =====================================================================
        $now = Time::now('Asia/Jakarta');
        $tanggal_sekarang = $now->toDateString();

        $cek_kegiatan_sekarang = $modelPengumuman->where('tanggal', $tanggal_sekarang)->orderBy('updated_at', 'DESC')->first();

        $berlangsung = false;
        if (isset($cek_kegiatan_sekarang)) {
            $cek_tingkat = explode(', ', $cek_kegiatan_sekarang['peserta']);
            $cek_jk = explode(', ', $cek_kegiatan_sekarang['jenis_kelamin']);

            for ($i = 0; $i < count($cek_tingkat); $i++) {
                if ($cek_tingkat[$i] == session()->get('tingkat')) {
                    for ($j = 0; $j < count($cek_jk); $j++) {
                        if ($cek_jk[$j] == session()->get('jenis_kelamin')) {
                            $berlangsung = true;
                        }
                    }
                }
            }
        }

        if ($berlangsung == true) {
            $kegiatan_berlangsung = $modelPengumuman->where('tanggal', $tanggal_sekarang)->orderBy('updated_at', 'DESC')->first();
        } elseif ($berlangsung == false) {
            $kegiatan_berlangsung = ''; // gak dipake
        }

        // CEK KEHADIRAN AKUN PADA KEGIATAN YANG SEDANG BERLANGSUNG ====================================================================
        if ($berlangsung === true) {
            $nim = $session->get('nim');
            $proses = $modelDaftarHadir->where(['id_kegiatan' => $kegiatan_berlangsung['id'], 'nim' => $nim])->first();
            if ($proses) {
                $status_presensi = 'Sudah';
            } else {
                $status_presensi = 'Belum';
            }
        } else {
            $status_presensi = '';
        }





        // PRESENTASE KEHADIRAN SETIAP ANGGOTA =========================================================================================

        // 1. Menentukan jumlah kegiatan wajib setiap tingkat ========================================
        $kegiatan_wajib_1_pria = 0;
        $kegiatan_wajib_1_wanita = 0;
        $kegiatan_wajib_2_pria = 0;
        $kegiatan_wajib_2_wanita = 0;
        $kegiatan_wajib_3_pria = 0;
        $kegiatan_wajib_3_wanita = 0;
        $kegiatan_wajib_4_pria = 0;
        $kegiatan_wajib_4_wanita = 0;
        foreach ($semua_kegiatan as $kegiatan) :

            // FILTER KEGIATAN WAJIB USER
            $listTingkat = explode(', ', $kegiatan['peserta']);
            $listJenisKelamin = explode(', ', $kegiatan['jenis_kelamin']);

            for ($i = 0; $i < count($listTingkat); $i++) {
                // Tingkat I
                if ($listTingkat[$i] == 'Tingkat I') {
                    for ($j = 0; $j < count($listJenisKelamin); $j++) {
                        if ($listJenisKelamin[$j] == 'Laki-Laki') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_1_pria += 1;
                            }
                        }
                        if ($listJenisKelamin[$j] == 'Perempuan') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_1_wanita += 1;
                            }
                        }
                    }
                }
                // Tingkat II
                if ($listTingkat[$i] == 'Tingkat II') {
                    for ($j = 0; $j < count($listJenisKelamin); $j++) {
                        if ($listJenisKelamin[$j] == 'Laki-Laki') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_2_pria += 1;
                            }
                        }
                        if ($listJenisKelamin[$j] == 'Perempuan') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_2_wanita += 1;
                            }
                        }
                    }
                }
                // Tingkat III
                if ($listTingkat[$i] == 'Tingkat III') {
                    for ($j = 0; $j < count($listJenisKelamin); $j++) {
                        if ($listJenisKelamin[$j] == 'Laki-Laki') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_3_pria += 1;
                            }
                        }
                        if ($listJenisKelamin[$j] == 'Perempuan') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_3_wanita += 1;
                            }
                        }
                    }
                }
                // Tingkat IV
                if ($listTingkat[$i] == 'Tingkat IV') {
                    for ($j = 0; $j < count($listJenisKelamin); $j++) {
                        if ($listJenisKelamin[$j] == 'Laki-Laki') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_4_pria += 1;
                            }
                        }
                        if ($listJenisKelamin[$j] == 'Perempuan') {
                            $time = Time::parse($kegiatan['tanggal']);
                            $proses = $time->isBefore($waktu_sekarang);
                            if ($proses) {
                                $kegiatan_wajib_4_wanita += 1;
                            }
                        }
                    }
                }
            }
        endforeach;

        // 2. count kehadiran setiap anggota ==========================================================
        $daftarAnggota = $modelUser->orderBy('nim', 'ASC')->findAll();

        $presentaseHadir = [];
        foreach ($daftarAnggota as $anggota) :
            $nim_anggota = $anggota['nim'];
            $tingkat_anggota = $anggota['tingkat'];
            $jenis_kelamin_anggota = $anggota['jenis_kelamin'];
            $daftarKehadiranAnggota = $modelDaftarHadir->where('nim', $nim_anggota)->findAll();
            $jumlah_kehadiran = count($daftarKehadiranAnggota);

            if ($tingkat_anggota == 'Tingkat I') {
                if ($jenis_kelamin_anggota == 'Laki-Laki') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_1_pria * 100;
                }
                if ($jenis_kelamin_anggota == 'Perempuan') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_1_wanita * 100;
                }
            }
            if ($tingkat_anggota == 'Tingkat II') {
                if ($jenis_kelamin_anggota == 'Laki-Laki') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_2_pria * 100;
                }
                if ($jenis_kelamin_anggota == 'Perempuan') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_2_wanita * 100;
                }
            }
            if ($tingkat_anggota == 'Tingkat III') {
                if ($jenis_kelamin_anggota == 'Laki-Laki') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_3_pria * 100;
                }
                if ($jenis_kelamin_anggota == 'Perempuan') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_3_wanita * 100;
                }
            }
            if ($tingkat_anggota == 'Tingkat IV') {
                if ($jenis_kelamin_anggota == 'Laki-Laki') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_4_pria * 100;
                }
                if ($jenis_kelamin_anggota == 'Perempuan') {
                    $presentaseKehadiran = $jumlah_kehadiran / $kegiatan_wajib_4_wanita * 100;
                }
            }
            $presentaseHadir[] = $presentaseKehadiran;
        endforeach;

        $data = [
            'judul' => 'SiROHIS | Daftar Hadir',
            'subjudul' => 'Daftar Hadir',
            'active' => 'daftarHadir',
            'role' => $role,
            'daftar_kegiatan_wajib' => $daftar_kegiatan,
            'berlangsung' => $berlangsung,
            'kegiatan_berlangsung' => $kegiatan_berlangsung,
            'kehadiran' => $kehadiran,
            'status_presensi' => $status_presensi,
            'daftarAnggota' => $daftarAnggota,
            'presentaseHadir' => $presentaseHadir,
            'full_kegiatan' => $full_keg_before_now,
        ];

        return view('page/daftarHadir', $data);
    }

    public function detail($id_kegiatan)
    {
        $session = session();

        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

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
            'role'  => $role,
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

        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $data = [
            'judul' => 'SiROHIS | Daftar Hadir',
            'subjudul' => 'Daftar Hadir',
            'active' => 'daftarHadir',
            'role' => $role,
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

        // proses upload file ke folder public/bukti-kehadiran
        $fileKehadiran = $this->request->getFile('file');
        $namaKehadiran = 'bukti-' . $fileKehadiran->getRandomName();
        $pindah = $fileKehadiran->move('bukti-kehadiran', $namaKehadiran);

        if ($pindah) {

            $now = Time::now('Asia/Jakarta');
            $tanggal_sekarang = $now->toDateString();

            $kegiatan_berlangsung = $modelPengumuman->where('tanggal', $tanggal_sekarang)->orderBy('updated_at', 'DESC')->first();

            $data = [
                'id_kegiatan' => $kegiatan_berlangsung['id'],
                'nama' =>  $session->get('nama'),
                'nim' => $session->get('nim'),
                'tanggal' => $kegiatan_berlangsung['tanggal'],
                'file' => $fileKehadiran->getName(),
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
