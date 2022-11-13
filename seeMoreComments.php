<?php
	include "config.php";
	
	$infoComments = $myPDO->prepare("SELECT * FROM 'comments' ('email','author','text_comment') LIMIT 10");
	
	//Это вообще массив?
	
	foreach($infoComment as $comment){
		print $comment['author']."<br>";
		print $comment['email']."<br>";
		print $comment['text_comment']."<br>";
	}
	
	$infoComments -> execute();
?>