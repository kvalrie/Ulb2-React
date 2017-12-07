<?php
/*Version 2.0 , Ajax fonctionnel .
écrit et réalisé par Hugo Barcelona */

try
{

	$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());

}

?>
