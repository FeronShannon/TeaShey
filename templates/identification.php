		<section id="section-identification">
			<form class="ajax" method="POST" action="">
				
					<h3>Connexion</h3>
						<input type="email" name="email" placeholder="Email">		
						<input type="password" name="password" placeholder="Mot de passe">		
						<input type="hidden" name="TraitementClass" value="LoginUser">		
						<button type="submit">Je me connecte</button>		
					<p class="feedback"><?php $this->afficherVarGlob("LoginUserMessage")?></p>
				
			</form>

			<form class="ajax" method="POST" action="">
				
					<h3>Inscription</h3>
						<input type="text" name="login" placeholder="Pseudo">
						<input type="email" name="email" placeholder="Email">
						<input type="password" name="password" placeholder="Mot de passe">
						<input type="password" name="passwordConfirm" placeholder="Confirmation du mot de passe">
						<input type="hidden" name="TraitementClass" value="AddUser">
						<button type="submit">Je m'inscris</button>
					<p class="feedback"><?php $this->afficherVarGlob("AddUserMessage")?></p>
								
			</form>
		</section>