<?php
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");

$id = $_POST['id'];
$sql = "update member set authority = 2 where id='$id'";
$ret = mysqli_query($conn, $sql);
if($ret == true){
	echo "<script>alert('권한업데이트 성공'); history.back()</script>";
}else{
	echo "<script>alert('권한업데이트 실패'); history.back()</script>";
}
?>