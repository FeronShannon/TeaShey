		<section>
			<h5>Section slider</h5>
			<p>Sélection du moment...</p>
			<p>Nouveautés...</p>
			<h5>Voir tous les produits</h5>

		</section>

		<section>
				<h3><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Envie de recevoir en exclusivité nos offres et nos nouveautés ? Abonnez-vous à la newsletter !</h3>

				<form class="ajax" method="GET" action="">

					<input type="email" name="email" placeholder="Votre email ici">

					<input type="hidden" name="TraitementClass" value="Newsletter">

					<p class="feedback"><?php $this->afficherVarGlob("NewsletterMessage") ?></p>

					<button type="submit">OK</button>
				</form>
		</section>

<?php 	
		require_once("section-notre-the.php");
		require_once("section-nos-produits.php");
		require_once("section-livraison.php");
		require_once("section-contact.php");
?>
				

		

		

		
		<p><a href="#haut-page">Haut de page <i class="fa fa-arrow-up" aria-hidden="true"></i></a></p>