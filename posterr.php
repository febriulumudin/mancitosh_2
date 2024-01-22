<?php

/**
 * data
 */
$nama            = 'VLOG';
$deskripsi       = 'Tema lomba vlog MANCITOSH V.8 adalah “Bukan Zaman Dulu Lagi, Kita Anak Muda Berteknologi”.';
$pendaftaran     = '#';
$petunjuk_teknis = '#';
$timeline = [
    [
        'tanggal'  => '21 Januari - 17 Februari 2024',
        'kegiatan' => 'Pendaftaran dan Pengumpulan karya'
    ],
    [
        'tanggal'  => '25 Januari 2024',
        'kegiatan' => 'Technical Meeting'
    ],
    [
        'tanggal'  => '20 Februari 2024',
        'kegiatan' => 'Pengumuman Final'
    ],
    [
        'tanggal'  => '24 Februari 2024',
        'kegiatan' => 'Tahap Final dan Penganugerahan Peserta Lomba'
    ]
];
$contact_person = [
    [
        'nama'    => 'Nur Iswahyudi',
        'telepon' => '085749699665'
    ],
    [
        'nama'    => 'Nabila Ohiro',
        'telepon' => '085649367690'
    ]
];

/**
 * tampilan
 */
require_once './config.php';
require_once './osim/header.php';
require_once './osim/lomba-single.php';
require_once './osim/footer.php';