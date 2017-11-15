<?php

namespace Controller;

class TraitementContact
	extends ControllerParent
{
	function __construct($request)
	{
		Parent::__construct($request);
		$this	->traiterForm("Contact")
				->lireChampSecurise("prenom")
				->lireChampSecurise("nom")
				->lireEmail("email")
				->lireChampSecurise("message")
				->lireChampSecurise("sujet")
				->ajouterValeurTab("date", date("Y-m-d H:i:s"))
				->insererLigne("contact")
				->setMessage('<span class="success"><i class="fa fa-check" aria-hidden="true"></i> Merci, nous restons en contact !</span>')
				;
	}
}
