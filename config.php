<?php

	define('HOST','host');
	define('DB_NAME','name_database');
	define('PORT','port');
	define('USER','root');
	define('PASS','');
	
	$dataBaseInfo = 'pgsql:host='.HOST.'; port='.PORT.';dbname'.DB_NAME.;
	
	try{
		$myPDO = new PDO($dataBaseInfo,USER,PASS);
	}
	catch(PDOException $e){
		echo "I'm sorry, it's not working";
	}
?>
	