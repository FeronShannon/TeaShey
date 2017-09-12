<?php


namespace Controller;


class TraitementDelete
	extends ControllerParent
{
	function __construct($table, $id)
	{

		$this->supprimer($table,$id);

	}

	function supprimer($table, $id)
	{
        global $app;
        $app["db"]->delete($table, ["id" => $id]);

	}
}