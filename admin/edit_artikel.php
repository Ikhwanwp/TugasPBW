<?php 
// Memanggil header.php
include"../includes/header.php";

$id = $_GET['id'];

if(isset($_POST['edit_artikel']) && $_POST['edit_artikel'] == "SIMPAN"){

	$judul 		= $_POST['judul'];
	$kategori 	= $_POST['kategori'];
	$isi 		= $_POST['isi'];
	$gambar 	= $_FILES['gambar']['name'];

	if (!empty($gambar)) {
		move_uploaded_file($_FILES['gambar']['tmp_name'],"../upload/".$gambar);
		$query = mysqli_query($con,"UPDATE tb_artikel set gambar_artikel = '$gambar' where id_artikel = '$id' ");
	}

	$query = mysqli_query($con,"UPDATE tb_artikel set judul_artikel = '$judul', isi_artikel = '$isi',id_artikel = '$kategori' where id_artikel = '$id' ");

	if ($query) {
		header('location:list_artikel.php');
	}

}

$query = mysqli_query($con,"SELECT * FROM tb_artikel where id_artikel = '$id' ");
$data = mysqli_fetch_assoc($query);

?>

<form action="" method="post" enctype="multipart/form-data">

	judul 		: 	<input type="text" name="judul" value="<?=$data['judul_artikel']?>">
					<br>
	kategori 	: 	<select name="kategori"><br>
						<option value="">-- Pilih Kategori --</option>
						<option value="1" <?php if($data['id_artikel'] == 1){echo "selected";}?> >Kategori 1</option>
						<option value="2" <?php if($data['id_artikel'] == 2){echo "selected";}?> >Kategori 2</option>
						<option value="3" <?php if($data['id_artikel'] == 3){echo "selected";}?> >Kategori 3</option>
					</select>
					<br>
	Isi 		: 	<textarea name="isi"><?=$data['isi_artikel'];?></textarea>				
					<br>
	gambar 		: 	<input type="file" name="gambar">				 
					<br>
	<input type="submit" name="edit_artikel" value="SIMPAN">
</form>