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
		<form action="pwchange_re.php" method="POST">
			<fieldset>
				<legend>비밀번호 초기화</legend>
					<ul>
						<?php
						session_start();
						$id = $_SESSION['user_id'];
						?>
						<h3>
							id = <?php echo $id; ?> <br> 비밀번호는 aaaaa로 초기화 됩니다. 비밀번호 변경으로 들어가서 변경해 주세요
						</h3>
					</ul>
				<button type="submit">바꾸기</button>
			</fieldset>
		</form>
	</body>
</html>