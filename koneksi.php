<?php
// Variabel koneksi dengan database MySQL
$host = "localhost";
$user = "balqiss";
$paswd = "";
$name = "db_kuliah";

// Proses koneksi
$link = mysqli_connect($host, $user, $paswd, $name);

// Periksa koneksi, jika gagal akan menampilkan pesan error
if (!$link) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}

// Jika koneksi berhasil, bisa menambahkan pesan sukses atau melanjutkan ke langkah berikutnya
echo "Koneksi dengan database berhasil!";
?>
