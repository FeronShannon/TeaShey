<?php

namespace Controller;

class TraitementNewsletter
	extends ControllerParent
{
	function __construct($request)
	{
		Parent::__construct($request);
		$this	->traiterForm("Newsletter")
				->lireEmail("email")
				->insererLigneUnique("newsletter", "email")
				->setMessage('<span class="success"><i class="fa fa-check" aria-hidden="true"></i> Merci, tu recevras nos actualités !</span>')
				;
	}
}