<?php
// Memanggil file koneksi.php untuk melakukan koneksi ke database
include 'koneksi.php';

// Mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

    // Membuat variabel untuk menampung data dari form dan menghindari SQL Injection
    $namaDosen = mysqli_real_escape_string($link, $_POST['namaDosen']);
    $noHP = mysqli_real_escape_string($link, $_POST['noHP']);

    // Jalankan query INSERT untuk menambah data ke database
    $query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    // Periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    } else {
        // Jika berhasil, lakukan redirect ke halaman viewdosen.php
        header("Location: viewdosen.php");
        exit(); // Pastikan tidak ada kode yang dieksekusi setelah redirect
    }
}
?>
