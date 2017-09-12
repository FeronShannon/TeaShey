<?php

namespace Controller;

class TraitementNewsletter
	extends ControllerParent
{
	function __construct($request)
	{
		Parent::__construct($request);
		$this	->traiterform("Newsletter")
				->lireChamp("nom")
				->lireChamp("prenom")
				->lireEmail("email")
				->insererLigneUnique("newsletter", "email")
				->setMessage("Merci, tu recevras nos actualités !")
				;
	}
}