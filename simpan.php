<?php 
include('koneksi.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$no_daftar = $_POST['no_daftar'];
$no_va_daftar = $_POST['no_va_daftar'];
$no_va_ukt = $_POST['no_va_ukt'];
$tarif_spi = $_POST['tarif_spi'];
$tarif_ukt_awal = $_POST['tarif_ukt_awal'];


$query = "INSERT INTO mahasiswa(nim, nama, angkatan, no_daftar, tarif_spi, tarif_ukt_awal) VALUES('$nim', '$nama', '$angkatan', '$no_daftar', '$tarif_spi', '$tarif_ukt_awal')";

if (mysqli_query($connection, $query)) {
    header("location: index.php");
} else {
    echo "data gagal di simpan";
}
?>