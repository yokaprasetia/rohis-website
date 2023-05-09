<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use App\Models\DaftarHadirModel;
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
        // dd($data['pengumuman']);
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
        $model = new PengumumanModel();
        $data = $this->request->getVar();
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
            $proses = $model->save($data);
        } elseif ($tahun_up == $tahun_now) {
            if ($bulan_up > $bulan_now) {
                // proses
                $proses = $model->save($data);
            } elseif ($bulan_up == $bulan_now) {
                if ($tanggal_up > $tanggal_now) {
                    // proses
                    $proses = $model->save($data);
                } elseif ($tanggal_up == $tanggal_now) {
                    if ($jam_up > $jam_now) {
                        // proses
                        $proses = $model->save($data);
                    } elseif ($jam_up == $jam_now) {
                        if ($menit_up > $menit_now) {
                            // proses
                            $proses = $model->save($data);
                        }
                    }
                }
            }
        }

        // cek apakah insert atau update
        if (isset($data['id'])) {
            $kegiatan = 'Diupdate';
        } else {
            $kegiatan = 'Ditambah';
        }
        if (isset($proses)) {
            $session->setFlashdata('success', "Berhasil $kegiatan!");
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

        $delete = $modelPengumuman->delete(['id' => $id]);
        $deleteDaftarHadir = $modelDaftarHadir->delete(['id_kegiatan' => $id]);
        if ($delete && $deleteDaftarHadir) {
            $session->setFlashdata('success', 'Berhasil Dihapus!');
            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('error', 'Gagal Dihapus!');
            return redirect()->to('/pengumuman');
        }
    }
}
