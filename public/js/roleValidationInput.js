
// BAGIAN MENU PROFIL ====================================================================================================================================================

// UPDATE PROFIL ==========================================================================================
function validate_updateProfil() {

    // Input Nama
    var nama = document.getElementById('nama').value;    
    if (nama == '') {
        Swal.fire(
            'Gagal',
            'Nama Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nama = /^[a-zA-Z\s'-]{1,100}$/;
        var cek_nama = rule_nama.test(nama);
        if(cek_nama) {
        } else {
            Swal.fire(
                'Gagal',
                'Nama Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Email == Tidak Digunakan Karena <input readonly>
    var email = document.getElementById('email').value;
    if (email == '') {
        Swal.fire(
            'Gagal',
            'Email Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_mail = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        var cek_mail = rule_mail.test(email);
        if (cek_mail) {
        } else {
            Swal.fire(
                'Gagal',
                'Alamat Email Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Nomor HP
    var no_hp = document.getElementById('no_hp').value;
    if (no_hp == '') {
        Swal.fire(
            'Gagal',
            'No HP Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_hp = /08[0-9]{9,12}$/;
        var cek_hp = rule_hp.test(no_hp);
        if(cek_hp) {
        } else {
            Swal.fire(
                'Gagal',
                'Nomor HP Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Domisili
    var domisili = document.getElementById('domisili').value;
    if (domisili == '') {
        Swal.fire(
            'Gagal',
            'Domisili Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_domisili = /^[a-zA-Z\s.]{1,100}$/;
        var cek_domisili = rule_domisili.test(domisili);
        if(cek_domisili) {
        } else {
            Swal.fire(
                'Gagal',
                'Domisili Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input NIM == Tidak Digunakan Karena <input readonly>
    var nim = document.getElementById('nim').value;
    if (nim == '') {
        Swal.fire(
            'Gagal',
            'NIM Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nim = /^[0-9]{9}$/;
        var cek_nim = rule_nim.test(nim);
        if(cek_nim) {
            // Cek kesesuaian isi nim terhadap email
            var nama_email = email.split('@');
            if (nim !== nama_email[0]) {
                Swal.fire(
                    'Gagal',
                    'NIM Tidak Sesuai Dengan Isian Email!',
                    'error'
                )
                return false;
            }
        } else {
            Swal.fire(
                'Gagal',
                'NIM Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Kelas
    var kelas = document.getElementById('kelas').value;
    if (kelas == '') {
        Swal.fire(
            'Gagal',
            'Kelas Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_kelas = /^[a-zA-Z0-9]{4,5}$/;
        var cek_kelas = rule_kelas.test(kelas);
        if(cek_kelas) {
        } else {
            Swal.fire(
                'Gagal',
                'Kelas Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Angkatan
    var tahun_sekarang = new Date().getFullYear();
    var angkatan = document.getElementById('angkatan').value;
    if (angkatan == '') {
        Swal.fire(
            'Gagal',
            'Angkatan Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_angkatan = /^[0-9]{1,5}$/;
        var cek_angkatan = rule_angkatan.test(angkatan);
        if(cek_angkatan) {
            var umur_stis = tahun_sekarang - 1958;
            if (angkatan > umur_stis) {
                Swal.fire(
                    'Gagal',
                    'Angkatan Tidak Valid!',
                    'error'
                )
                return false;
            }
        } else {
            Swal.fire(
                'Gagal',
                'Angkatan Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Tanggal Lahir
    var tanggal = document.getElementById('tanggal_lahir').value;
    var pisah_tanggal_lahir = tanggal.split('-');
    var tahun_lahir = pisah_tanggal_lahir[0];
    var bulan_lahir = pisah_tanggal_lahir[1];
    var tanggal_lahir = pisah_tanggal_lahir[2];

    var tahun_current = new Date().getFullYear();
    var bulan_current = new Date().getMonth();
    var tanggal_current = new Date().getDate();

    if (tanggal == '') {
        Swal.fire(
            'Gagal',
            'Tanggal Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (tahun_lahir > tahun_current) {
            Swal.fire(
                'Gagal',
                'Tanggal Lahir Tidak Valid!',
                'error'
            )
            return false;
        } else if (tahun_lahir == tahun_current) {
            if (bulan_lahir > (bulan_current + 1)) {
                Swal.fire(
                    'Gagal',
                    'Tanggal Lahir Tidak Valid!',
                    'error'
                )
                return false;
            } else if (bulan_lahir == (bulan_current + 1)) {
                if (tanggal_lahir >= tanggal_current) {
                    Swal.fire(
                        'Gagal',
                        'Tanggal Lahir Tidak Valid!',
                        'error'
                    )
                    return false;
                }
            }
        }
    }

    // Input Alamat Kost
    var alamat_kost = document.getElementById('alamat_kost').value;
    if (alamat_kost == '') {
        Swal.fire(
            'Gagal',
            'Alamat Kost Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_kost = /^[a-zA-Z0-9\s.,-]{1,100}$/;
        var cek_kost = rule_kost.test(alamat_kost);
        if(cek_kost) {
        } else {
            Swal.fire(
                'Gagal',
                'Alamat Kost Tidak Valid!',
                'error'
            )
            return false;
        }
    }

}
// UPDATE PASSWORD ============================================================================================
function validate_updatePassword() {

    // Input Password Lama
    var password_lama = document.getElementById('passwordLama').value;
    if (password_lama == '') {
        Swal.fire(
            'Gagal',
            'Password Lama Harus Diisi!',
            'error'
        )
        return false;
    }
    

    // Input Password Baru
    var password_baru = document.getElementById('passwordBaru').value;
    if (password_baru == '') {
        Swal.fire(
            'Gagal',
            'Password Baru Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Konfirmasi Password
    var konfirmasi_password = document.getElementById('konfirmasiPassword').value;
    if (konfirmasi_password == '') {
        Swal.fire(
            'Gagal',
            'Konfirmasi Password Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (konfirmasi_password !== password_baru) {
            Swal.fire(
                'Gagal',
                'Konfirmasi Password Tidak Valid!',
                'error'
            )
            return false;
        }
    }
}









// BAGIAN MENU KELOLA AKUN ========================================================================================================================================

// TAMBAH AKUN ===================================================================================
function validate_tambahAkun() {
    
    // Input Nama
    var nama = document.getElementById('nama').value;
    if (nama == '') {
        Swal.fire(
            'Gagal',
            'Nama Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nama = /^[a-zA-Z\s'-]{1,100}$/;
        var cek_nama = rule_nama.test(nama);
        if(cek_nama) {
        } else {
            Swal.fire(
                'Gagal',
                'Nama Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input NIM
    var nim = document.getElementById('nim').value;
    if (nim == '') {
        Swal.fire(
            'Gagal',
            'NIM Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nim = /^[0-9]{9}$/;
        var cek_nim = rule_nim.test(nim);
        if(cek_nim) {
        } else {
            Swal.fire(
                'Gagal',
                'NIM Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Email - CEK HARUS UNIK
    var jumlah_email = $('.panjang-tambahAkun').data('value');
    var data_email = [];
    for (let i = 0; i < jumlah_email; i++) {
        data_email[i] = $('.emailTambah'+i).data('value');
    }

    var email = document.getElementById('email').value;
    if (email == '') {
        Swal.fire(
            'Gagal',
            'Email Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_mail = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        var cek_mail = rule_mail.test(email);
        if (cek_mail) {
            // nama email harus menggunakan nim
            var nama_email = email.split('@');
            if (nama_email[0] !== nim) {
                Swal.fire(
                    'Gagal',
                    'Nama Email Harus Menggunakan NIM Yang Sama!',
                    'error'
                )
                return false;
            }

            // CEK APAKAH UNIK
            for (let i = 0; i < jumlah_email; i++) {
                if (email == data_email[i]) {
                    Swal.fire(
                        'Gagal',
                        'Email Sudah Terdaftar!',
                        'error'
                    )
                    return false;
                }
            }
        } else {
            Swal.fire(
                'Gagal',
                'Alamat Email Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Password - Default adalah NIM
    var password = document.getElementById('password').value;
    if (password == '') {
        Swal.fire(
            'Gagal',
            'Password Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (password !== nim) {
            Swal.fire(
                'Gagal',
                'Default Password Sebaiknya NIM!',
                'error'
            )
            return false;
        }
    }

    // // Input Konfirmasi Password
    var konfirmasi_password = document.getElementById('konfirmasi_password').value;
    if (konfirmasi_password == '') {
        Swal.fire(
            'Gagal',
            'Konfirmasi Password Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (konfirmasi_password !== password) {
            Swal.fire(
                'Gagal',
                'Konfirmasi Password Tidak Valid!',
                'error'
            )
            return false;
        }
    }
}
// IMPORT AKUN ==============================================================================================
function validate_importAkun() {
    var fileInput = document.getElementById('importExcel').value;
    var ekstensi = fileInput.split('.').pop();

    if (fileInput == '') {
        Swal.fire(  
            'Gagal',
            'File Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if((ekstensi.toLowerCase() == 'xls') || (ekstensi.toLowerCase() == 'xlsx') || (ekstensi.toLowerCase() == 'csv')) {
        } else {
            Swal.fire(
                'Gagal',
                'Jenis File Tidak Valid, Silakan Gunakan Template Dibawah!',
                'error'
                )
                return false;
        }
    }
}
// UBAH PROFIL =================================================================================================
function validate_ubahProfil(i) {
        
    // Input Nama
    var nama = document.getElementById('namaUbahProfil'+i).value;
    if (nama == '') {
        Swal.fire(
            'Gagal',
            'Nama Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nama = /^[a-zA-Z\s'-]{1,100}$/;
        var cek_nama = rule_nama.test(nama);
        if(cek_nama) {
        } else {
            Swal.fire(
                'Gagal',
                'Nama Tidak Valid!',
                'error'
                )
                return false;
            }
    }
        
    // Input Email
    var email = document.getElementById('emailUbahProfil'+i).value;
    if (email == '') {
        Swal.fire(
            'Gagal',
            'Email Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_mail = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        var cek_mail = rule_mail.test(email);
        if (cek_mail) {
        } else {
            Swal.fire(
                'Gagal',
                'Alamat Email Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // input Nomor HP
    var no_hp = document.getElementById('no_hpUbahProfil'+i).value;
    if (no_hp == '') {
        Swal.fire(
            'Gagal',
            'No HP Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_hp = /08[0-9]{9,12}$/;
        var cek_hp = rule_hp.test(no_hp);
        if(cek_hp) {
        } else {
            Swal.fire(
                'Gagal',
                'Nomor HP Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Domisili 
    var domisili = document.getElementById('domisiliUbahProfil'+i).value;
    if (domisili == '') {
        Swal.fire(
            'Gagal',
            'Domisili Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_domisili = /^[a-zA-Z\s.]{1,100}$/;
        var cek_domisili = rule_domisili.test(domisili);
        if(cek_domisili) {
        } else {
            Swal.fire(
                'Gagal',
                'Domisili Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input NIM
    var nim = document.getElementById('nimUbahProfil'+i).value;
    if (nim == '') {
        Swal.fire(
            'Gagal',
            'NIM Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nim = /^[0-9]{9}$/;
        var cek_nim = rule_nim.test(nim);
        if(cek_nim) {
            // Cek kesesuaian isi nim terhadap email
            var nama_email = email.split('@');
            if (nim !== nama_email[0]) {
                Swal.fire(
                    'Gagal',
                    'NIM Tidak Sesuai Dengan Isian Email!',
                    'error'
                )
                return false;
            }
        } else {
            Swal.fire(
                'Gagal',
                'NIM Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Kelas
    var kelas = document.getElementById('kelasUbahProfil'+i).value;
    if (kelas == '') {
        Swal.fire(
            'Gagal',
            'Kelas Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_kelas = /^[a-zA-Z0-9]{4,5}$/;
        var cek_kelas = rule_kelas.test(kelas);
        if(cek_kelas) {
        } else {
            Swal.fire(
                'Gagal',
                'Kelas Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Angkatan
    var tahun_sekarang = new Date().getFullYear();
    var angkatan = document.getElementById('angkatanUbahProfil'+i).value;
    if (angkatan == '') {
        Swal.fire(
            'Gagal',
            'Angkatan Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_angkatan = /^[0-9]{1,5}$/;
        var cek_angkatan = rule_angkatan.test(angkatan);
        if(cek_angkatan) {
            var umur_stis = tahun_sekarang - 1958;
            if (angkatan > umur_stis) {
                Swal.fire(
                    'Gagal',
                    'Angkatan Tidak Valid!',
                    'error'
                )
                return false;
            }
        } else {
            Swal.fire(
                'Gagal',
                'Angkatan Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Tanggal Lahir
    var tanggal = document.getElementById('tanggal_lahirUbahProfil'+i).value;
    var pisah_tanggal_lahir = tanggal.split('-');
    var tahun_lahir = pisah_tanggal_lahir[0];
    var bulan_lahir = pisah_tanggal_lahir[1];
    var tanggal_lahir = pisah_tanggal_lahir[2];

    var tahun_current = new Date().getFullYear();
    var bulan_current = new Date().getMonth();
    var tanggal_current = new Date().getDate();

    if (tanggal == '') {
        Swal.fire(
            'Gagal',
            'Tanggal Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (tahun_lahir > tahun_current) {
            Swal.fire(
                'Gagal',
                'Tanggal Lahir Tidak Valid!',
                'error'
            )
            return false;
        } else if (tahun_lahir == tahun_current) {
            if (bulan_lahir > (bulan_current + 1)) {
                Swal.fire(
                    'Gagal',
                    'Tanggal Lahir Tidak Valid!',
                    'error'
                )
                return false;
            } else if (bulan_lahir == (bulan_current + 1)) {
                if (tanggal_lahir >= tanggal_current) {
                    Swal.fire(
                        'Gagal',
                        'Tanggal Lahir Tidak Valid!',
                        'error'
                    )
                    return false;
                }
            }
        }
    }

    // Input Alamat Kost
    var alamat_kost = document.getElementById('alamat_kostUbahProfil'+i).value;
    if (alamat_kost == '') {
        Swal.fire(
            'Gagal',
            'Alamat Kost Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_kost = /^[a-zA-Z0-9\s.,-]{1,100}$/;
        var cek_kost = rule_kost.test(alamat_kost);
        if(cek_kost) {
        } else {
            Swal.fire(
                'Gagal',
                'Alamat Kost Tidak Valid!',
                'error'
            )
            return false;
        }
    }
}
// UBAH PASSWORD =================================================================================================
function validate_ubahPassword(i) {
    // Input Password - Default adalah NIM
    var password = document.getElementById('passwordUbahPassword'+i).value;
    if (password == '') {
        Swal.fire(
            'Gagal',
            'Password Harus Diisi!',
            'error'
        )
        return false;
    }
    
    // // Input Konfirmasi Password
    var konfirmasi_password = document.getElementById('konfirmasi_passwordUbahPassword'+i).value;
    if (konfirmasi_password == '') {
        Swal.fire(
            'Gagal',
            'Konfirmasi Password Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (konfirmasi_password !== password) {
            Swal.fire(
                'Gagal',
                'Konfirmasi Password Tidak Valid!',
                'error'
            )
            return false;
        }
    }
}









// BAGIAN MENU KELOLA PENGUMUMAN ========================================================================================================================================

// TAMBAH PENGUMUMAN ===================================================================================
function validate_tambahPengumuman() {

    // Input Nama
    var nama = document.getElementById('nama').value;
    if (nama == '') {
        Swal.fire(
            'Gagal',
            'Nama Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Deskripsi
    var isi = document.getElementById('isi').value;
    if (isi == '') {
        Swal.fire(
            'Gagal',
            'Deskripsi Kegiatan Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Tempat
    var tempat = document.getElementById('tempat').value;
    if (tempat == '') {
        Swal.fire(
            'Gagal',
            'Tempat Kegiatan Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Tanggal
    var tanggal = document.getElementById('tanggal').value;
    var pisah_tanggal_pengumuman = tanggal.split('-');
    var tahun_pengumuman = pisah_tanggal_pengumuman[0];
    var bulan_pengumuman = pisah_tanggal_pengumuman[1];
    var tanggal_pengumuman = pisah_tanggal_pengumuman[2];

    var tahun_current = new Date().getFullYear();
    var bulan_current = new Date().getMonth();
    var tanggal_current = new Date().getDate();

    if (tanggal == '') {
        Swal.fire(
            'Gagal',
            'Tanggal Pengumuman Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (tahun_pengumuman < tahun_current) {
            Swal.fire(
                'Gagal',
                'Tanggal Pengumuman Tidak Valid!',
                'error'
            )
            return false;
        } else if (tahun_pengumuman == tahun_current) {
            if (bulan_pengumuman < (bulan_current + 1)) {
                Swal.fire(
                    'Gagal',
                    'Tanggal Pengumuman Tidak Valid!',
                    'error'
                )
                return false;
            } else if (bulan_pengumuman == (bulan_current + 1)) {
                if (tanggal_pengumuman <= tanggal_current) {
                    Swal.fire(
                        'Gagal',
                        'Tanggal Pengumuman Tidak Valid!',
                        'error'
                    )
                    return false;
                }
            }
        }
    }

    // Input Waktu Mulai
    var waktu_mulai = document.getElementById('waktu_mulai').value;
    if (waktu_mulai == '') {
        Swal.fire(
            'Gagal',
            'Waktu Mulai Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Waktu Selesai - Sesudah Waktu Mulai
    var waktu_selesai = document.getElementById('waktu_selesai').value;
    var jam_mulai = waktu_mulai.split(':')[0];
    var menit_mulai = waktu_mulai.split(':')[1];
    var jam_selesai = waktu_selesai.split(':')[0];
    var menit_selesai = waktu_selesai.split(':')[1];

    if (waktu_selesai == '') {
        Swal.fire(
            'Gagal',
            'Waktu Selesai Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (jam_mulai > jam_selesai) {
            Swal.fire(
                'Gagal',
                'Waktu Selesai Tidak Valid!',
                'error'
            )
            return false;
        } else if (jam_mulai == jam_selesai) {
            if (menit_mulai >= menit_selesai) {
                Swal.fire(
                    'Gagal',
                    'Waktu Selesai Tidak Valid!',
                    'error'
                )
                return false;
            }
        }
    }

    // Input Peserta
    var peserta = document.getElementById('peserta').value;
    if (peserta == '') {
        Swal.fire(
            'Gagal',
            'Peserta Kegiatan Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Jenis Kelamin
    var jenis_kelamin = document.getElementById('jenis_kelamin').value;
    if (jenis_kelamin == '') {
        Swal.fire(
            'Gagal',
            'Jenis Kelamin Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Link Opsional - Tidak Ada Role Validation
}
// UPDATE PENGUMUMAN ===================================================================================
function validate_updatePengumuman(i) {

    // Input Nama
    var nama = document.getElementById('nama'+i).value;
    if (nama == '') {
        Swal.fire(
            'Gagal',
            'Nama Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Deskripsi
    var isi = document.getElementById('isi'+i).value;
    if (isi == '') {
        Swal.fire(
            'Gagal',
            'Deskripsi Kegiatan Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Tempat
    var tempat = document.getElementById('tempat'+i).value;
    if (tempat == '') {
        Swal.fire(
            'Gagal',
            'Tempat Kegiatan Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Tanggal
    var tanggal = document.getElementById('tanggal'+i).value;
    var pisah_tanggal_pengumuman = tanggal.split('-');
    var tahun_pengumuman = pisah_tanggal_pengumuman[0];
    var bulan_pengumuman = pisah_tanggal_pengumuman[1];
    var tanggal_pengumuman = pisah_tanggal_pengumuman[2];

    var tahun_current = new Date().getFullYear();
    var bulan_current = new Date().getMonth();
    var tanggal_current = new Date().getDate();

    if (tanggal == '') {
        Swal.fire(
            'Gagal',
            'Tanggal Pengumuman Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (tahun_pengumuman < tahun_current) {
            Swal.fire(
                'Gagal',
                'Tanggal Pengumuman Tidak Valid!',
                'error'
            )
            return false;
        } else if (tahun_pengumuman == tahun_current) {
            if (bulan_pengumuman < (bulan_current + 1)) {
                Swal.fire(
                    'Gagal',
                    'Tanggal Pengumuman Tidak Valid!',
                    'error'
                )
                return false;
            } else if (bulan_pengumuman == (bulan_current + 1)) {
                if (tanggal_pengumuman <= tanggal_current) {
                    Swal.fire(
                        'Gagal',
                        'Tanggal Pengumuman Tidak Valid!',
                        'error'
                    )
                    return false;
                }
            }
        }
    }

    // Input Waktu Mulai
    var waktu_mulai = document.getElementById('waktu_mulai'+i).value;
    if (waktu_mulai == '') {
        Swal.fire(
            'Gagal',
            'Waktu Mulai Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Waktu Selesai - Sesudah Waktu Mulai
    var waktu_selesai = document.getElementById('waktu_selesai'+i).value;
    var jam_mulai = waktu_mulai.split(':')[0];
    var menit_mulai = waktu_mulai.split(':')[1];
    var jam_selesai = waktu_selesai.split(':')[0];
    var menit_selesai = waktu_selesai.split(':')[1];

    if (waktu_selesai == '') {
        Swal.fire(
            'Gagal',
            'Waktu Selesai Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (jam_mulai > jam_selesai) {
            Swal.fire(
                'Gagal',
                'Waktu Selesai Tidak Valid!',
                'error'
            )
            return false;
        } else if (jam_mulai == jam_selesai) {
            if (menit_mulai >= menit_selesai) {
                Swal.fire(
                    'Gagal',
                    'Waktu Selesai Tidak Valid!',
                    'error'
                )
                return false;
            }
        }
    }

    // Input Peserta
    var peserta = document.getElementById('updatePeserta'+i).value;
    if (peserta == '') {
        Swal.fire(
            'Gagal',
            'Peserta Kegiatan Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Jenis Kelamin
    var jenis_kelamin = document.getElementById('jenis_kelamin'+i).value;
    if (jenis_kelamin == '') {
        Swal.fire(
            'Gagal',
            'Jenis Kelamin Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Link Opsional - Tidak Ada Role Validation
}









// BAGIAN MENU KELOLA KEUANGAN ========================================================================================================================================

// TAMBAH TRANSAKSI ===================================================================================
function validate_tambahTransaksi() {

    // Input Tanggal
    var tanggal = document.getElementById('tanggal').value;
    var pisah_tanggal_transaksi = tanggal.split('-');
    var tahun_transaksi = pisah_tanggal_transaksi[0];
    var bulan_transaksi = pisah_tanggal_transaksi[1];
    var tanggal_transaksi = pisah_tanggal_transaksi[2];

    var tahun_current = new Date().getFullYear();
    var bulan_current = new Date().getMonth();
    var tanggal_current = new Date().getDate();

    if (tanggal == '') {
        Swal.fire(
            'Gagal',
            'Tanggal Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (tahun_transaksi > tahun_current) {
            Swal.fire(
                'Gagal',
                'Tanggal Transaksi Tidak Valid!',
                'error'
            )
            return false;
        } else if (tahun_transaksi == tahun_current) {
            if (bulan_transaksi > (bulan_current + 1)) {
                Swal.fire(
                    'Gagal',
                    'Tanggal Transaksi Tidak Valid!',
                    'error'
                )
                return false;
            } else if (bulan_transaksi == (bulan_current + 1)) {
                if (tanggal_transaksi > tanggal_current) {
                    Swal.fire(
                        'Gagal',
                        'Tanggal Transaksi Tidak Valid!',
                        'error'
                    )
                    return false;
                }
            }
        }
    }

    // Input Nominal Uang
    var nominal = document.getElementById('nominal').value;
    if (nominal == '') {
        Swal.fire(
            'Gagal',
            'Nominal Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nominal = /^[1-9]{1}[0-9]{1,4}[0]{2}$/;
        var cek_nominal = rule_nominal.test(nominal);
        if(cek_nominal) {
        } else {
            Swal.fire(
                'Gagal',
                'Nominal Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Jenis
    var jenis = document.getElementById('jenis').value;
    if (jenis == '') {
        Swal.fire(
            'Gagal',
            'Jenis Transaksi Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Keterangan
    var keterangan = document.getElementById('keterangan').value;
    if (keterangan == '') {
        Swal.fire(
            'Gagal',
            'Keterangan Transaksi Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_keterangan = /^[a-zA-Z0-9\s.,-]{1,100}$/;
        var cek_keterangan = rule_keterangan.test(keterangan);
        if(cek_keterangan) {
        } else {
            Swal.fire(
                'Gagal',
                'Keterangan Transaksi Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input File
    var file = document.getElementById('file').value;
    var ekstensi = file.split('.').pop();

    if (file == '') {
        Swal.fire(  
            'Gagal',
            'File Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if((ekstensi.toLowerCase() == 'jpg') || (ekstensi.toLowerCase() == 'jpeg') || (ekstensi.toLowerCase() == 'png')) {
        } else {
            Swal.fire(
                'Gagal',
                'Jenis File Tidak Valid!',
                'error'
                )
                return false;
        }
    }
}
// UPDATE TRANSAKSI ===================================================================================
function validate_updateTransaksi(i) {

    // Input Tanggal
    var tanggal = document.getElementById('tanggal'+i).value;
    var pisah_tanggal_transaksi = tanggal.split('-');
    var tahun_transaksi = pisah_tanggal_transaksi[0];
    var bulan_transaksi = pisah_tanggal_transaksi[1];
    var tanggal_transaksi = pisah_tanggal_transaksi[2];

    var tahun_current = new Date().getFullYear();
    var bulan_current = new Date().getMonth();
    var tanggal_current = new Date().getDate();

    if (tanggal == '') {
        Swal.fire(
            'Gagal',
            'Tanggal Harus Diisi!',
            'error'
        )
        return false;
    } else {
        if (tahun_transaksi > tahun_current) {
            Swal.fire(
                'Gagal',
                'Tanggal Transaksi Tidak Valid!',
                'error'
            )
            return false;
        } else if (tahun_transaksi == tahun_current) {
            if (bulan_transaksi > (bulan_current + 1)) {
                Swal.fire(
                    'Gagal',
                    'Tanggal Transaksi Tidak Valid!',
                    'error'
                )
                return false;
            } else if (bulan_transaksi == (bulan_current + 1)) {
                if (tanggal_transaksi > tanggal_current) {
                    Swal.fire(
                        'Gagal',
                        'Tanggal Transaksi Tidak Valid!',
                        'error'
                    )
                    return false;
                }
            }
        }
    }

    // Input Nominal Uang
    var nominal = document.getElementById('nominal'+i).value;
    if (nominal == '') {
        Swal.fire(
            'Gagal',
            'Nominal Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_nominal = /^[1-9]{1}[0-9]{1,4}[0]{2}$/;
        var cek_nominal = rule_nominal.test(nominal);
        if(cek_nominal) {
        } else {
            Swal.fire(
                'Gagal',
                'Nominal Tidak Valid!',
                'error'
            )
            return false;
        }
    }

    // Input Jenis
    var jenis = document.getElementById('jenis'+i).value;
    if (jenis == '') {
        Swal.fire(
            'Gagal',
            'Jenis Transaksi Harus Diisi!',
            'error'
        )
        return false;
    }

    // Input Keterangan
    var keterangan = document.getElementById('keterangan'+i).value;
    if (keterangan == '') {
        Swal.fire(
            'Gagal',
            'Keterangan Transaksi Harus Diisi!',
            'error'
        )
        return false;
    } else {
        var rule_keterangan = /^[a-zA-Z0-9\s.,-]{1,100}$/;
        var cek_keterangan = rule_keterangan.test(keterangan);
        if(cek_keterangan) {
        } else {
            Swal.fire(
                'Gagal',
                'Keterangan Transaksi Tidak Valid!',
                'error'
            )
            return false;
        }
    }
}

