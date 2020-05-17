<?php
include "koneksi.php";
$id = $_GET['id'];

$query = "DELETE FROM tb_user WHERE id='$id' ";
$sql = mysqli_query($conn,$query) or die(mysql_error());

if ($sql) {
	
	header("location:list_user.php?pesan=delete_sukses");
}else{
	header("location:list_user.php?pesan=delete_gagal");
}
?>