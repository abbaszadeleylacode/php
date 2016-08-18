<?php

if (isset($_POST['click'])) {
	$mailAdress = $_POST['mailAdress'];
	$password = $_POST['password'];
	session_start();
	if (!empty($mailAdress) && !empty($password)) {
			echo "Qeydiyyat ugurla tamamlandi";
		}else{
			$_SESSION['ERROR'] = 'Bosluq buraxmaq olmaz mans :)';
			header('Location:index.php');
		} 
}