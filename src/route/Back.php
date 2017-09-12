<?php

namespace route;

// ON DONNE LE CHEMIN POUR ALLER TROUVER LA CLASSE Request
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class Back 
    extends RouteParent
{
    /*
    hérité de RouteParent ====>

    // Propriétés------>

    public $codeHTML ="";
    public $cheminTemplate;
    protected $urlBase;
    protected $tabValeur =[];
    public $urlRedirection ="";
    public $request = null;
    public $session = null;

    // Méthodes-------->

    __construct - stocke le cheminTemplate, l'url de base et la request.
    Regarde s'il y a un traitement et l'active le cas échéant

    constructHTML($tab) : construit et retourne le HTML à partir d'un tableau
    ou doivent figurer les noms des différentes sections 

    afficherVarGlob(maVariable) : affiche la variable globale maVariable

    lireValeur($cle) : retourne la valeur de la propriété tabValeur dont la clé 
    est $cle

    afficherValeur($cle) : fait un echo de la valeur de la propriété tabValeur dont la clé 
    est $cle

    CES METHODES ET CES PROPRIETES SONT UTILISABLES DANS LES TEMPLATES EN FAISANT $this->propriete/$this->methode($para...) CAR LES TEMPLATES SONT APPELES DANS UNE METHODE DE CETTE CLASSE (construireHTML)


    */

    function __construct()
    {

        $this->session = new Session;
        $this->session->start();
        Parent::__construct();
    
    }

    function admin()
    {
        if ($this->session != null)
        {
            if($this->session->get("level") > 1)
            {
                $this->construireHTML([ "backoffice/header", "backoffice/section-admin", "backoffice/footer" ]);
                return $this->codeHTML;
            }
            else
                return $this->redirectToRoute("login");
        }
        else
            return $this->redirectToRoute("login");
    }

    function produits()
    {
        if ( $this->isAdminConnected() )
        {
            $this->construireHTML([ "backoffice/header", "backoffice/section-produits", "backoffice/footer" ]);
                return $this->codeHTML;
        }
        else
        {
           return $this->redirectToRoute("login"); 
        }
    }

    function produitUpdate($id)
    {
        if ( $this->isAdminConnected() )
        {
            $this->tabValeur["id"] = $id;
            $this->construireHTML([ "backoffice/header", "backoffice/section-produit-update", "backoffice/footer" ]);
                return $this->codeHTML;
        }
        else
        {
           return $this->redirectToRoute("login"); 
        }
    }

    function changeStatut($table, $id)
    {
        // Cette fonction fait switcher le statut de 0 à 1 et inversement
        // prend un élément de la table $table avec l'id $id
        // 
        if ( $this->isAdminConnected() )
        {
            $traitement = new \Controller\TraitementChangeStatut($table, $id);

            if($table == "produits")
                return $this->redirectToRoute("admin/produits");
            else
                return $this->redirectToRoute("admin");



        }
        else
        {
           return $this->redirectToRoute("login"); 
        }
    }


    function delete($table, $id)
    // Cette méthode permet de delete un événement de la table event
    // et de rediriger sur la page admin-produits
    // Elle a 2 paramètres donc peut aussi delete les messages et avis
    // et rediriger sur admin 
    {
        if ( $this->isAdminConnected() )
        {
            $traitement = new \Controller\TraitementDelete($table, $id);

            if($table == "produits"){
                return $this->redirectToRoute("admin/produits");
            } else {
                return $this->redirectToRoute("admin");
            }

        }
        else
        {
           return $this->redirectToRoute("login");
        }
    }

    function isAdminConnected()
        
    {
        $adminConnecte = false;

        if ($this->session != null)
        {
            if($this->session->get("level") > 1)
            {
                $adminConnecte = true;
            }
        }
        return $adminConnecte;

    }

    function login()
    {

        if ($this->urlRedirection == "")
        {

            $this->construireHTML([ "backoffice/headerMinimaliste", "backoffice/section-login", "backoffice/footer" ]);
            return $this->codeHTML;
        }
        else
        {
            global $app;
            return $app->redirect($this->urlRedirection);
        }
    }

    function logout()
    {
        // On met tou à zéro dans la session
        $this->session->set("email", "");
        $this->session->set("level", 0);
        $this->session->set("login", "");

        // On redirige vers le login
        global $app;

        $urlLogin = $app["url_generator"]->generate("login");
        return $app->redirect($urlLogin);
    }

    function user()
    {
        if ( $this->isAdminConnected() )
        {
            $this->construireHTML([ "backoffice/header", "backoffice/section-ajout-user", "backoffice/footer" ]);
                return $this->codeHTML;
        }
        else
        {
           return $this->redirectToRoute("login"); 
        }
    }