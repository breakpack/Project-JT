<?php
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");
session_start();

$id = $_SESSION['user_id'];
$title = $_POST['title'];
$detail = $_POST['detail'];
$title = htmlspecialchars($title,ENT_QUOTES,'UTF-8');
$detail = htmlspecialchars($detail,ENT_QUOTES,'UTF-8');
$detail = nl2br($detail);

/*
$sql_title = "SELECT * FROM freeboard WHERE title = '$title';";
$result_title = mysqli_query($conn, $sql_title);
if ($row_title = mysqli_fetch_array($result_title)) {
	$date = $row_id['date'];
}
*/

$tempFile = $_FILES['File']['tmp_name'];
$resFile = "./img/{$_FILES['File']['name']}";
$Filename = $_FILES['File']['name'];
//���� Ÿ�� Ȯ����
$filetypeext= explode("/",$_FILES['File']['type']);
//���� Ÿ��
$filetype = $filetypeext[0];
//���� Ȯ����
$fileext = $filetypeext[1];
$imageUpload = move_uploaded_file($tempFile, $resFile);

$check_array=array('jpeg','jpg','gif','dmp','png','hwp','docx','doc','vnd.openxmlformats-officedocument.wordprocessingml.document');

if(in_array($fileext, $check_array)or !isset($fileext)){
	$sql = "INSERT INTO documentboard(id, title, detail, filename, ext, see_count) value('$id', '$title', '$detail', '$Filename', '$fileext',1)";
	$result = mysqli_query($conn, $sql);
}
else{
	echo "<script>alert('��ŷ�õ� ������ ���ڽľ�.'); history.go(-1)</script>";
}

if($result == true and $imageUpload == true){
	echo '<script>alert("���������� ���ε� �Ǿ����ϴ�."); location.href="/board/document.php"</script>';
}else{
	echo "<script>alert('���ε忡 �����Ͽ����ϴ�.'); history.go(-1)</script>";
}
?>