<?php
$conn = mysqli_connect("localhost","root","cha63788","jungtongdb") or die("connect failed..");
session_start();
$see_num = $_GET['seq'];
$ext_array = array("jpeg", "jpg", "gif", "bmp", "png");
$sql = "select *from freeboard where seq = $see_num";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$detail = $row['detail'];
	$filename = $row['filename'];
	$ext = $row['ext'];
	$id = $row['id'];
	$see_count = $row['see_count'];
	$date = $row['date'];
}
$sql_see_count = "update freeboard set see_count = see_count + 1 where seq = $see_num";
$result_see_count = mysqli_query($conn,$sql_see_count);
?><ul class=a></ul>
<style>
ul{
	 list-style:none;
	padding-left:0px;
}
</style>

<!doctype html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="#">
	<link href="/css/freeboardcss.css" rel="stylesheet" type="text/css">
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
		<div class='detail'>
			<li class='title'><h2 class='title_1'><?php echo $title; ?></h2>
				<br>
				<img src="https://cdn.discordapp.com/attachments/962308362660376636/998387165606199346/peple.png" height="20" width="10">
				<ui class='id'><?php echo $id; ?></ui>
				<img class='date' src="https://cdn.discordapp.com/attachments/962308362660376636/998389334971527240/clock.png" height="16" width="16">
				<ui class='id'><?php echo $date; ?></ui>
			</li>
			<hr/>
			<li class='contents'><?php echo $detail; ?></li>
		</div>
		<hr/>
		<form action="freeboardseede.php" method="post">
				<input type="hidden" name= "num" value="<?=$see_num?>">
				<input type="submit" class="de" value="삭제">
		</form>
		<form action="coments.php">
			<input type="hidden" name= "num" value="<?=$see_num?>">
			<input type="submit" class="mo" value="수정">
		</form>
		<h4 class="co">
			댓글
		</h4>
		<hr class=line/>
		<?php include("free_comment.php"); ?>
	</body>
</html>