<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/c11c693658.js"></script>

	<link rel="icon" href="<?php echo $this->urlRacine; ?>/assets/img/favicon.png">
	<title>TeaShey</title>
	<!-- Fontawesome et Google Font :

	font-family: 'Arima Madurai', cursive;
	font-family: 'Overlock', cursive;

	Pour nb dans notre panier :
	font-family: 'Poiret One', cursive;

	Pour <h2 :
	font-family: 'Mitr', sans-serif;-->

	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:400,500,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Overlock:400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mitr:200,300,400,500,600,700" rel="stylesheet">
	
	<!-- Chemins vers nos CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->urlRacine; ?>/assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->urlRacine; ?>/assets/css/style.css">
	
</head>
<body>

<!--
__    __   _______     ___       _______   _______ .______      
|  |  |  | |   ____|   /   \     |       \ |   ____||   _  \     
|  |__|  | |  |__     /  ^  \    |  .__.  ||  |__   |  |_)  |    
|   __   | |   __|   /  /_\  \   |  |  |  ||   __|  |      /     
|  |  |  | |  |____ /  _____  \  |  '__'  ||  |____ |  |\  \____
|__|  |__| |_______/__/     \__\ |_______/ |_______|| _| `._____|

 -->

	<header>
		<section>
			<div id="transparence">
				<figure id="logo">
					<a href="<?php echo $app["url_generator"]->generate("accueil")?>"><img src="<?php echo $this->urlRacine; ?>/assets/img/logoteashey-test.png" alt="Logo TeaShey"></a>
				</figure>
				
				<nav class="identification">
					<ul>
						<li><a href="<?php echo $app["url_generator"]->generate("identification")?>#section-identification">Connexion</a></li>
						<li><a href="<?php echo $app["url_generator"]->generate("identification")?>#section-identification">Inscription</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<nav class="menu">
			<ul>
				<li><a href="<?php echo $app["url_generator"]->generate("accueil")?>#section-notre-the">Notre thé</a></li>
				<li><a href="<?php echo $app["url_generator"]->generate("accueil")?>#section-nos-produits">Nos produits</a></li>
				<li><a href="<?php echo $app["url_generator"]->generate("accueil")?>#section-livraison">Livraison</a></li>
				<li><a href="<?php echo $app["url_generator"]->generate("idees-recettes")?>">Idées recettes</a></li>
				<li><a href="<?php echo $app["url_generator"]->generate("accueil")?>#section-contact">Contac'thé-nous</a></li>
			</ul>

			<a href="<?php echo $app["url_generator"]->generate("mon-panier")?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>

			<!-- <a href="<?php echo $app["url_generator"]->generate("mon-panier")?>">
				<figure>
					<img src="<?php echo $this->urlRacine; ?>/assets/img/panier-vide.png" alt="logo panier">
				</figure>
			</a> -->
		</nav>
	</header>
<!--
.___  ___.      ___       __  .__   __. 
|   \/   |     /   \     |  | |  \ |  | 
|  \  /  |    /  ^  \    |  | |   \|  | 
|  |\/|  |   /  /_\  \   |  | |  . `  | 
|  |  |  |  /  _____  \  |  | |  |\   | 
|__|  |__| /__/     \__\ |__| |__| \__| 
                                        
 -->
	<main id="haut-page">
		<div class="container">