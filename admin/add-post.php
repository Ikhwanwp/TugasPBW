<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
	header('location:index.php');
}
else
{

	//Untuk Menambahkan Post/Artikel
	if(isset($_POST['submit']))
	{
		$posttitle=$_POST['posttitle'];
		$catid=$_POST['category'];
		$subcatid=$_POST['subcategory'];
		$postdetails=$_POST['postdescription'];
		$arr = explode(" ",$posttitle);
		$url=implode("-",$arr);
		$imgfile=$_FILES["postimage"]["name"];
		//Mendapatkan Format Gmabar
		$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		//Mengijinkan Penggunaan Format Gambar
		$allowed_extensions = array(".jpg","jpeg",".png",".gif");
		//Validasi untuk memperbolehkkan format/ekstensi gambar
		if(!in_array($extension,$allowed_extensions))
		{
			echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			//Mengganti nama file gambar
			$imgnewfile=md5($imgfile).$extension;
			//Untuk memindahkan gambar ke dalam direktori/folder
			move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);

			$status=1;
			$query=mysqli_query($con,"insert into tblposts(PostTitle,CategoryId,SubCategoryId,PostDetails,PostUrl,Is_Active,PostImage) values('$posttitle','$catid','$subcatid','$postdetails','$url','$status','$imgnewfile')");
			if($query)
			{
				$msg="Post successfully added ";
			}
			else{
				$error="Something went wrong . Please try again.";    
			} 
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambahkan Artikel</title>
</head>
<body>
<form name="addpost" method="post" enctype="multipart/form-data">
	 <div class="form-group m-b-20">
		<label for="exampleInputEmail1">Post Title</label>
		<input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
	</div>

	<div class="form-group m-b-20">
		<label for="exampleInputEmail1">Category</label>
		<select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
			<option value="">Select Category </option>
			<?php
			// Feching active categories
			$ret=mysqli_query($con,"select id,CategoryName from  tblcategory where Is_Active=1");
			while($result=mysqli_fetch_array($ret))
			{    
			?>
			<option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
			<?php } ?>
		</select> 
	</div>

	<div class="card-box">
		<h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
		<textarea class="summernote" name="postdescription" required></textarea>
	</div>

	<div class="card-box">
		<h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
		<input type="file" class="form-control" id="postimage" name="postimage"  required>
	</div>

	<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
 	<button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
</form>
</body>
</html>