<?php
session_start();
include './lib/db/dbconfig.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = "id";
}

if (!isset($_SESSION['sw']) && !isset($_SESSION['pb'])) {
    if ($page === 'login') {
        if (isset($_GET['log']) && $_GET['log'] == 'failed') {
            // Jika login gagal, arahkan kembali ke halaman login
            include 'view/login.php';
        } else {
            include 'view/login.php';
        }
    } else {
        // Jika belum login dan bukan halaman login, arahkan ke index1.php
        header("Location: index1.php");
        exit;
    }
} else {
    if ($page === 'login') {
        // Jika sudah login dan mencoba mengakses halaman login, arahkan ke index1.php
        header("Location: index1.php");
        exit;
    } else {
        include 'view/media.php';
    }
}
?>
