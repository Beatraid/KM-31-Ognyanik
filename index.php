<?php ob_start(); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>
Космос

</title>
<link href="style.css" rel="stylesheet" type="text/css"/> 
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
 <script>
$(document).ready(function(){
  $("body").css("display","none").fadeIn("slow");
});
</script>
</head>

<body>

<header>
<p class="new1">Історія дослідження космосу і розвиток космонавтики</p>
<div class="header">
<svg height="70" width="80" class="logo">
<defs>
				<radialGradient id="grad">
					<stop offset="25%" style="stop-color:rgba(253,255,125,0.9);stop-opacity:1" />
					<stop offset="50%" style="stop-color:rgba(244,215,53,0.8);stop-opacity:1" />
					<stop offset="75%" style="stop-color:rgba(225,105,0,0.8);stop-opacity:1" />
					<stop offset="100%" style="stop-color:rgba(244,95,57,1);stop-opacity:1" />
				
				</radialGradient>
				<radialGradient id="grad1">
				<stop offset="100%" style="stop-color:rgba(244,95,57,1);stop-opacity:1" />
				<stop offset="120%" style="stop-color:rgba(255,255,255,1);stop-opacity:1"/>
				</radialGradient>
			</defs>
			
<circle cx=40 cy=32 r=30 fill="url(#grad)" stroke="url(#grad1)" stroke-width="3">
</svg>
</div>
<script>
$('.logo').click(function(){
      $('.logo').animate({marginLeft:"8px"},1000);
      $('.logo').animate({marginTop:"5px"},1000);
	  $('.logo').animate({marginLeft:"16px"},1000);
      $('.logo').animate({marginTop:"10px"},1000);
	  $('.logo').animate({marginLeft:"24px"},1000);
      $('.logo').animate({marginTop:"15px"},1000);
	  $('.logo').animate({marginLeft:"32px"},1000);
      $('.logo').animate({marginTop:"20px"},1000);
	  $('.logo').animate({marginLeft:"40px"},1000);
      $('.logo').animate({marginTop:"25px"},1000);
      $('.logo').animate({marginLeft:"0px"},1000);
      $('.logo').animate({marginTop:"0px"},1000);
	  $('.logo').animate({marginLeft:"80px"},1000);
      $('.logo').animate({marginTop:"50px"},1000);
      $('.logo').animate({marginLeft:"0px"},1000);
      $('.logo').animate({marginTop:"0px"},1000);
  })
</script>

</header>

<nav>

  <a href="index.php"><div class="meny"> Головна</div></a>
  <a href="index.php?page=Baikanyr"><div class="meny"> Байконур</div></a>
  <a href="index.php?page=Princyp_dvygyna"><div class="meny">Ракетний двигун</div></a>
  <a href="index.php?page=Pidkorjyvaci"><div class="meny">Підкорювачі космосу</div></a>
  <a href="index.php?page=Rekordy"><div class="meny">Рекорди космосу</div></a>
  <a href="index.php?page=Ciolkovski"><div class="meny"> Ціолковський</div></a>
  <a href="index.php?page=Pershyj_krok"><div class="meny">Перший крок на місяць</div></a>
  <a href='index.php?page=say'><div class="meny">Відгуки</div></a>
  <a href='index.php?page=login'><div class="meny"><?php echo isset($_COOKIE['username']) ? "Вихід" : "Вхід"?></div></a>
  
 </nav>
  

<div div class=section>
<?php
		
		if((isset($_GET['page'])) && (!isset($page)))
			$page = strip_tags(trim($_GET['page']));
		else 
			$page = 'index';
			
		
		$s = $page.".html";
			
		if(!file_exists($s))
			include("themes/index.html");
		else
			include($s);
	?>
</div>
<footer>
<center>
<button onclick=" window.history.back()">НАЗАД</button> <button onclick=" window.history.forward()">ВПЕРЕД</button>
</center>
</footer>

</body>

</html>
<?php ob_end_flush(); ?>
