<?php

session_start();
header('location: login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'login_sample_db');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from users where name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Username has Already Taken!";
} else {
	$reg = "insert into users (name, password) values ('$name', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successful!"; 
}

?>