		</div>

	</main>
<!-- 

 _______   ______     ______   .___________. _______ .______      
|   ____| /  __  \   /  __  \  |           ||   ____||   _  \     
|  |__   |  |  |  | |  |  |  | `---|  |----`|  |__   |  |_)  |    
|   __|  |  |  |  | |  |  |  |     |  |     |   __|  |      /     
|  |     |  `--'  | |  `--'  |     |  |     |  |____ |  |\  \----.
|__|      \______/   \______/      |__|     |_______|| _| `._____|
                                                                  

 -->

	<footer>
		<nav>
			<ul>
				<li><a href="<?php echo $app["url_generator"]->generate("credits")?>">Crédits</a></li>
				<li><a href="<?php echo $app["url_generator"]->generate("mentions-legales")?>">Mentions légales</a></li>
				<li>&copy; Tous droits réservés.</li>
			</ul>
		</nav>

		<div>		
				<a target="_blank" href="https://www.facebook.com/TeaShey"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			
				<a target="_blank" href="https://twitter.com/TeaSheyTea"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			
				<a target="_blank" href="https://www.instagram.com/TeaSheyTea/"><i class="fa fa-instagram" aria-hidden="true"></i></a>			
		</div>
	</footer>

	<!-- Appel des scripts -->
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous">
	</script>

	<!-- Chemin vers notre JS -->
	<script type="text/javascript" src="<?php echo $this->urlRacine; ?>/assets/js/script.js"></script>

</body>
</html>