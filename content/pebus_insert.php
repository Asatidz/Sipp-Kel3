<?php
if(!defined('INDEX')) die();


$nama       = $_POST['nama'];
$kode = $_POST['kode'];
$poin       = $_POST['poin'];

        $query  = "INSERT INTO tebus SET ";
        $query .= "nama_tebus = '$nama', ";
        $query .= "kode_tebus = '$kode', ";
        $query .= "poin_tebus = '$poin' ";
    
    $result = mysqli_query($con,$query);
    
if ($result) {
    echo "Tebusan <b>$nama</b> Berhasil Disimpan!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pebus'>";
} else {
    echo "Tidak dapat menyimpan data!<br>";
    echo mysqli_error();
}