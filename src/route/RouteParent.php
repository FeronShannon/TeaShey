<?php

namespace route;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class RouteParent

/*
classe Parent des classes route/Front et route/Back
*/
{
	public $codeHTML          ="";
	public $cheminTemplate;
	// protected $urlRacine;
	protected $tabValeur      =[];
	public $request           = null;
	public $urlRedirection    ="";
	public $session           = null;

	function __construct()
	{
		// La classe request de Symfony
		$this->request = Request::createFromGlobals();
		
		// Partie controller on regarde s'il y a un formulaire 
		// à traiter grâce au champ hidden traitementClass
		// On récupère l'info traitementClass
		$traitementClass = $this->request->get("TraitementClass"); // equivalent de lire Input
		if ($traitementClass != "") //=> il y a un formulaire à traiter
		{
			// En POO, le code traitement sera dans une méthode de classe
			// \\Controller\\TraitementNewsletter
			$nomClasse ="\\Controller\\Traitement$traitementClass";

			if(class_exists($nomClasse))
			{
				// Si elle existe, on crée un objet et on lui passe
				// la request en paramètre:
				$objet = new $nomClasse($this->request, $this->session);

				// Récupérer l'info s'il faut faire une redirection
				if ($objet->urlRedirection != "")
				{
					$this->urlRedirection = $objet->urlRedirection;
				}
			}
		}
	}

	function construireHTML($tab)
	// Cette fonction retourne du html à partir d'un tableau de nom de template
	// Elle récupère des données dans la propriété tabValeur si nécessaire

	{
		// GLOBAL application (pour les menus)
		global $app;

		$urlRacine = $this->request->getBasePath();

		$this->cheminTemplate = __DIR__."/../../templates";

		extract($this->tabValeur);

		ob_start() ;// mise en buffer
		foreach ($tab as $key => $section) {
			# code...
			require_once("{$this->cheminTemplate}/$section.php");
		}

		$this->codeHTML = ob_get_clean();
	}


	function afficherVarGlob($varGlobal)
	{
		if(isset($GLOBALS[$varGlobal]))
		{
			echo $GLOBALS[$varGlobal];
		}
	}

	// POUR AFFICHER DANS LA PAGE DIRECTEMENT
    function afficherValeur ($cle)
    {
        if (isset($this->tabValeur[$cle]))
        {
            echo $this->tabValeur[$cle];
        }
    }

    // POUR RECUPERER LA VALEUR DANS UNE VARIABLE
    function lireValeur ($cle)
    {
        if (isset($this->tabValeur[$cle]))
        {
            return $this->tabValeur[$cle];
        }
        else
        {
            return "";
        }
    }

    function redirectToRoute ($nomRoute, $tabParamRoute=[])
    {
        global $app;
        $urlRoute = $app["url_generator"]->generate($nomRoute, $tabParamRoute);
        // https://silex.symfony.com/doc/2.0/usage.html#redirects
        return $app->redirect($urlRoute); 
    }

}