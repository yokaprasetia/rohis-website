<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use App\Models\DaftarHadirModel;
use App\Models\LogAktivitasModel;
use CodeIgniter\I18n\Time;

class Pengumuman extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $model = new PengumumanModel();

        $data = [
            'judul' => 'SiROHIS | Pengumuman',
            'subjudul' => 'Pengumuman',
            'active' => 'pengumuman',
            'role'  => $role,
            'pengumuman' => $model->orderBy('updated_at', 'DESC')->findAll(),
        ];
        return view('page/pengumuman', $data);
    }

    public function detail($id)
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $model = new PengumumanModel();
        $data = [
            'judul' => 'SiROHIS | Detail Pengumuman',
            'subjudul' => 'Detail Pengumuman',
            'active' => 'pengumuman',
            'role'  => $role,
            'detail' => $model->where('id', $id)->first(),
        ];

        return view('page/detailPengumuman', $data);
    }

    public function tambah()
    {
        $session = session();
        $modelPengumuman = new PengumumanModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $data = $this->request->getVar();
        $data['peserta'] = implode(', ', $data['listPeserta']);
        $data['jenis_kelamin'] = implode(', ', $data['listJenisKelamin']);
        $tanggal_data = $this->request->getVar('tanggal'); // untuk log aktivitas
        $data['updated_at'] = Time::now('Asia/Jakarta');
        list($tahun_up, $bulan_up, $tanggal_up) = explode('-', $data['tanggal']);
        list($jam_up, $menit_up) = explode(':', $data['waktu_mulai']);


        // validasi tanggal pembuatan -> after now
        $tanggal = Time::now('Asia/Jakarta');
        $tahun_now = $tanggal->format('Y');
        $bulan_now = $tanggal->format('m');
        $tanggal_now = $tanggal->format('d');
        $jam_now = $tanggal->Format('H');
        $menit_now = $tanggal->Format('i');

        if ($tahun_up > $tahun_now) {
            // proses
            $proses = $modelPengumuman->save($data);
        } elseif ($tahun_up == $tahun_now) {
            if ($bulan_up > $bulan_now) {
                // proses
                $proses = $modelPengumuman->save($data);
            } elseif ($bulan_up == $bulan_now) {
                if ($tanggal_up > $tanggal_now) {
                    // proses
                    $proses = $modelPengumuman->save($data);
                } elseif ($tanggal_up == $tanggal_now) {
                    if ($jam_up > $jam_now) {
                        // proses
                        $proses = $modelPengumuman->save($data);
                    } elseif ($jam_up == $jam_now) {
                        if ($menit_up > $menit_now) {
                            // proses
                            $proses = $modelPengumuman->save($data);
                        }
                    }
                }
            }
        }

        // cek apakah insert atau update
        if (isset($data['id'])) {
            $kegiatan = 'Update';
        } else {
            $kegiatan = 'Tambah';
        }
        if (isset($proses)) {
            $session->setFlashdata('success', "Berhasil Di $kegiatan!");

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Pengumuman',
                'id_aktivitas'      => (isset($data['id'])) ? $data['id'] : '<i>(tanggal)</i> ' . $tanggal_data,
                'aksi'              => $kegiatan . ' Pengumuman'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('error', "Gagal $kegiatan!");
            return redirect()->to('/pengumuman');
        }
    }

    public function delete($id)
    {
        $session = session();
        $modelPengumuman = new PengumumanModel();
        $modelDaftarHadir = new DaftarHadirModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $delete = $modelPengumuman->delete(['id' => $id]);
        $deleteDaftarHadir = $modelDaftarHadir->delete(['id_kegiatan' => $id]);
        if ($delete && $deleteDaftarHadir) {
            $session->setFlashdata('success', 'Berhasil Dihapus!');

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Pengumuman',
                'id_aktivitas'      => $id,
                'aksi'              => 'Hapus Pengumuman'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('error', 'Gagal Dihapus!');
            return redirect()->to('/pengumuman');
        }
    }
}
