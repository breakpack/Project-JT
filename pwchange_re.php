<?php
session_start();
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");

$id=$_SESSION['user_id'];

$sql="select*from member WHERE id = '$id'";
$result=mysqli_query($conn,$sql);

$pw='aaaaa';
$pw_c= password_hash($pw, PASSWORD_DEFAULT);
$sql_1 = "update member set pw = '$pw_c' where id='$id'";
$ret = mysqli_query($conn, $sql_1);
if($ret == true){
	echo "<script>alert('비밀번호 변경 성공'); location.href='/tem/index.php'</script>";
}else{
	echo "<script>alert('비밀번호 변경 실패'); history.back()</script>";
}
?>