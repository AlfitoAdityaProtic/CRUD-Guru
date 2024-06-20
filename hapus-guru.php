<?php

include ('koneksi.php');

//get id
$nuptk = $_GET['nuptk'];

$query = "DELETE FROM tbl_guru WHERE nuptk = '$nuptk'";

if (mysqli_query($connection,$query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>