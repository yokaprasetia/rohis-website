<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profil extends BaseController
{

    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        // $info = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Profil',
            'subjudul' => 'Profil',
            'active' => 'profil',
            'profil' => $model->where('id', $id)->first(),
        ];

        return view('page/Profil', $data);
    }

    public function updateProfil()
    {
        $session = session();
        $model = new UserModel();

        // biar querinya jadi update, maka ID juga harus diikutsertakan dalam $data (update -> id yang di update sudah ada di database)
        $info = $this->request->getVar();
        $proses = $model->save($info);

        if ($proses) {
            $session->setFlashdata('success', 'Update berhasil');
            return redirect()->to('/profil');
        } else {
            $session->setFlashdata('danger', 'Update gagal');
            return redirect()->to('/profil');
        }
    }

    public function updatePassword()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $database = $model->where('id', $id)->first();

        $info = $this->request->getVar();
        $verify = password_verify($info['passwordLama'], $database['password']);
        if ($verify) {
            //cek konfirmasi
            if ($info['passwordBaru'] === $info['konfirmasiPassword']) {
                $ubah = [
                    'id' => $id,
                    'password' => password_hash($info['passwordBaru'], PASSWORD_DEFAULT),
                ];
                $proses = $model->save($ubah);
                if ($proses) {
                    $session->setFlashdata('success', 'Berhasil Ubah Password');
                    return redirect()->to('/profil');
                } else {
                    $session->setFlashdata('danger', 'Gagal Ubah Password');
                    return redirect()->to('/profil');
                }
            } else {
                $session->setFlashdata('danger', 'Konfirmasi Password Gagal');
                return redirect()->to('/profil');
            }
        } else {
            $session->setFlashdata('danger', 'Password Tidak Cocok!');
            return redirect()->to('/profil');
        }
    }
}
