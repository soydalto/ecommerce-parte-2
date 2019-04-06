<!DOCTYPE html>
<html>
<head>
	<title>Eccomerce - Verdulería</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="nav">
			<ul class="desktop-ul">
				<li class="elements"><a href="./"><i class="fas fa-apple-alt"></i> Frutas</a></li>
				<li class="elements"><a href="pagar"><i class="fas fa-shopping-cart"></i> Pagar</a></li>
				<li class="elements li-buttons"><a href="login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
				<li class="elements li-buttons"><a href="registro"><i class="fab fa-wpforms"></i> Registro</a></li>
			</ul>
		</nav>
		<nav class="responsive-nav">
			<i class="fas fa-angle-down icon-for-slide"></i>
			<ul class="responsive-ul">
				<li class="elements"><a href="./"><i class="fas fa-apple-alt"></i> Frutas</a></li>
				<li class="elements"><a href="pagar"><i class="fas fa-shopping-cart"></i> Pagar</a></li>
				<li class="elements"><a href="login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
				<li class="elements"><a href="registro"><i class="fab fa-wpforms"></i> Registro</a></li>
			</ul>
		</nav>
	</header>
	<section class="fruits">
		<div class="all-fruits">
			<div class="fruit-section">
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/naranja.png">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/manzana.png">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/banana.jpg">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/banana.jpg">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
			</div>
			<div class="fruit-section">
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/melon.png">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/sandia.png">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/kiwi.png">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/banana.jpg">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="show-cart">
			<?php include("../private/show-cart.php"); ?>
		</div>
	</section>
<script src="js/index.js"></script>
</body>
</html>