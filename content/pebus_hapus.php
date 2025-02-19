<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "DELETE FROM tebus WHERE id_tebus = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "Jenis Tebusan berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pebus'>";
} else {
    echo "Tidak dapat menghapus data!!<br>";
    echo mysqli_error();
}
?>