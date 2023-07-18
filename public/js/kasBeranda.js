
var beranda_itemKas = document.getElementById('beranda-totalKeuangan');
var beranda_jumlahKas = document.getElementById('beranda-totalKeuangan').textContent;
beranda_itemKas.innerHTML = 'Rp' + beranda_jumlahKas.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + ',00';