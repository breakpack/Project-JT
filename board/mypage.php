<?php
session_start();

$au = $_SESSION['authority'];
if($au<1 || !isset($au)){
	echo '<script>alert("�α��� �Ǿ����� �ʽ��ϴ�."); history.go(-1)</script>';
}
$id = $_SESSION['user_id'];
$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
		/*if(!$conn){
			echo 'db���� ����';
		}
		else{
			echo 'db���� ����';
		}*/
$sql = "SELECT * FROM member WHERE id = '$id';";
$result = mysqli_query($conn, $sql);
		
while ($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$numbering = $row['numbering'];
	$phonenumber = $row['phonenumber'];
}
?>
<!doctype html>
<html lang="ko">
<head>
	<link href="/css/mypagecss.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="#">
	<title>JUNGTONG</title>
</head>
<body>
	<div class="head">
		<a href="/tem/index.php">
			<img src="https://cdn.discordapp.com/attachments/962308362660376636/992310301657681940/JT.png" style="width: 2vw; min-width: 50px;">	
		</a>
		<br>
		<br>
		<table>
			<thead>
				<tr>
					<th class="hc1"><a href="/board/notice.php">NOTICE</a></th>
					<th class="hc2"><a href="/board/freeboard.php">�����Խ���</a></th>
					<th class="hc3"><a href="/board/document.php">�ڷ��</a></th>
					<th class="hc4"><a href="/board/mypage.php">my page</a></th>
					<th class="hc5"></th>
				</tr>
			</thead>
		</table>
	</div>
	<br>
	<div class="table">
		<table>
			<thead>
				<th class="hd">�̸�</th>
				<th class="hd">id</th>
				<th class="hd">��й�ȣ</th>
				<th class="hd">�й�</th>
				<th class="hd">��ȭ��ȣ</th>
				<th class="hd">����</th>
			</thead>
			<h1>
				ȸ������
			</h1>
			<tbody>
				<td class="hcc"><?php echo $name; ?></td>
				<td class="hcc"><?php echo $id; ?></td>
				<td class="hcc"><a href="/login/chpw.php">��й�ȣ ����</a>/<a href="../pwchange.php">��й�ȣ ������..</a></td>
				<td class="hcc"><?php echo $numbering; ?></td>
				<td class="hcc"><?php echo $phonenumber; ?></td>
				<td class="hcc"><?php echo $au; ?></td>
			</tbody>
		</table>
		
	</div>
	</body>
</html>