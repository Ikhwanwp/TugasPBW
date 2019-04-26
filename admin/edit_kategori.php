<?php 

include "layout/header.php";

$id = $_GET['id'];

if (isset($_POST['simpan_kategori']) && $_POST['simpan_kategori'] == "SIMPAN") {
	$nama = $_POST['nama'];

	$query = mysqli_query($con,"update kategori set nama_kategori = '$nama' where id_kategori = '$id' ");

	if ($query) {
		header('location:list_kategori.php');
	}

}

$query = mysqli_query($con,"select * from kategori where id_kategori = '$id' ");
$data = mysqli_fetch_assoc($query);


 ?>

  <form method="post" action="">
 	Nama Kategori : <input type="text" name="nama" value="<?=$data['nama_kategori'];?>"><br>
 	<input type="submit" name="simpan_kategori" value="SIMPAN">
 </form>