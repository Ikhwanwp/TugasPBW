<?php 

include "layout/header.php";

$query = mysqli_query($con, "select * from kategori order by id_kategori DESC");
$data = mysqli_fetch_assoc($query);

?>
<a href="tambah_kategori.php">Tambah Kategori</a>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $num = 0; do{ $num++; ?>
		<tr>
			<td><?=$num;?></td>
			<td><?=$data['nama_kategori'];?></td>
			<td>
				<a href="edit_kategori.php?id=<?=$data['id_kategori'];?>">Edit</a>
				<a href="hapus_kategori.php?id=<?=$data['id_kategori'];?>">Delete</a>
			</td>
		</tr>
		<?php }while ($data = mysqli_fetch_assoc($query)); ?>
	</tbody>
</table>