    <?php
    if (isset($_POST['upload'])){
        $name=$_FILES['file_video']['name'];
        $type=$_FILES['file_video']['type'];
        $size=$_FILES['file_video']['size'];
        $nama_file=str_replace(" ","_",$name);
        $tmp_name=$_FILES['file_video']['tmp_name'];
        $nama_folder="video/";
        $file_baru=$nama_folder.basename($nama_file);
        if ((($type == "video/mp4") || ($type == "video/3gpp")) && ($size < 8000000 )){
           move_uploaded_file($tmp_name,$file_baru);
           $pesan="Upload file video $nama_file berhasil diupload";
        }
        else{
            $pesan="File Video Terlalu Besar Atau Format Video Salah!";
        }
        echo "<p style='color:green;'>$pesan</p>";
    }
    ?>