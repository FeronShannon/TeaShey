<?php

namespace Controller;

class TraitementContact
	extends ControllerParent
{
	function __construct($request)
	{
		Parent::__construct($request);
		$this	->traiterform("Contact")
				->lireChampSecurise("prenom")
				->lireChampSecurise("nom")
				->lireEmail("email")
				->lireChampSecurise("message")
				->ajouterValeurTab("statut", 0)
				->insererLigne("contact")
				->setMessage('<span class="success"><i class="fa fa-check" aria-hidden="true"></i> Merci, nous restons en contact !</span>')
				;
	}
}
