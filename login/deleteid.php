<?php
session_start();
$id = $_SESSION['user_id'];
?>
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<link href="/css/deleteidcss.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="#">
		<title></title>
		<style>
			form label.reg {
        	    font-size: 14px;
            	width: 80px;
            	float: left;
        	}
		</style>
	</head>
	<body>
		<form action="/login/deleteid_check.php" method="POST">
			<fieldset>
				<legend>È¸¿øÅ»Åð</legend>
					<ul>
						<?php
						echo 'id = ',$id;
						?>
						<br>
						<li><label class="reg" for="pw"> pw  </label>
						<input type="password" id="pw" name="pw" size="20" autocomplete="on" required><br></li>
					</ul>
				<br>
				<button type="submit">È¸¿øÅ»Åð</button>
			</fieldset>
		</form>
	</body>
</html>
