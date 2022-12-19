<?php
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");
$see_num = $_POST['num'];
session_start();
$id=$_SESSION['user_id'];
if($id=='admin'){
	$sql = "DELETE FROM notice WHERE seq = $see_num";
	$result = mysqli_query($conn,$sql);	
	
	
	$sql_2 = "DELETE notice_comment where seq_num=$see_num";
	$result_2 = mysqli_query($conn,$sql_2);
	
	if($result and $result_2== 1){
		echo "<script>alert('삭제 성공'); location.href='/board/notice.php'</script>";
	}
	else{
		echo "<script>alert('삭제 실패'); history.go(-1)</script>";
	}
}else{
	echo "<script>alert('자신의 글이 아닙니다.'); history.go(-1)</script>";	
}
?>