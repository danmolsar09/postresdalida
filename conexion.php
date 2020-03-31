<?php

<?php

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

try
{
	$pdo = new PDO ($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAME utf8"));

	echo "<script>alert('Conectado...')</script>";
}
catch (PDOException $e)
{
	echo "<script>alert('Error...')</script>";
}

?> 

?>