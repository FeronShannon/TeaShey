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
	font-family: 'Overlock', cursive;-->

	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:400,500,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Overlock:400,400i,700,700i,900,900i" rel="stylesheet">

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
			<figure id="logo">
				<a href="#"><img src="<?php echo $this->urlRacine; ?>/assets/img/logoteashey.png" alt="logo TeaShey"></a>
			</figure>

			<nav class="identification">
				<ul>
					<li><a href="<?php echo $app["url_generator"]->generate("identification")?>">S'inscrire</a></li>
					<li><a href="<?php echo $app["url_generator"]->generate("identification")?>">Je me connecte !</a></li>
				</ul>
			</nav>
		</section>
		<nav>
			<ul>
				<li><a href="#section-notre-the">Notre thé</a></li>
				<li><a href="#section-nos-produits">Nos produits</a></li>
				<li><a href="#section-livraison">Livraison</a></li>
				<li><a href="<?php echo $app["url_generator"]->generate("idees-recettes")?>">Idées recettes</a></li>
				<li><a href="#section-contact">Contac'thé-nous</a></li>
			</ul>
			<a href="<?php echo $app["url_generator"]->generate("mon-panier")?>">Mon panier</a>
		</nav>
		
		<div>
			<figure>
				<a target="_blank" href="https://www.facebook.com/TeaShey"><img src="<?php echo $this->urlRacine; ?>/assets/img/rs/logo-fb.png" alt="logo Facebook"></a>
			</figure>
			<figure>
				<a target="_blank" href="https://twitter.com/TeaSheyTea"> <img src="<?php echo $this->urlRacine; ?>/assets/img/rs/logo-twitter.png" alt="logo Twitter"></a>
			</figure>
			<figure>
				<a target="_blank" href="https://www.instagram.com/TeaSheyTea/"> <img src="<?php echo $this->urlRacine; ?>/assets/img/rs/logo-instagram.png" alt="logo Instagram"></a>
			</figure>
		</div>
	</header>
<!--
.___  ___.      ___       __  .__   __. 
|   \/   |     /   \     |  | |  \ |  | 
|  \  /  |    /  ^  \    |  | |   \|  | 
|  |\/|  |   /  /_\  \   |  | |  . `  | 
|  |  |  |  /  _____  \  |  | |  |\   | 
|__|  |__| /__/     \__\ |__| |__| \__| 
                                        
 -->
	<main>