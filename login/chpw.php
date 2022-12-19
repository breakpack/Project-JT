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
		<form action="/login/chchpw.php" method="POST">
			<fieldset>
				<legend>寃뚯떆�뙋 濡쒓렇�씤</legend>
					<ul>
						<li><label class="reg" for="id"> �썝�옒 鍮꾨��踰덊샇 </label>
						<input type="text" id="id" name="id" size="20" autocomplete="on" required><br></li>
						<li><label class="reg" for="pw"> 諛붽�� 鍮꾨��踰덊샇  </label>
						<input type="password" id="pw" name="pw" size="20" autocomplete="on" required><br></li>
					</ul>
				<button type="submit">LOGIN</button>
			</fieldset>
		</form>
	</body>
</html>