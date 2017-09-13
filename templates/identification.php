		<section>

			<h3>J'ai un compte / Connexion</h3>

			<form class="ajax" method="POST" action="">
				<div>
					<p>
						<input type="email" name="email" placeholder="Email">
					</p>
					<p>
						<input type="password" name="password" placeholder="Mot de passe">
					</p>
					<p>
						<input type="hidden" name="TraitementClass" value="LoginUser">
					</p>
					<p>
						<button type="submit">Je me connecte</button>
					</p>
					<p class="feedback"><?php $this->afficherVarGlob("LoginUserMessage")?></p>
				</div>				

			</form>

		</section>
		<section>

			<h3>Je n'ai pas de compte / Inscription</h3>

			<form class="ajax" method="POST" action="">
				<div>
					<p>
						<input type="text" name="login" placeholder="Pseudo">
					</p>
					<p>
						<input type="email" name="email" placeholder="Email">
					</p>
					<p>
						<input type="password" name="password" placeholder="Mot de passe">
					</p>
					<p>
						<input type="password" name="passwordConfirm" placeholder="Confirmation du mot de passe">
					</p>
					<p>
						<input type="hidden" name="TraitementClass" value="AddUser">
					</p>
					<p>
						<button type="submit">Je m'inscris</button>
					</p>
					<p class="feedback"><?php $this->afficherVarGlob("AddUserMessage")?></p>
				</div>				

			</form>

		</section>