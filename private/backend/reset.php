<?php
//check if user hit the reset button
if(isset($_POST['resetpassword'])){
//generate a random token
		$cstrong = True;
		$token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
		$email = $_POST['email'];
		//set value to user_id
		$user_id = DatabaseConnector::query('SELECT id FROM users where email=:email', array(':email'=>$email))[0]['id'];
		//query the database and insert into the tokens table
		DatabaseConnector::query('INSERT INTO password_tokens (token, user_id) VALUES (:token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
		echo $user_id;
		echo 'email sent <br>';
		
		echo $token;
}
?>