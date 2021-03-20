<?php
if (isset($_POST['login'])) {
$email = $_POST['login_email'];
$password = $_POST['login_password'];

//check if email exists
if (DatabaseConnector::query('SELECT email from users WHERE email=:email', array(':email'=>$email))){
	//match user input password with database password
	if(password_verify($password, DatabaseConnector::query('SELECT password from users WHERE email=:email', array(':email'=>$email))[0]['password'])){
		echo 'logged in';
	} else {
		echo 'incorrect password!';
	}

}	else {
	echo "user not registered";
}

}

?>