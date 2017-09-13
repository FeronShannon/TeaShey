<?php

namespace route;

// ON DONNE LE CHEMIN POUR ALLER TROUVER LA CLASSE Request
use Symfony\Component\HttpFoundation\Request;

class Front 
    extends RouteParent
    // Hérite de RouteParent
{
    /* Propriétés :

    public $codeHTML ="";
    public $cheminTemplate;
    protected $urlBase;
    protected $tabValeur =[];
    public $request = null;

    // Méthodes :

    __construct - stocke le cheminTemplate, l'url de base et la request.
    Regarde s'il y a un traitement et l'active le cas échéant

    constructHTML($tab) - construit et retourne le HTML à partir d'un tableau
    ou doivent figurer les noms des différentes sections 

    afficherVarGlob(maVariable) : affiche la variable globale maVariable

    lireValeur($cle) : retourne la valeur de la propriété tabValeur dont la clé 
    est $cle

    afficherValeur($cle) : fait un echo de la valeur de la propriété tabValeur dont la clé 
    est $cle

    CES METHODES ET CES PROPRIETES SONT UTILISABLES DANS LES TEMPLATES EN FAISANT $this->propriete/$this->methode($para...) CAR LES TEMPLATES SONT APPELES DANS UNE METHODE DE CETTE CLASSE (construireHTML)
    */

    function accueil ()
    {
        $this->construireHTML([ "header", "section-accueil", "footer" ]);
        
        return $this->codeHTML;
    }
    
    function produits ()
    {
        $this->construireHTML([ "header", "section-produits", "footer" ]);
        
        return $this->codeHTML;
    }
    
    // ROUTE DYNAMIQUE AVEC PARAMETRE /produit/{url}
    // SILEX VA TRANSMETTRE LA VALEUR DANS LE PARAMETRE $url
    function produitDetail ($url)
    {
        // STOCKE LA VALEUR $url POUR POUVOIR LA REUTILISER PLUS TARD
        $this->tabValeur["url"] = $url;
        
        $this->construireHTML([ "header", "section-produit-detail", "footer" ]);
        
        return $this->codeHTML;
    }

    function credits ()
    {
        $this->construireHTML([ "header", "credits", "footer" ]);
        
        return $this->codeHTML;
    }

    function mentionsLegales ()
    {
        $this->construireHTML([ "header", "mentions-legales", "footer" ]);
        
        return $this->codeHTML;
    }

    function identification ()
    {
        $this->construireHTML([ "header", "identification", "footer" ]);
        
        return $this->codeHTML;
    }

    function monPanier ()
    {
        $this->construireHTML([ "header", "mon-panier", "footer" ]);
        
        return $this->codeHTML;
    }

}
