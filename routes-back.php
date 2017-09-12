<?php
// Routes pour la partie BACK OFFICE

// Route pour que l'utilisateur puisse se connecter et accéder à l'espace administrateur
// web/index_dev.php/login
$app->match('/login', "\\route\\Back::login")
->bind('login')
;

// Route, une fois l'utilisateur connecté, de l'espace administrateur
// web/index_dev.php/admin
$app->match('/admin', "\\route\\Back::admin")
->bind('admin')
;

// ROUTE page produits
// web/index_dev.php/admin/produits
$app->match('/admin/produits', "\\route\\Back::produits")
->bind('admin/produits')
;

// ROUTE page produit-update
// web/index_dev.php/admin/produit-update
$app->match('/admin/produit-update/{id}', "\\route\\Back::produitUpdate")
->bind('admin/produit-update')
;

// ROUTE page delete
// web/index_dev.php/admin/delete
$app->match('/admin/delete/{table}/{id}', "\\route\\Back::delete")
->bind('admin/delete')
;

// Route pour la déconnexion
$app->match('/logout', "\\route\\Back::logout")
->bind('logout')
;
