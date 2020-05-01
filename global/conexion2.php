<?php

	$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

	try
	{
		$pdo = new PDO ($servidor,USUARIO,PASSWORD, array (PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

		//echo "<script> alert('CONECTADO') </script>";
	}
	catch (PDOException $e)
	{
		echo "<script> alert('ERROR DE CONEXIÓN') </script>";
	}

?>