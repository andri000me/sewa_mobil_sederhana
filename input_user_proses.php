<?php 
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// var_dump($_POST);
$query = "INSERT INTO tb_user(username,password,level) VALUES('$username', '$password', '$level')";

$sql = mysqli_query($conn,$query) or die(mysql_errno());

if ($sql) {
	header("location:list_user.php?pesan=sukses");
}else {

}
?>