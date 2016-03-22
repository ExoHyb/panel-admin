<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=paej;charset=utf8', 'root', 'crusade42');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
?>