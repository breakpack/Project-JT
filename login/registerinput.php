<?php
    $name = $_POST['name'];
	$id_1 = $_POST['id'];
	$id = htmlspecialchars($id_1,ENT_QUOTES,'UTF-8');
    $pw = $_POST['pw'];
	$pwc = $_POST['pwc'];
	$numbering = $_POST['numbering'];
	$phonenumber = $_POST['phonenumber'];
	$authority = 1;

	if ( !is_null( $name )) {
		$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
		/*if(!$conn){
			echo 'db연결 실패';
		}
		else{
			echo 'db연결 성공';
		}*/
		$sql = "SELECT * FROM member WHERE name = '$name';";
		$result = mysqli_query( $conn, $sql );
		
		while ($row = mysqli_fetch_array( $result )) {
			$name_e = $row['name'];
		}
		
		$sql_id = "SELECT * FROM member WHERE id = '$id';";
		$result_id = mysqli_query($conn, $sql_id);
		
		while ($row_id = mysqli_fetch_array($result_id)) {
			$id_e = $row_id['id'];
		}

		if ( $name == $name_e ) {
			echo '<script>alert("사용자 이름이 중복되었습니다."); history.go(-1)</script>';
		} 
		elseif ( $id == $id_e ) {
			echo '<script>alert("사용자 id가 중복되었습니다."); history.go(-1)</script>';
		}
		else {
			if ( $pw != $pwc ) {
			echo '<script>alert("비밀번호가 일치하지 않습니다."); history.go(-1)</script>';
			}
			else{
				$sql_add_user = "INSERT INTO member(name, id, pw, numbering, phonenumber, authority) VALUES('$name','$id','$pw','$numbering','$phonenumber','$authority');";
				$result_add_user = mysqli_query( $conn, $sql_add_user );
				if($result_add_user===false){
					echo '회원가입 실패';
				}
				else{
					echo '<script>alert("회원가입 성공, 가입승인을 위해서 카톡으로 연락주세요"); location.href = "../index.php"</script>';
				}
			}
    	}
	}
?>