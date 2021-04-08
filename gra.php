<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PokeMemory</title>
	<meta name="description" content="JS Memory Game inspired by Pokemon">
	<meta name="keywords" content="javascript, jQuery, game, pokemon, memory, pokememory">
	<meta name="author" content="DJ">
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	
	
	<!-- below there is the BOOTSTRAP import. -->
	<!-- Copy-paste the stylesheet <link> into your <head> before all other stylesheets to load our CSS.-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	
	<link rel="stylesheet" href="main.css">
	
	<!-- GOOGLEFONT below-->
	<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

</head>

<body>
	

	<h1> Witaj, <?=$_SESSION['user'] ?></h1>	
	<p>
		Play the memory game based on <a href="https://bulbapedia.bulbagarden.net/wiki/Main_Page">Pokemon</a>
	</p>
	
	
	<div class="board container">
		<div class="row card-row">
			<div class="card col-12" id="c0"></div><!-- end of div .card -->
			<div class="card col-12" id="c1"></div><!-- end of div .card -->
			<div class="card col-6" id="c2"></div><!-- end of div .card -->
			<div class="card col-6" id="c3"></div><!-- end of div .card -->
			
			<div class="card col-3" id="c4"></div><!-- end of div .card -->
			<div class="card col-3" id="c5"></div><!-- end of div .card -->
			<div class="card col-3" id="c6"></div><!-- end of div .card -->
			<div class="card col-3" id="c7"></div><!-- end of div .card -->
			
			<div class="card col-3" id="c8"></div><!-- end of div .card -->
			<div class="card col-3" id="c9"></div><!-- end of div .card -->
			<div class="card col-3" id="c10"></div><!-- end of div .card -->
			<div class="card col-3" id="c11"></div><!-- end of div .card -->
			
			<div class="card col-3" id="c12"></div><!-- end of div .card -->
			<div class="card col-3" id="c13"></div><!-- end of div .card -->
			<div class="card col-3" id="c14"></div><!-- end of div .card -->
			<div class="card col-3" id="c15"></div><!-- end of div .card -->
		</div>
		
		<div class="score"> Turns used : 0 </div><!-- end of score div-->
	</div> <!-- end of div board -->
	<div class="container">
	<div class="row">
		<div class="col-6">EMAIL <?=$_SESSION['email'] ?></div>
		<div class="col-6">PREMIUM EXPIRES ON <?=$_SESSION['premium_expire'] ?> </div>
		<div class="col-6">TASUJ</div>
		<div class="col-6"><a href="logout.php">WYLOGUJ</a></div>
	</div> <!-- end of row-->
	</div> <!-- end of container-->

	<script src="jquery-3.6.0.min.js"></script>
	<script src="memory.js"></script>
	
</body>
</html>