<?php

namespace App\Controllers;

use App\Models\UserModel;

class Akun extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $data = [
            'judul' => 'SiROHIS | Akun',
            'subjudul' => 'Akun',
            'active' => 'akun',
            'role' => $role,
            'database' => $model->findAll(),
        ];

        return view('page/akun', $data);
    }

    public function tambah()
    {
        $session = session();
        $model = new UserModel();

        $data = $this->request->getVar();

        // cek apakah nim sudah ada di db
        $cek_nim = $model->where('nim', $data['nim'])->first();
        if ($cek_nim) {
            $session->setFlashdata('error', 'Sudah Terdaftar!');
            return redirect()->to('/akun');
        } else {
            // cek konfirmasi password
            if ($data['password'] === $data['konfirmasi_password']) {

                // enkripsi password dulu
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $proses = $model->save($data);
                if ($proses) {
                    $session->setFlashdata('success', 'Berhasil Ditambahkan!');
                    return redirect()->to('/akun');
                } else {
                    $session->setFlashdata('error', 'Gagal Ditambahkan!');
                    return redirect()->to('/akun');
                }
            } else {
                $session->setFlashdata('error', 'Konfirmasi Tidak Sesuai!');
                return redirect()->to('/akun');
            }
        }
    }

    public function delete($id)
    {
        $session = session();
        $model = new UserModel();

        $delete = $model->delete(['id' => $id]);
        if ($delete) {
            $session->setFlashdata('success', 'Berhasil Dihapus!');
            return redirect()->to('/akun');
        } else {
            $session->setFlashdata('error', 'Gagal Dihapus!');
            return redirect()->to('/akun');
        }
    }

    public function prosesUpdate()
    {
        $session = session();
        $model = new UserModel();

        // biar querinya jadi update, maka ID juga harus diikutsertakan dalam $data (update -> id yang di update sudah ada di database)
        $info = $this->request->getVar();
        $proses = $model->save($info);

        if ($proses) {
            $session->setFlashdata('success', 'Berhasil Diupdate!');
            return redirect()->to('/akun');
        } else {
            $session->setFlashdata('error', 'Gagal Diupdate!');
            return redirect()->to('/akun');
        }
    }
}
