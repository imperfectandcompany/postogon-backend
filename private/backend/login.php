<?php
if (isset($_POST['login'])) {
$email = $_POST['login_email'];
$password = $_POST['login_password'];

//check if email exists
if (DatabaseConnector::query('SELECT email from users WHERE email=:email', array(':email'=>$email))){
	//match user input password with database password
	if(password_verify($password, DatabaseConnector::query('SELECT password from users WHERE email=:email', array(':email'=>$email))[0]['password'])){
		echo 'logged in';
		$cstrong = True;
		$token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
		$user_id = DatabaseConnector::query('SELECT id from users WHERE email=:email', array(':email'=>$email))[0]['id'];
		DatabaseConnector::query('INSERT INTO login_tokens (token, user_id) VALUES (:token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
		//pass cookie name, token itself, expiry date = current time + amount valid for which we picked for one week, then location of the server the cookie is valid for.. / for everywhere, domain cookie is valid on... postogon.com, and ssl is true, and http only which means http only meaning js cant access which prevents XSS ATTACKS.
		setcookie("POSTOGONID", $token, time() + 60 * 60 * 24 * 7, '/', 'postogon.com', TRUE, TRUE);
	} else {
		echo 'incorrect password!';
	}

}	else {
	echo "user not registered";
}

}

?>