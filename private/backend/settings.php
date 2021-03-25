<?php


//use this function in the user class to see if the user is logged in
if (!User::isLoggedin()){
	die("Not logged in");
	
}
$userid = User::isLoggedIn();
include('components/changeusername/changeusername.php');
include('components/changepassword/changepassword.php');
include('components/logout/logout.php');
?>