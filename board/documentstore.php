<?php
$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
session_start();
$au = $_SESSION['authority'];
if(!isset($au)){
	echo '<script>alert("접근권한 없음");history.go(-1)</script>';
}else{
	
}
?>