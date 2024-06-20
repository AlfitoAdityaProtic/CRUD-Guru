<?php
//include koneksi database
include ('koneksi.php');

//get data dari form
$nuptk = $_POST['nuptk'];
$nama_lengkap = $_POST['nama'];
$golongan = $_POST['golongan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_guru SET nuptk = '$nuptk', nama = '$nama_lengkap', golongan = '$golongan', jenis_kelamin = '$jenis_kelamin' WHERE nuptk = '$nuptk'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if (mysqli_query($connection, $query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
?>