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
$sql = "INSERT INTO freeboard(title, id, detail, see_count) value('$title', '$id', '$detail',1)";
$result = mysqli_query($conn, $sql);

if($result===false){
	echo '<script>alert("�Խñ� ��� ����"); history.go(-1)</script>';
}
else{
	echo '<script>alert("�Խñ� ��� �Ϸ�"); location.href="/board/freeboard.php"</script>';
}
?>