<?php
	
	$myemail	= "widyahartanti03@gmail.com";
	$mypass		= "123456";

	if (isset($_POST['login'])) {
		$email 	= $_POST['email'];
		$pass 	= $_POST['password'];
		if ( $email == $myemail and $pass == $mypass ) {
			if ( isset($_POST['remember'])  ) {
				 setcookie('email', $email, time()+60*60*7);
				 setcookie('pass', $pass, time()+60*60*7);
			}
			session_start();
			$_SESSION['email'] = $email;
			header("location: welcome.php");
		} else {
			echo "Email atau Password tidak sesuai.<br> click disini untuk <a href='login.php'> mencoba lagi</a>";
		}
	} else {
		header("location: login.php");
	}
?>