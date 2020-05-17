<?php
include "koneksi.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
// var_dump($_POST);

$query = "UPDATE tb_user SET username='$username', password='$password', level='$level' WHERE id='$id' ";
$sql = mysqli_query($conn,$query);

if ($sql) {
	
	header("location:list_user.php?pesan=sukses");
}else {
	header("location:list_user.php?pesan=gagal");
}
?>