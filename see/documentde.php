<?php
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");
$see_num = $_POST['num'];
session_start();
$id=$_SESSION['user_id'];
$sql_1 = "select *from documentboard where seq = $see_num";
$result_1 = mysqli_query($conn,$sql_1);

while ($row = mysqli_fetch_array($result_1)) {
	$id_c = $row['id'];
}

if($id_c==$id or $id =='admin'){
	$sql = "DELETE FROM documentboard WHERE seq = $see_num";
	$result = mysqli_query($conn,$sql);
	
	$sql_2 = "DELETE document_comment where seq_num=$see_num";
	$result_2 = mysqli_query($conn,$sql_2);
	
	if($result and $result_2== 1){
		echo "<script>alert('���� ����'); location.href='/board/document.php'</script>";
	}
	elseif($result or $result_2== 0){
		echo "<script>alert('���� ����'); history.go(-1)</script>";
	}
}else{
	echo "<script>alert('�ڽ��� ���� �ƴմϴ�.'); history.go(-1)</script>";
}
?>