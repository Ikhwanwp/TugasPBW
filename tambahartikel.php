<!-- Proses Penambahan Data kedalam database -->
<?php 

include('includes/header.php');
 
if(isset($_POST['tambah_berita'])&& $_POST['tambah_berita'] == "TAMBAH"){

	$judul 		= $_POST['judul'];
	$kategori 	= $_POST['kategori'];
	$isi 		= $_POST['isi'];
	$gambar 	= $_FILES['gambar']['name'];

	move_uploaded_file($_FILES['gambar']['tmp_name'],"upload/".$gambar);

	$query = mysqli_query($con,"insert into tb_artikel(judul_artikel,isi_artikel,id_kategori,gambar_artikel) values('$judul','$isi','$kategori','$gambar')");

	if($query){
		header('location:admin/list_artikel.php');
	}
}
 
?>
<!-- fungsi enctype : agar dapat meng upload gambar -->
<form action="" method="POST" enctype="multipart/form-data">
	Judul : <input type="text" name="judul"><br>
	Kategori 	<select name="kategori">
					<option value="">-- Pilih Kategori</option>
					<option value="1">Kategori 1</option>
					<option value="2">Kategori 2</option>
					<option value="3">Kategori 3</option>
				</select>
				<br>
	Isi Berita :
	<textarea name="isi"></textarea><br>
	Gambar : <input type="file" name="gambar"><br>
	<input type="submit" name="tambah_berita" value="TAMBAH">
</form>