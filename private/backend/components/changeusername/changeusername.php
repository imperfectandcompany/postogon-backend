<?php
//get current username to fill as value in username field
$username = (DatabaseConnector::query('SELECT username FROM users WHERE id=:userid', array(':userid'=>$userid))[0]['username']);
	$userwarning = 0;
if(isset($_POST['changeusername'])){

	try{
		if(!isset($_POST['username']) || !$_POST['username']){ throw new Exception('Error: You did not provide a username!'); }
		if($username == $_POST['username']){ throw new Exception('Error: This is already your username!'); }
		if(DatabaseConnector::query('SELECT username from users WHERE username=:username', array('username'=>$_POST['username']))){
			throw new Exception('Error: This username is already taken!');
		}
		//set variables
		$newusername = $_POST['username'];
		if(strlen($newusername) >= 6 && strlen($newusername) <= 30) {
		DatabaseConnector::query('UPDATE users SET username=:newusername WHERE id=:userid', array(':newusername'=>$newusername, ':userid'=>$userid));

//get newly changed password to fill as value in username field
$username = (DatabaseConnector::query('SELECT username FROM users WHERE id=:userid', array(':userid'=>$userid))[0]['username']);		
		$userwarning = 1;
		$success="username";
	} 	else {	throw new Exception('Error: This username is way too long!');
	}
	}	catch (Exception $e) {
			$userwarning = 1;
                $GLOBALS['errors'][] = $e->getMessage();
            }	
}
?>