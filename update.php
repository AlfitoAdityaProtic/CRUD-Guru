<?php
//include koneksi database
include ('koneksi.php');

//get data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$no_daftar = $_POST['no_daftar'];
$tarif_spi = $_POST['tarif_spi'];
$tarif_ukt_awal = $_POST['tarif_ukt_awal'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', angkatan = '$angkatan', no_daftar = '$no_daftar', tarif_spi = '$tarif_spi', tarif_ukt_awal = '$tarif_ukt_awal' WHERE nim = '$nim'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if (mysqli_query($connection, $query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
?>