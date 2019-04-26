<?php 

include "layout/header.php";

if(isset($_POST['tambah_kategori']) && $_POST['tambah_kategori'] == "TAMBAH"){
	$nama = $_POST['nama'];
	$query = mysqli_query($con,"insert into Kategori (nama_kategori) value ('$nama')");

	if ($query) {
		header('location:list_kategori.php');
	}
}

 ?>

 <form method="post" action="">
 	Nama Kategori : <input type="text" name="nama"><br>
 	<input type="submit" name="tambah_kategori" value="TAMBAH">
 </form>