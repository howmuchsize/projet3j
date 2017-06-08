<?php 
// connexion à la base de donnees
try
{
	$db = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>