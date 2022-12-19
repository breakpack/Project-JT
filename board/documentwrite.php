<?php
session_start();
$au = $_SESSION['authority'];
if(!isset($au)){
	echo '<script>alert("접근권한 없음");history.go(-1)</script>';
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
		<form name="reqform" method="post" action="/typing/documenttyping.php" enctype="multipart/form-data">
			<p>
				<label for="title">글 제목 : </label>
				<input type="text" id="title" name="title" required>
			</p>
			<p>
				<label for="detail">내용 : </label>
				<textarea name="detail" id="detail" cols="60" rows="20" required></textarea>
			</p>
			<div class="container">	
				<input type="file" name="File"/>
			</div>
			<input class="button3" type="submit" value="글 작성" name="submit">
		</form>
	</body>
</html>
<?php } ?>