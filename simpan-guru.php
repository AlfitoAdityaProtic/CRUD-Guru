<?php 
include('koneksi.php');

$nuptk = $_POST['nuptk'];
$nama_lengkap = $_POST['nama_lengkap'];
$golongan = $_POST['golongan'];
$jenis_kelamin = $_POST['jenis_kelamin'];


$query = "INSERT INTO tbl_guru(nuptk, nama, golongan, jenis_kelamin) VALUES('$nuptk', '$nama_lengkap', '$golongan', '$jenis_kelamin')";

if (mysqli_query($connection, $query)) {
    header("location: index.php");
} else {
    echo "data gagal di simpan";
}
?>