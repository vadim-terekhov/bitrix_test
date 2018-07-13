<?php
	$recepient = "<kalambus-22@mail.ru>";
	$sitename = "Testing Bitrix";
	$pagetitle = "New folower \"$sitename\" \n";
	$name = htmlspecialchars(trim($_POST['name']));
	$email =  htmlspecialchars(trim($_POST['email'])); 
	
	$message = "Name: $name \nE-mail: $email\n";

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/plain; charset=utf-8' . "\r \n";
	$headers .= 'From: Testing Bitrix'." $email \r\n";
	mail($recepient, $pagetitle, $message, $headers);
	header('Location: ./');
?>