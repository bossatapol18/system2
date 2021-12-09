<?php
$serverName = "LAPTOP-O7F4B0NM"; //serverName\instanceName, portNumber (default is 1433)
$database = "DB_Test";
$username = "boss";
$password = "61122420003";


try {
	$conn = new PDO("sqlsrv:Server=$serverName ;Database=$database", $username, $password);		
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      echo "Connect OK!";
}

catch(Exception $e){
	die (print_r($e->getMessage()));
}


?>


