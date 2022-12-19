<?php
session_start();

$pw = $_POST['pw'];
$id = $_SESSION['user_id'];

$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
	/*if(!$conn){
		echo 'db연결 실패';
	}
	else{
		echo 'db연결 성공';
	}*/

$sql = "SELECT * FROM member WHERE id = '$id';";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)){
	$pwc = $row['pw'];
}

if(password_verify($pw, $pwc)){
	$sql = "delete from member where id='$id'";
	$result = mysqli_query($conn, $sql);
	if($result===false){
		echo '회원탈퇴 실패';
	}
	else{
		session_destroy();
		echo '<script>alert("삭제되었습니다 이용해 주셔서 감사합니다."); location.href="../index.html"</script>';
	}
}
else{
	echo '<script>alert("비밀번호가 일치하지 않습니다."); history.go(-1)</script>';
}
?>