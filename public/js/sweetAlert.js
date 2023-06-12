// sweet alert default to all
const judul = $('.flash-data').data('judul');
const flashData = $('.flash-data').data('flashdata');
const flashKey = $('.flash-data').data('flashkey');

if (flashData) {
    Swal.fire(
        judul,
        flashData,
        flashKey
    )
}

// LOGOUT
$('.sidebar-logout').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Anda Yakin Log Out?',
        text: "Aktivitas Ini Sangat Menyenangkan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Log Out'
    }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = href;
        
    }
    })
});


// HAPUS DATA 
$('.pengumuman-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data yang terhapus tidak dapat dipulihkan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data'
    }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = href;
    }
    })
});

$('.akun-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data yang terhapus tidak dapat dipulihkan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data'
    }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = href;
    }
    })
});

$('.keuangan-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data yang terhapus tidak dapat dipulihkan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data'
    }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = href;
    }
    })
});

$('.log-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Seluruh Log Aktivitas Akan Terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Log Aktivitas'
    }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = href;
    }
    })
});
