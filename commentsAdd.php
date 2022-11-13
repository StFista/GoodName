<?php
	include "config.php";

	$author = htmlspecialchars($_POST["NameComment"]);
	$email = htmlspecialchars($_POST["EmailComment"]);
	$text_comment = htmlspecialchars($_POST["TextComment"]);
	
	$myPDO->exec("INSERT INTO 'comments' ('email','author','text_comment') VALUES ('$email','$author','$text_comment')");
	
	header("Location: ".$_SERVER["HTTP_REFERER"]);
?>