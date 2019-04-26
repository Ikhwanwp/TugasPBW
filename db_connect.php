<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','berita_kita');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if ($con)
{
 echo "Koneksi Terhubung";
}
else{
	echo "Database Tidak Ditemukan";
}
?>