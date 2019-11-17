<?php
include '../koneksi/konek.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = mysql_query('DELETE FROM `pelajaran` WHERE idp='.$id);
if ($id <> '') {
    echo '<script>window.alert("Data Berhasil Dihapus!!");window.location.href="mapel.php";</script>';    
}
?>