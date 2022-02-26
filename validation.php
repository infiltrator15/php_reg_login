<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'login_sample_db');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from users where name = '$name' && password = '$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username'] = $name;
	header('location:home.php');
} else {
	header('location:login.php');
}

?>