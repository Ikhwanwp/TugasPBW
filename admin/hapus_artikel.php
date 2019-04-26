<?php 

include "../includes/header.php";

$id = $_GET['id'];

$query = mysqli_query($con,"delete from tb_artikel where id_artikel = '$id' ");

if ($query) {
	header('location:list_artikel.php');
}

 ?>