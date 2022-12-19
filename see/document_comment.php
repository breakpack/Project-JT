<?php
session_start();
$id = $_SESSION['user_id'];
$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
$index = "1";
$num = $_POST['num'];
$detail=$_POST['detail'];
$detail = htmlspecialchars($detail,ENT_QUOTES,'UTF-8');

$seq_num=$_GET['seq'];
$seq_re =$_POST['seq'];
$detail = nl2br($detail);

$sql="select *from document_comment";
$result=mysqli_query($conn,$sql);
if($num==1){
	$sql = "insert into document_comment(id, detail, seq_num) value('$id','$detail','$seq_re');";
	$result = mysqli_query($conn, $sql);

	if($result===false){
		echo '<script>alert("댓글 등록 실패"); history.go(-1)</script>';
	}
	else{
		$num = 0;
?>
<meta http-equiv="refresh" content="0;URL='/see/documentsee.php?seq=<?php echo $seq_re;?>'"><!--
<?php	
	}
}
$sql="select*from document_comment where seq_num=$seq_num";
$result=mysqli_query($conn,$sql);
?>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="#">
	<link href="/css/documentcss.css" rel="stylesheet" type="text/css">
	<title>JUNGTONG</title>
</head>
	<body>
		<?php
		while($row = mysqli_fetch_assoc($result)){
		?>
		<li class="co_id"><?php echo $row['id']; ?></li>
		<li class="co_date"><?php echo $row['date']; ?></li>
		<li class="co_de"><?php echo $row['detail']; ?></li>
		<hr/>
		<?php
		$index ++;
		}
		?>
		<form name="writeform" action="document_comment.php" method="post" class="comment_input">
			<p>
				<textarea name="detail" id="detail" cols="115" rows="10" required></textarea>
			</p>
			<input type="hidden" name="num" value=1>
			<input type="hidden" name= "seq" id="seq" value="<?php echo $seq_num; ?>">
			<?php
			session_start();
			$au = $_SESSION['authority'];
			if(!isset($au)){
			echo '로그인해 주십시오';
				?><input class="button" type="submit" value="작성" disabled>
			<?php
			}else{
			?><input class="button" type="submit" value="작성">
<?php } ?>
		</form>
	</body>
</html>