<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "DELETE FROM rw_tebus WHERE id_rwt = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "Data Penebusan berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='1; url=?hal=tebus'>";
} else {
    echo "Tidak dapat menghapus data!!<br>";
    echo mysqli_error();
}
?>