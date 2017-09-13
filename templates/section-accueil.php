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


		<section id="section-notre-the">
			<h2>Notre thé</h2>
			<h3>Notre engagement</h3>
			<p>Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili scelere non potest; deinde cum similis sensus exstitit amoris, si aliquem nacti sumus cuius cum moribus et natura congruamus, quod in eo quasi lumen aliquod probitatis et virtutis perspicere videamur.</p>
			<figure>
				<img src="<?php echo $this->urlRacine; ?>/assets/img/eng.jpg">
			</figure>

			<h3>Origine / Provenance</h3>
			<div id="carto">
				<p>Carto en JS...</p>
			</div>

		</section>

		<section id="section-nos-produits">
			<h2>Nos produits</h2>
			<nav>
				<ul>
					<li><a href="#">Sachets</a></li>
					<li><a href="#">Coffrets</a></li>
					<li><a href="#">Gamme thés glacés</a></li>
					<li><a href="#">Accessoires</a></li>
					<li><a href="#">Tous</a></li>
				</ul>
			</nav>
		</section>

		<section id="section-livraison">
			<h2>Livré délivré</h2>
			<h3>À domicile</h3>
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.549879345822!2d5.428479115649278!3d43.344607280348136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bfce019da41d%3A0x86fdadbd3bdce7c!2sRue+Marc+Donadille%2C+13013+Marseille!5e0!3m2!1sfr!2sfr!4v1505299213517" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<p>Livraison gratuite à partir de 50 € d'achat</p>
				<p>Domicile 5 €</p>
				<p>Point relais 3 €</p>
			<h3>Points relais</h3>
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.459536372832!2d5.424869815648296!3d43.30463878291747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bf0fff0d3fc1%3A0x5e6b8044fc4d4ce!2sSimply+Market+MARSEILLE+LES+CAILLOLS!5e0!3m2!1sfr!2sfr!4v1505299311797" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
		</section>

		<section id="section-contact">
			<h2>Contac'thé-nous</h2>
			<form class="ajax" method="GET" action="">
				<h4>Le sujet de votre prise de contact</h4>
				<select>
					<option value="1" selected>Une question sur un produit/thé ?</option>
					<option value="2">Une question sur la livraison ?</option>
					<option value="avis">Laisser un avis</option>
					<option value="demande">Autre demande</option>
				</select>

				<div>
					<h4>Qui êtes-vous ?</h4>
					<input type="text" name="prenom" required placeholder="Prénom">
					<input type="text" name="nom" required placeholder="Nom">
					<input type="email" name="email" required placeholder="Email">
					<h4>Votre message</h4>
					<textarea cols="10" rows="30"></textarea>
					<button type="submit">Envoyer</button>
				</div>

					<input type="hidden" name="TraitementClass" value="Contact">

					<p class="feedback"><?php $this->afficherVarGlob("ContactMessage") ?></p>

			</form>
		</section>
		<p><a href="#">Haut de page <i class="fa fa-arrow-up" aria-hidden="true"></i></a></p>