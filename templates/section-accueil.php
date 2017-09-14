		<section>
			<p>Section slider</p>
			<p>Sélection du moment...</p>
			<p>Nouveautés...</p>
			<p>Voir tous les produits</p>

		</section>

		<section>
				<p><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Envie de recevoir en exclusivité nos offres et nos nouveautés ? Abonnez-vous à la newsletter !</p>

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