<?php

	include_once('functions.php');		

	$one = htmlspecialchars($_GET["id"]);
		removeArticle($one);
	
?>
Message about result
<hr>
<a href="index.php">Move to main page</a>