<?php
	include_once('functions.php');

	$isSend = false;
	$err = '';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$name = trim($_POST['name']);
		$phone = trim($_POST['phone']);
		
		if($name === '' || $phone === ''){
			$err = 'Заполните все поля!';
		}
		
		
		else{
			echo $name;
			if(addArticle($name,$phone)==true) 
			{echo "true";}

		}
	}
	else{
		$name = '';
		$phone = '';
	}

?>
<div class="form">
	<? if($isSend): ?>
		<p>Your app is done!</p>
	<? else: ?>
		<form method="post">
			Title:<br>
			<input type="text" name="name" value="<?=$name?>"><br>
			Content:<br>
			<input type="text" name="phone" value="<?=$phone?>"><br>
			<button>Send</button>
			<p><?=$err?></p>
		</form>
	<? endif; ?>
</div>

Form or message here
<hr>
<a href="index.php">Move to main page</a>