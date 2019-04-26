<?php 

include"layout/header.php";

$id = $_GET['id'];

$query = mysqli_query($con,"delete from kategori where id_kategori = '$id' ");

if ($query) {
	header('location:list_kategori.php');
}

 ?>