<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<link href="/css/registercss.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="#">
		<title>login page</title>
		<style>
			form label.reg {
        	    font-size: 14px;
            	width: 120px;
            	float: left;
        	}
		</style>
	</head>
	<body>
		<form action="/login/registerinput.php" method="POST">
        	<fieldset>
        	    <legend>게시판 회원가입</legend>
				
				<ul>
					<li><label class="reg" for="name"> 이름 *</label> 
					<input type="text" id="name" name="name" size="20" autocomplete="on" required><br></li>
				
					<li><label class="reg" for="id"> id *<br>영어만 입력</label> 
					<input type="text" id="id" name="id" size="20" autocomplete="on" pattern="[A-Za-z0-9`~!@#$%^&*()-_]+" required><br></li>
					<br><br>
				
					<li><label class="reg" for="pw"> password *</label> 
					<input type="password" id="pw" name="pw" size="20" autocomplete="on" required><br></li>
				
					<li><label class="reg" for="pwc"> password check *</label> 
					<input type="password" id="pwc" name="pwc" size="20" autocomplete="on" required><br></li>
				
					<li><label class="reg" for="numbering">	학번 </label> 
					<input type="text" id="numbering" name="numbering" size="20" autocomplete="on"><br></li>
				
					<li><label class="reg" for="phonenumber"> 전화번호 *</label> 
					<input type="text" id="phonenumber" name="phonenumber" size="20" autocomplete="on" required><br></li>
				</ul>
            	<p>
					<input type="submit" value="회원가입">
				</p>
			</fieldset>
		</form>
	</body>
</html>