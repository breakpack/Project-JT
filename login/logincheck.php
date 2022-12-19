
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<link href="#" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="#">
		<title>login page</title>
	</head>
	<body>
		<?php
		
		$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
		/*if(!$conn){
			echo 'db연결 실패';
		}
		else{
			echo 'db연결 성공';
		}*/
			
		if(!isset($_POST['id']) || !isset($_POST['pw'])){
			echo '<script>alert("입력값이 존재하지 않습니다."); history.go(-1)</script>';
		}
		else{
			
			$userid = $_POST['id'];
			$userpw = $_POST['pw'];
			$sql = "SELECT * FROM member WHERE id = '$userid';";
			$result = mysqli_query( $conn, $sql );
			
			while ($row = mysqli_fetch_array($result)) {
				$userid_e = $row['id'];
				$userpw_e = $row['pw'];
				$authority = $row['authority'];
			}
			
			
			if($userid === $userid_e and $userpw === $userpw_e){
				echo '<script>alert("로그인 되었습니다."); location.href="/tem/index.php"</script>';
				session_start();
				$_SESSION['user_id'] = $userid;
				$_SESSION['authority'] = $authority;
			}
			else{
				echo '<script>alert("id 또는 비밀번호를 확인해 주세요."); history.go(-1) </script>';
			}
		}
		
		?>
	</body>
	
</html>