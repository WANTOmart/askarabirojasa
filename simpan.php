<?php
// Koneksi ke database (Ganti sesuai konfigurasi Anda)
$conn = mysqli_connect("localhost", "root", "", "nama_database_anda");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    // Query untuk menyimpan ke database (Pastikan tabel 'pelanggan' sudah ada)
    $sql = "INSERT INTO pelanggan (nama, telepon, alamat) VALUES ('$nama', '$telepon', '$alamat')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan! <a href='pelanggan.html'>Kembali ke Daftar</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
