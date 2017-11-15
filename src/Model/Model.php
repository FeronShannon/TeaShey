<?php

namespace Model;

class Model
{
	function lireTable($table)
	{
		$requeteSQL = "SELECT * FROM $table";
		global $app;
		return $app['db']->executeQuery($requeteSQL);
	}

	// Je lis ma table et je récupère son statut en second paramètre
	function lireTableLevel($table, $statut)
	{
		$requeteSQL = "SELECT * FROM $table WHERE statut='$statut'";
		global $app;
		return $app['db']->executeQuery($requeteSQL);
	}

	function pagination($SelectSQL, $numeroPage=1, $nombreLignes=5)
	// Fonction qui retourne un objet statement
	// correspondant à la page donnée en paramètre
	// avec le nombre de ligne donné en paramètre
	{
		$debut = ($numeroPage - 1) * $nombreLignes;
		$newRequete = $SelectSQL . " LIMIT $debut, $nombreLignes";

		global $app;
		$stmt = $app['db']->executeQuery($newRequete);
		return $stmt;
	}
}