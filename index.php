<!DOCTYPE html>
<?php
	include_once "utils/DBSettings.php";
	include_once "utils/Common.php";
	include_once "utils/Session.php";	
	include_once "utils/SessionController.php";	
	
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Es un portal web para la gestión de información del CBTa 188">

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/jquery.scrollgress.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<script src="js/script.js"></script>
	<script src="js/unslider.js"></script>

	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-wide.css" />
		<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	<title>.: C.B.T.a. 188 :.</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/slider.css" />
</head>
<!-- ====================================================================================================== -->
<body class="index">

	<header id="header" class="alt">
		<h1 id="logo">
			<a href="index.php">
				<img alt="Cbta188" class="image smally" src="images/logo.png" />CBTA 188
			</a>
		</h1>
		<?php include "components/navigationBar.php" ?>
	</header>

	<div id="content">
		<?php if($loginAttempt) echo "Se proporcionó una credencial incorrecta"; ?>
		<section id="banner">
			<?php include "_pages/banner.php"; ?>
		</section>

		<article id="main">
			<?php include "_pages/home.php"; ?>
		</article>
	
	</div>

	<!-- CTA -->
	<section id="cta" class="shadow0">	
		<header>
			<h2>Centro de Bachillerato Tecnológico Agropecuario No. 188</h2>
			<p>"Dr. Pedro Velez y Zuñiga".</p>
		</header>
	</section>
	<!-- Fin del CTA -->

	<!-- Footer -->
	<footer id="footer">	
		<ul class="icons">
			<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
		</ul>
		
		<ul class="copyright">
			<li>&copy; 2015</li>
			<li>C.B.T.a. 188</li>
			<li>Villanueva Zac.</li>
		</ul>	
	</footer>
	<!-- Fin del Footer -->
</body>
<!-- ====================================================================================================== -->
</html>