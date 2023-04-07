<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
// use CodeIgniter\I18n\Time;

class QuotesSeeder extends Seeder
{
    public function run()
    {

        $data = [
            ['quotes' => '“Dan janganlah engkau mengira, bahwa Allah lengah dari apa yang diperbuat oleh orang yang zhalim.” [QS. Ibrahim: 42]'],
            ['quotes' => '“Sungguh, apa yang dijanjikan kepadamu pasti terjadi.” [QS. Al-Mursalat: 7]'],
            ['quotes' => '“Bagimu tidak ada seorang pun penolong maupun pemberi syafaat selain Dia.” [QS. As-Sajdah: 4]'],
            ['quotes' => '“Mereka sedikit sekali tidur pada waktu malam.” [QS. Adz-Dzariyat: 17]'],
            ['quotes' => '“Dan pada akhir malam mereka memohon ampunan (kepada Allah).” [QS. Adz-Dzariyat: 18]'],
            ['quotes' => '“Dan berpegangteguhlah kepada Allah. Dialah Pelindungmu.” [QS. Al-Hajj: 78]'],
            ['quotes' => '“Kami telah menentukan kematian masing-masing kamu.” [QS. Al-Waqi’ah: 60]'],
            ['quotes' => '“Dan pada sebagian malam, lakukanlah shalat tahajud (sebagai suatu ibadah) tambahan bagimu.” [QS. Al-Isra’: 79]'],
            ['quotes' => '“Semua yang ada di bumi akan binasa.” [QS. Ar-Rahman: 26]'],
            ['quotes' => '“Dan Kami tidak menciptakan langit dan bumi dan segala apa yang ada di antara keduanya dengan main-main.” [QS. Al-Anbiya’: 16]'],
            ['quotes' => '“Sesungguhnya segala yang kamu seru selain Allah tidak dapat menciptakan seekor lalat pun, walaupun mereka bersatu untuk menciptakannya.” [QS. Al-Hajj: 73]'],
            ['quotes' => '“Barangsiapa tidak diberi cahaya (petunjuk) oleh Allah, maka dia tidak mempunyai cahaya sedikit pun.” [QS. An-Nur: 40]'],
            ['quotes' => '“Allah kelak akan memberikan kelapangan setelah kesempitan.” [QS. At-Talaq: 7]'],
            ['quotes' => '“Dan sungguh, kelak Tuhanmu pasti memberikan karunia-Nya kepadamu, sehingga engkau menjadi puas.” [QS. Ad-Dhuha: 5]'],
            ['quotes' => '“Dan janganlah kamu berputus asa dari rahmat Allah.” [QS. Yusuf: 87]'],
            ['quotes' => '“Mahasuci Allah, Pencipta yang paling baik.” [QS. Al-Mu’minun: 14]'],
            ['quotes' => '“Dan aku menyerahkan urusanku kepada Allah.” [QS. Ghafir: 44]'],
            ['quotes' => '“Dan janganlah engkau berjalan di bumi ini dengan sombong, karena sesungguhnya engkau tidak akan dapat menembus bumi dan tidak akan mampu menjulang setinggi gunung.” [QS. Al-Isra’: 37]'],
            ['quotes' => '“Dan janganlah kamu jatuhkan (diri sendiri) ke dalam kebinasaan dengan tanganmu sendiri.” [QS. Al-Baqarah: 195]'],
            ['quotes' => '“Dan janganlah kamu mencari-cari kesalahan orang lain dan janganlah ada di antara kamu yang menggunjing sebagian yang lain.” [QS. Al-Hujurat: 12]'],
            ['quotes' => '“Ya Tuhan kami, janganlah Engkau hukum kami jika kami lupa atau kami melakukan kesalahan.” [QS. Al-Baqarah: 286]'],
            ['quotes' => '“Maka tidakkah mereka menghayati Al-Qur’an ataukah hati mereka sudah terkunci?.” [QS. Muhammad: 24]'],
            ['quotes' => '“Bukankah Kami telah menjadikan bumi sebagai hamparan, (6) dan gunung-gunung sebagai pasak? (7).” [QS. An-Naba’: 6-7]'],
            ['quotes' => '“Jika kamu bersyukur, Dia meridhai kesyukuranmu itu.” [QS. Az-Zumar: 7]'],
            ['quotes' => '“Dan surga didekatkan kepada orang-orang yang bertakwa pada tempat yang tidak jauh (dari mereka).” [QS. Qaf: 31]'],

        ];
        // Banyak data
        $this->db->table('quotes')->insertBatch($data);
    }
}
