<?php
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");
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
} */

$sql = "INSERT INTO notice(title,detail,see_count) value('$title','$detail',1)";
$result = mysqli_query($conn, $sql);

if($result===false){
	echo '<script>alert("게시글 등록 실패"); history.go(-1)</script>';
}
else{
	echo '<script>alert("게시글 등록 완료"); location.href="/board/notice.php"</script>';
}
?>