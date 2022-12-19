<?php
session_start();
$au = $_SESSION['authority'];
if(!isset($au)){
	echo '<script>alert("접근권한이 없습니다."); history.go(-1)</script>';
}else{
?>
<?php
$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
/*if(!$conn){
	echo 'db연결 실패';
}
else{
	echo 'db연결 성공';
}*/
$sql="select *from freeboard order by seq desc";
$result=mysqli_query($conn,$sql);
$index = "1";
?>
<!doctype html>
<html lang="ko">
<head>
	<link href="/css/freeboardcss.css" rel="stylesheet" type="text/css">
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
					<th class="hc2"><a href="/board/freeboard.php">자유게시판</a></th>
					<th class="hc3"><a href="/board/document.php">자료실</a></th>
					<th class="hc4"><a href="/board/mypage.php">my page</a></th>
					<th class="hc5"></th>
				</tr>
			</thead>
		</table>
	</div>
	<br>
	<div class=table>
		<table>
			<thead>
				<tr class="row_head">
					<th class="column1">No</th>
					<th class="column2">글제목</th>
					<th class="column3">글쓴이</th>
					<th class="column4">날짜</th>
					<th class="column5">조회 수</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)){
				?>
				<tr class="row_body">
					<td class="data1"><?php echo $index; ?></td>
					<td class="data2"><a href="/see/freeboardsee.php?seq=<?php echo $row['seq']?>"><?php echo $row['title']; ?></a></td>
					<td class="data3"><?php echo $row['id']; ?></td>
					<td class="data4"><?php echo $row['date']; ?></td>
					<td class="data5"><?php echo $row['see_count']; ?></td>
				</tr>
				<?php
				$index ++;
				}
				?>
			</tbody>
		</table>
	</div>
	<br>
	<a href="/board/freeboardwrite.php"><input type="button" value="글쓰기"></a>
</body>
</html>
<?php } ?>