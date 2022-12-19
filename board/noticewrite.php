<?php
session_start();
$au = $_SESSION['authority'];
if($au<3 || !isset($au)){
	header("location:/board/notice.php");
}else{
?>
<!doctype html>
<html lang = "ko">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="#">
		<link href="/css/writecss.css" rel="stylesheet" type="text/css">
		<title>write</title>
	</head>
	<body>
		<form name="writeform" action="/typing/noticeboardtyping.php" method="post">
			<p>
				<label for="title">글 제목 : </label>
				<input type="text" id="title" name="title" required>
			</p>
			<p>
				<label for="detail">내용 : </label>
				<textarea name="detail" id="detail" cols="50" rows="20" required></textarea>
			</p>
			<input class="button" type="submit" value="작성">
		</form>
	</body>
</html>
<?php } ?>