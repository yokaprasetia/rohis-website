<?php

namespace App\Controllers;

use App\Models\KeuanganModel;
use App\Models\LogAktivitasModel;
use CodeIgniter\Files\File;
use CodeIgniter\I18n\Time;

class Keuangan extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $modelKeuangan = new KeuanganModel();
        // $baris = $modelKeuangan->countAllResults();
        $kas_masuk = $modelKeuangan->where('jenis', 'Masuk')->findAll();
        $kas_keluar = $modelKeuangan->where('jenis', 'Keluar')->findAll();

        // Jalankan fungsi
        $masuk = $modelKeuangan->jumlah($kas_masuk, 0);
        $keluar = $modelKeuangan->jumlah($kas_keluar, 0);
        $total_kas = $modelKeuangan->hitung($kas_masuk, $kas_keluar);

        $data = [
            'judul' => 'SiROHIS | Keuangan',
            'subjudul' => 'Transaksi',
            'active' => 'keuangan',
            'role'  => $role,
            'keuangan' => $modelKeuangan->orderBy('tanggal', 'DESC')->findAll(),
            'kas' => [
                'total' => $total_kas,
                'masuk' => $masuk,
                'keluar' => $keluar,
            ],
            'errors' => [],
        ];

        return view('page/keuangan', $data);
    }

    public function tambah()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $modelKeuangan = new KeuanganModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $data = [
            'judul' => 'SiROHIS | Keuangan',
            'subjudul' => 'Transaksi',
            'active' => 'keuangan',
            'role'  => $role,
            'keuangan' => $modelKeuangan->orderBy('updated_at', 'DESC')->findAll(),
        ];

        // ROLE VALIDATION TERPISAH DI BAGIAN JAVASCRIPT

        $keterangan = $this->request->getVar('keterangan'); // untuk Log Aktivitas

        // Tentukan insert atau update
        $cek = $this->request->getVar();
        if (isset($cek['id'])) {
            $kegiatan = 'Update';
        } else {
            $kegiatan = 'Tambah';
        }

        // Ambil Data
        $data = $this->request->getVar();

        // Cek apakah ada file (insert method)
        if ($this->request->getFile('file')) {

            // proses upload file ke folder public/bukti-transaksi
            $fileTransaksi = $this->request->getFile('file');
            $namaTransaksi = 'bukti-' . $fileTransaksi->getRandomName();
            $fileTransaksi->move('bukti-transaksi', $namaTransaksi);

            $data['file'] = $fileTransaksi->getName();
        }
        $data['updated_at'] = Time::now('Asia/Jakarta');

        // Simpan ke data base seluruh isi form
        $proses = $modelKeuangan->save($data);

        if ($proses) {
            $session->setFlashdata('success', "Berhasil Di $kegiatan!");

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Keuangan',
                'id_aktivitas'      => (isset($cek['id'])) ? $cek['id'] : '<i>(keterangan)</i> ' . $keterangan,
                'aksi'              => $kegiatan . ' Transaksi Keuangan'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/keuangan');
        } else {
            $session->setFlashdata('error', "Gagal Di $kegiatan!");
            return redirect()->to('/keuangan');
        }
    }

    public function delete($id)
    {
        $session = session();
        $modelKeuangan = new KeuanganModel();
        $modelLogAktivitas = new LogAktivitasModel();

        //menghapus file yang sudah diupload
        $file_uploaded = $modelKeuangan->where('id', $id)->first();
        $path = './bukti-transaksi/' . $file_uploaded['file'];
        unlink($path);

        $delete = $modelKeuangan->delete(['id' => $id]);
        if ($delete) {
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

            return redirect()->to('/keuangan');
        } else {
            $session->setFlashdata('error', 'Gagal Dihapus!');
            return redirect()->to('/keuangan');
        }
    }
}
