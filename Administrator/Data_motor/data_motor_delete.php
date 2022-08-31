<?php
include"../../inc/koneksi.php";
$db = new Database();
$conn = $db->getCon();
$id = $_GET['id'];
$query = "Delete from yamaha.tbl_product where id_product = $id";


$statement = $conn->prepare($query);
$statement->execute();

echo"<script language = 'JavaScript'> document.location='data_motor_delete.php';</script>";

?>