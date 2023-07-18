<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use App\Models\DaftarHadirModel;
use App\Models\LogAktivitasModel;
use App\Models\UserModel;
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
        $modelUser = new UserModel();

        $data = $this->request->getVar();
        $data['peserta'] = implode(', ', $data['listPeserta']);
        $data['jenis_kelamin'] = implode(', ', $data['listJenisKelamin']);
        $tanggal_data = $this->request->getVar('tanggal'); // untuk log aktivitas
        $data['updated_at'] = Time::now('Asia/Jakarta');

        // ROLE VALIDATION TERPISAH DI BAGIAN JAVASCRIPT

        // Cek apakah proses insert atau update
        if (isset($data['id'])) {
            $kegiatan = 'Update';
        } else {
            $kegiatan = 'Tambah';
        }

        // VALIDASI PENGIRIMAN EMAIL ===================================
        $dataEmail = \Config\Services::email();
        $daftarPengguna = $modelUser->select('email, tingkat, jenis_kelamin')->findAll();
        $penerima_email = [];
        for ($i = 0; $i < count($data['listPeserta']); $i++) {
            foreach ($daftarPengguna as $d) {
                if ($d['tingkat'] == $data['listPeserta'][$i]) {
                    for ($j = 0; $j < count($data['listJenisKelamin']); $j++) {
                        if ($d['jenis_kelamin'] == $data['listJenisKelamin'][$j]) {
                            $penerima_email[] = $d['email'];
                        }
                    }
                }
            }
        }
        // CEK APAKAH BUTUH DIKIRIMKAN EMAIL ATAU TIDAK
        $cek_pengiriman_email = $data['send_email'];
        if ($cek_pengiriman_email == 'Ya') {
            // PROSES KIRIM EMAIL KE PESERTA ============================
            // $email_tujuan = ['221910846@stis.ac.id', 'prasetia356@gmail.com', 'yokamobile123@gmail.com', 'prasetia123789@gmail.com'];
            $email_tujuan = $penerima_email;
            $email_pengirim = 'rohis@stis.ac.id';
            $nama_pengirim = 'SIRohis';
            $subject = '[SIRohis | ' . $data['nama'] . ']';
            $message = view('email_message/message', ['data' => $data]);

            $dataEmail->setFrom($email_pengirim, $nama_pengirim);
            $dataEmail->setTo($email_tujuan);
            $dataEmail->setSubject($subject);
            $dataEmail->setMessage($message);

            if ($dataEmail->send()) {
                // Masukkan pengumuman ke database
                $proses = $modelPengumuman->save($data);
            } else {
                $session->setFlashdata('error', "Gagal Mengirimkan Email!");
                return redirect()->to('/pengumuman');
            }
        } else {
            // Masukkan pengumuman ke database
            $proses = $modelPengumuman->save($data);
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
