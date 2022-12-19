<?php
session_start();
$id = $_SESSION['user_id'];
if(isset($id)) {
	echo '<script>alert("이미 로그인 되어 있습니다."); location.href="/tem/index.php"</script>';
}
else{ 
?>
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<link href="/css/logincss.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="#">
		<title>login page</title>
		<style>
			form label.reg {
        	    font-size: 14px;
            	width: 30px;
            	float: left;
        	}
		</style>
	</head>
	<body>
		<form action="/login/logincheck.php" method="POST">
			<fieldset>
				<legend>게시판 로그인</legend>
					<ul>
						<li><label class="reg" for="id"> id  </label>
						<input type="text" id="id" name="id" size="20" autocomplete="on" required><br></li>
						<li><label class="reg" for="pw"> pw  </label>
						<input type="password" id="pw" name="pw" size="20" autocomplete="on" required><br></li>
					</ul>
				<button type="submit">LOGIN</button>
			</fieldset>
		</form>
	</body>
</html>
<?php
}
?>