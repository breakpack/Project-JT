<?php
session_start();
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");

$pw=$_POST['id'];
$id=$_SESSION['user_id'];

$sql="select*from member WHERE id = '$id'";
$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
	$pw_c=$row['pw'];
}

$pw_cc= password_hash($_POST['pw'], PASSWORD_DEFAULT);

if(password_verify($pw, $pw_c)){
	$sql_1 = "update member set pw = '$pw_cc' where id='$id'";
	$ret = mysqli_query($conn, $sql_1);
}
if($ret == true){
	echo "<script>alert('비밀번호 변경 성공'); location.href='/tem/index.php'</script>";
}else{
	echo "<script>alert('비밀번호 변경 실패'); history.back()</script>";
}
?>