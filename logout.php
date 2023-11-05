<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Hapus semua data sesi
    session_unset();

    // Hancurkan sesi
    session_destroy();

    // Redirect ke halaman login atau halaman lainnya jika diperlukan
    header("Location: login.php"); // Ganti dengan halaman yang sesuai
    exit();
} else {
    // Jika pengguna belum login, alihkan mereka ke halaman login
    header("Location: login.php"); // Ganti dengan halaman login Anda
    exit();
}
