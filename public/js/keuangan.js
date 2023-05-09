function GetSelectedItem(el) {
    var e = document.getElementById(el);
    var value = e.options[e.selectedIndex].value;
    // var text = e.options[e.selectedIndex].text;

    if (el == 'jenis') {
        document.getElementById('tabel-jenis').textContent = value;
        // document.getElementById('tabel-jenis').setAttribute('class', text);
    }
    if (el == 'bulan') {
        document.getElementById('tabel-bulan').textContent = value;
    }


    // Filter Jenis Transaksi
    var inputJenis = document.getElementById('tabel-jenis').textContent;
    var inputBulan = document.getElementById('tabel-bulan').textContent;
    var table = document.getElementById('example1');
    var tr = table.getElementsByTagName('tr');
    var tdUangMasuk = 0;
    var tdUangKeluar = 0;
    var tdUangTotal = 0;

    for (var i = 0; i < tr.length; i++) {
    var tdJenis = tr[i].getElementsByTagName("td")[3];
    var tdBulan = tr[i].getElementsByTagName("td")[1];

    if (tdJenis && tdBulan) {
        var textValueJenis = tdJenis.textContent || tdJenis.innerText;
        var textValueBulan = tdBulan.textContent || tdBulan.innerText;

        if (inputJenis == "All") {
            textValueJenis = inputJenis;
        }
        if (inputBulan == "All") {
            textValueBulan = inputBulan;
        }
        if ((textValueJenis.indexOf(inputJenis) > -1) && (textValueBulan.indexOf(inputBulan) > -1)) {
            tr[i].style.display = "";

            // Menghitung jumlah kas :v
            var nilai = parseInt(tr[i].getElementsByTagName("td")[2].textContent);

            // cek masuk atau keluar
            var cekJenis = tr[i].getElementsByTagName("td")[3].textContent;
            if (cekJenis === 'Masuk') {
                tdUangMasuk = tdUangMasuk + nilai;
                tdUangTotal = tdUangTotal + nilai;
            }
            if (cekJenis === 'Keluar') {
                tdUangKeluar = tdUangKeluar + nilai;
                tdUangTotal = tdUangTotal - nilai;
            }
            
        } else {
            tr[i].style.display = "none";
        }
    }
    }

    // Ubah data ringkasan keuangan page
    var uangMasuk = document.getElementsByClassName('uang-masuk')[0].getElementsByTagName('strong')[0];
    var uangTotal = document.getElementsByClassName('uang-total')[0].getElementsByTagName('strong')[0];
    var uangKeluar = document.getElementsByClassName('uang-keluar')[0].getElementsByTagName('strong')[0];

    uangMasuk.innerText = 'Rp' + tdUangMasuk + ',00';
    uangTotal.innerText = 'Rp' + tdUangTotal + ',00';
    uangKeluar.innerText = 'Rp' + tdUangKeluar + ',00';
    console.log(uangMasuk);
    console.log(uangKeluar);
    console.log(uangTotal);
}

// function GetFitur(el) {
//     var e = document.getElementById(el);
//     var value = e.options[e.selectedIndex].value;

//     var element = document.getElementsByClassName('tabel-tujuan');
//     var target = element[0].getAttribute('id');
//     element[0].removeAttribute('id');

//     if (target == 'example1') {
//         element[0].setAttribute('id', value)
//     }
//     if (target == 'example2') {
//         element[0].setAttribute('id', value)
//     }

//     console.log(element[0].getAttribute('id'));
// }