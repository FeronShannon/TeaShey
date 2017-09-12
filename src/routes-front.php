<?php

// ROUTE POUR LA PAGE ACCUEIL web/index_dev.php/
$app
->get('/', "\\route\\Front::accueil")
->bind('accueil')
;

// ROUTE POUR LA PAGE DES IDEES RECETTES web/index_dev.php/idees-recettes
$app
->get('/idees-recettes', "\\route\\Front::idees-recettes")
->bind('idees-recettes')
;

// ROUTE POUR LA PAGE D'UN PRODUIT web/index_dev.php/produit-detail/{url}
// SILEX VA CREER UN OBJET DE LA CLASSE Front
// ET ENSUITE APPELER LA METHODE produit SUR L'OBJET CREE
// SILEX VA TRANSMETTRE {url} COMME PARAMETRE $url A LA METHODE produit
$app
->get('/produit-detail/{url}', "\\route\\Front::produitDetail")
->bind('produit-detail')
;

// ROUTE POUR LA PAGE DES CREDITS web/index_dev.php/credits
$app
->get('/credits', "\\route\\Front::credits")
->bind('credits')
;