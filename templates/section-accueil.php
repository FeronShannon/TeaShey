<?php
		require_once("section-slider.php");
?>

		<section id="section-newsletter">
			<h3>Newsletter</h3>
			<p><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Envie de recevoir en exclusivité nos offres et nouveautés ?</p>

			<form class="ajax" method="POST" action="#section-newsletter">

				<input type="email" name="email" placeholder="Mon email ici">

				<input type="hidden" name="TraitementClass" value="Newsletter">

				<button type="submit">OK</button>
				<p class="feedback"><?php $this->afficherVarGlob("NewsletterMessage") ?></p>
			</form>
		</section>

<?php 	
		require_once("section-notre-the.php");
		require_once("section-nos-produits.php");
		require_once("section-livraison.php");
		require_once("section-contact.php");
?>
		
		<p class="centrer"><a href="#haut-page">Haut de page <i class="fa fa-arrow-up" aria-hidden="true"></i></a></p>