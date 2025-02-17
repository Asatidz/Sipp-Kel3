<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "DELETE FROM tebus WHERE id_riwayat = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "Tebusan berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=riwayat'>";
} else {
    echo "Tidak dapat menghapus data!!<br>";
    echo mysqli_error();
}
?>