<?php
session_start();
$au = $_SESSION['authority'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>JT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" href="#">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php if(!isset($au)){ ?>
		<a href="/login/login.php" class="button_1">login</a>	
		<a href="/login/register.php" class="button_2">회원가입</a> <?php }else{ ?>
		<a href="/login/logout.php" class="button_1">logout</a> <?php } ?>
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo">by breakpack</a>
									<ul class="icons">
										<li><a href="https://www.instagram.com/plz.cantabile/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Hi, This is breakpack<br/></h1>
											<p>드디어 게시판을 만들었다!</p>
										</header>
										<p>이 사이트는 정통과의 어떤 한 사람의 노력과 <a href="https://html5up.net/">https://html5up.net/</a>에서 제공되는 templet이 사용되어 제작되었음을 알립니다.<br><br>아직 부족한 부분이 많아 계속 보완할 예정입니다 감사합니다<br><br>NOTICE 꼭 읽어주세요!</p>
										<ul class="actions">
											<li><a href="https://www.changwon.ac.kr/it/main.do" class="button big">Learn More</a></li>
										</ul>
									</div>
									<span class="image object">
										<img class= "insta" src="https://bunny.jjalbot.com/2018/12/S1fccp4GeE/20180108_5a531a897a82c.jpg" alt="" />
									</span>
								</section>
								
							<!-- Section -->
								<section>
									<header class="major">
										<h2>INTRODUTION</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>이곳은 정보통신공학과 게시판 입니다</h3>
												<p>이곳은 정통과 게시판 입니다. 정통과만 들어올 수 있으며, 사이트 내 자료 유출을 금합니다.(다..아는 방법이 있습니다..)</p>
											</div>
										</article><!--
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>Sapien veroeros</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>Quam lorem ipsum</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>Sed magna finibus</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>-->
									</div>
								</section>

							<!-- Section-->
								<section>
									<header class="major">
										<h2>Site index</h2>
									</header>
									<div class="posts">
										<article>
											<a href="https://www.changwon.ac.kr/portal/main.do" class="image"><img src="https://cdn.discordapp.com/attachments/962308362660376636/991600970331066368/831cb70fcfa10348.gif" alt="" /></a>
											<h3>GOTO WAAGLE</h3>
											<p>와글 바로가기</p>
											<ul class="actions">
												<li><a href="https://www.changwon.ac.kr/portal/main.do" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="https://ecampus.changwon.ac.kr/" class="image"><img src="https://cdn.discordapp.com/attachments/962308362660376636/991697405701541938/2307b966e6e3f225.gif" alt="" /></a>
											<h3>GOTO ECAMPUS</h3>
											<p>Ecampus 바로가기</p>
											<ul class="actions">
												<li><a href="https://ecampus.changwon.ac.kr/login.php" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="https://discord.gg/pBpuwsSN" class="image"><img src="https://cdn.discordapp.com/attachments/962308362660376636/991601687129239593/unknown.png" alt="" /></a>
											<h3>JUNGTONG DISCORD</h3>
											<p>안녕하세요 정보통신학과 디스코드입니다(이 사이트 만든사람이 정통 디스코드 봇이라는 소문이..살려줘..)</p>
											<ul class="actions">
												<li><a href="https://discord.gg/pBpuwsSN" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="https://cdn.discordapp.com/attachments/962308362660376636/991601867882774598/unknown.png" alt="" /></a>
											<h3>JUNGTONG KAKAO OPENCHAT</h3>
											<p>일정 공유 및 공부와 관련된 이야기 하는 곳</p>
											<ul class="actions">
												<li><a href="https://open.kakao.com/o/gpyQLHae" class="button">More</a></li>
											</ul>
										</article><!--
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>-->
									</div>
								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search --><!--
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
							-->
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul> 
										<li><a href="../index.php">Intropage</a></li>
										<li><a href="/board/notice.php">NOTICE</a></li>
										<!-- 
										<?php 
										if(isset($au)){ 
										?> --> <?php } ?>
										<li><a href="/board/freeboard.php">자유게시판</a></li>
										<!--<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>-->
										<li><a href="/board/document.php">자료게시판</a></li>
										<!--<li><a href="#">Adipiscing</a></li>-->
										<li>
											<span class="opener">My Page</span>
											<ul>
												<li><a href="/board/mypage.php">회원정보 보기</a></li>
												<!--<li><a href="/board/mycontents.php">작성 글 보기</a></li>-->
												<li><a href="/login/logout.php">Logout</a></li>
												<li><a href="/login/deleteid.php">회원탈퇴</a></li>
											</ul>
										</li><br><br><!--
										<li><a href="#">Maximus Erat</a></li>
										<li><a href="#">Sapien Mauris</a></li>
										<li><a href="#">Amet Lacinia</a></li>
									</ul>
								</nav> -->

							<!-- Section
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>-->

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Connect</h2>
									</header>
									<p>그럴일 없겠지만 사이트에 문제가 생기면 연락주세요..</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="https://mail.google.com/mail/u/1/#inbox">198799879a@gmail.com</a></li>
										<li class="icon solid fa-phone">010-8993-6378</li>
										<!--<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>-->
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>
									</ul>
							</nav>
						</div>
					</div>
		</div>
	</body>
</html>