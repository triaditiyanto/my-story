<?php
include_once("../../conn.php"); 

$id = $_GET['id_main'];
 
$result = mysqli_query($conn, "DELETE FROM tb_main WHERE id_main='$id'");
 
header("Location:home_detail.php");
?>