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
			</ul>
		</nav>
		
		<p>&copy; Tous droits réservés</p>
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