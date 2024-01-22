<?php
/**
 * Data halaman
 */
$title = 'Beranda';

$lomba_lomba = [
    'VLOG',
    'POSTER',
    'MTQ',
    'PUISI KANDUNGAN ALQURAN'
];

$detail_lomba = [
    [
        'nama' => 'VLOG',
        'deskripsi' => 'Ini adalah deskripsi lomba VLOG',
        'link_pendaftaran' => '#daftar',
        'link_petunjuk_teknis' => '#teknis'
    ],
    [
        'nama' => 'POSTER',
        'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, voluptate?',
        'link_pendaftaran' => '#daftar',
        'link_petunjuk_teknis' => '#teknis'
    ]
];

/**
 * Layout
 * 
 * require_once 'alamat_file.php'
 * - Digunakan untuk menggabungkan isi file ke tampilan
 * ./file.php
 * file.php
 */
require_once './config.php';
require_once './osim/header.php'; // body ke atas
require_once './osim/hero.php';
require_once './osim/lomba.php';
require_once './osim/poster.php';
require_once './osim/footer.php'; // body ke bawah