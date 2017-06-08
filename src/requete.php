<?php 


/* 
Fichier contenant les requetes SQL préparés et réutilisable sur n'importe quelle page,
tant que marquer le include('requete.php') 
*/

// Connection a la base de donnée 
try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

// Preparation des requetes de base de la base de donnée 

?>