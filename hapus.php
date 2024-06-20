<?php

include ('koneksi.php');

//get id
$nim = $_GET['nim'];

$query = "DELETE FROM mahasiswa WHERE nim = '$nim'";

if (mysqli_query($connection,$query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>