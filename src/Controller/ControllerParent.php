<?php

namespace Controller;

class ControllerParent
{
	public $tabNameValeur  = [];
	public $request        = null;
	public $traitement     = "";
	public $tabError       = [];
	public $urlRedirection = "";
	public $session        = "";

	
	function __construct($request, $session=null)
	{
		$this->request = $request;
		$this->session = $session;
	}


	function lireChamp($nameChamp)
	{
		$this->tabNameValeur[$nameChamp] = $this->request->get($nameChamp);
		return $this;

	}

	function lireChampsMultiples($tabChamps)
	// Cette fonction applique la fonction lireChamp sur les éléments du tableau
	// passé en paramètres.
	{
		foreach ($tabChamps as $cle => $champ) {
			$this->lireChamp($champ);
		}
		return $this;
	}	

	function lireChampSecurise ($nameChamp)
	{
		// Je récupère le champ name dans la requête et
		// je stocke sa valeur dans une variable :
		$valeur = $this->request->get($nameChamp);
		// J'enlève les espaces dans un champ au début et à la fin
    	$valeur = trim($valeur);
    	// J'enlève les balises :
    	$valeur = strip_tags($valeur);	
		// Je mets le contenu vérifié dans mon tabNameValeur :
		$this->tabNameValeur[$nameChamp] = $valeur;
		
		return $this;
    
	}
	
	function lireEmail($name)
	{
		// On mémorise dans la propriété tableau la valeur de l'email
		$email = $this->request->get($name);
		// VERIFIER QUE L'EMAIL EST VALIDE

		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$this->tabNameValeur[$name] = $email;
		}


		// POUR VERIFIER QUE L'EMAIL EST VALIDE
		return $this;
	}

	function insererLigne($table)
	{
		if (count($this->tabError == 0))
		{
			// Besoin de $app
			global $app;
			// ON peut utiliser l'objet db pour agir sur la DB
			$app['db']->insert($table, $this->tabNameValeur);
		}

		return $this;
	}

	function insererLigneUnique($table, $nomColonneUnique)
	{
		// Besoin de $app
		global $app;

		// On vérifie si la valeur de la colonne $nomColonneUnique existe
		// dans la table $table
		$sql = "SELECT * FROM $table WHERE $nomColonneUnique = ?";

		$stmt = $app['db']->prepare($sql);
		$stmt->bindValue(1, $this->tabNameValeur[$nomColonneUnique]);
		$stmt->execute();


		$ligne = $stmt->fetch();
		
		if ($ligne)
		{
			$this->tabError[] = "Cet $nomColonneUnique est déjà présent dans la base de données !";
		}

		else
		{
			$app['db']->insert($table, $this->tabNameValeur);
		}

		return $this;		
	}

	function ajouterValeurTab($name, $valeur)
	{
		$this->tabNameValeur[$name] = $valeur;
		return $this;
	}

	function traiterForm($traitement)
	{
		$this->traitement = $traitement;
		return $this;
	}

	function setMessage ($message)
    {
        // JE RE-UTILISE LA VALEUR MEMORISEE DANS LA PROPRIETE
        $nomVar = $this->traitement."Message";
        
        // S'il n'y a pas d'erreur, je mets le message demandé
        // Sinon, je mets les messages d'erreurs concaténés.
        if ( count($this->tabError) == 0 )
        	$GLOBALS[$nomVar] = $message;
        else
        	$GLOBALS[$nomVar] = implode(", " , $this->tabError);
 
    }

    function lirePassword($password, $passwordConfirm, $colonneSQL)
    {
    	$password = $this->request->get("password");

    	$passwordConfirm = $this->request->get("passwordConfirm");
    	    	 // un peu de secu
    	if ( ($password != "")  && ($passwordConfirm == $password) )
    	{
    		
    		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
    		$this->ajouterValeurTab($colonneSQL, $passwordHash);
    	}
    	else
    	{
    		$tabError[] = "Problème avec le mot de passe.";
    	}

    	return $this;
    }


    function lireDateTime($dateHeure, $date, $heure)
	/*Cette méthode lit les champs date et heure et recompose un timedate
	au format SQL, qu'elle insère dans le tableau de données tabNameValeur,
	propriété de la classe. Elle retourne $this pour le chaînage*/
	{
		$date = $this->request->get($date);
		$heure = $this->request->get($heure);

		if ($date != "" && $heure != "")
			$this->tabNameValeur[$dateHeure] = $date . " " . $heure . ":00";

		return $this;
	}

	function lireStatut()
	{
		$statut = $this->lireChamp("statut");
	}

	function verifierDate()
	{
		if (isset($this->tabNameValeur['dateFin']))
		{
			$timestampFin = strtotime($this->tabNameValeur['dateFin']);			
			$timestampDebut = strtotime($this->tabNameValeur['dateDebut']);

			if ($timestampDebut < time())
			{
				$this->tabError[] = "La date de l'évènement est déjà passée !";
			}

			if ($timestampFin < $timestampDebut)
			{
				$this->tabError[] = "La fin de l'évènement est programmé avant son début !";
			}

		}

		return $this;
	}
    
}