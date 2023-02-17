<?php
include_once("../../conn.php");

$time = $_POST['now'];
$judul = $_POST['judul'];
$content = $_POST['content'];
$id_user = $_POST['id_user'];

mysqli_query($conn, "INSERT INTO tb_main(judul_diary,time_diary,isi_diary,id_user) VALUES('$judul','$time','$content','$id_user')");
?>