<?php 

include"../includes/header.php";

$query = mysqli_query($con,"SELECT * FROM tb_artikel order by id_artikel DESC");

$data = mysqli_fetch_assoc($query);

 ?>
<a href="../tambahartikel.php">Tambah Artikel</a>
 <table border="1">
 	<thead>
 		<tr>
 			<th>No.</th>
 			<th>Judul</th>
 			<th>Tanggal</th>
 			<th>Kategori</th>
 			<th>Gambar</th>
 			<th>Aksi</th>
 		</tr>
 	</thead>
 	<tbody>
 	<?php $num = 0; do{ $num++; ?>	
 		<tr>
 			<td><?=$num;?></td>
 			<td><?=$data['judul_artikel'];?></td>
 			<td><?=$data['tanggal_artikel'];?></td>
 			<td><?=$data['id_kategori'];?></td>
 			<td><img src="../upload/<?=$data['gambar_artikel'];?>"style="width: 100px"></td>
 			<td>
 				<a href="edit_artikel.php?id=<?=$data['id_artikel'];?>">Edit</a>
 				<a href="hapus_artikel.php?id=<?=$data['id_artikel'];?>">Delete</a>
 			</td>
 		</tr>
 	<?php }while($data = mysqli_fetch_assoc($query)); ?>
 	</tbody>
 </table>