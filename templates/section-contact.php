		<section id="section-contact">
			<h2>Contac'thé-nous</h2>
			<form class="ajax" method="POST" action="#section-contact">
				<div>
					<h4>Qui êtes-vous ?</h4>
					<input type="text" name="prenom" required placeholder="Prénom">
					<input type="text" name="nom" required placeholder="Nom">
					<input type="email" name="email" required placeholder="Email">
					<h4>Le sujet de votre prise de contact</h4>
					<select name="sujet">
						<option value="questionProduitThe" selected>Une question sur un produit/thé ?</option>
						<option value="questionLivraison">Une question sur la livraison ?</option>
						<option value="avis">Laisser un avis</option>
						<option value="autreDemande">Autre demande</option>
					</select>
				</div>
				<div>
					<h4>Votre message</h4>
					<textarea name="message" rows="12"></textarea>
					<button type="submit">Envoyer</button>
					
				</div>
				

					<input type="hidden" name="TraitementClass" value="Contact">

					<p class="feedback"><?php $this->afficherVarGlob("ContactMessage") ?></p>

			</form>
		</section>