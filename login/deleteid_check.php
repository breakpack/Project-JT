<?php
session_start();

$pw = $_POST['pw'];
$id = $_SESSION['user_id'];

$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
	/*if(!$conn){
		echo 'db���� ����';
	}
	else{
		echo 'db���� ����';
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
		echo 'ȸ��Ż�� ����';
	}
	else{
		session_destroy();
		echo '<script>alert("�����Ǿ����ϴ� �̿��� �ּż� �����մϴ�."); location.href="../index.html"</script>';
	}
}
else{
	echo '<script>alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�."); history.go(-1)</script>';
}
?>