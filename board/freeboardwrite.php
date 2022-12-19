<?php
session_start();
$au = $_SESSION['authority'];
if(!isset($au) && $au<2){
	echo '<script>alert("접근권한이 없습니다."); history.go(-1)</script>';
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
		<form name="writeform" action="/typing/freeboardtyping.php" method="post">
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