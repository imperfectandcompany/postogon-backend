<?php
//first see if the user is logged in
	if (User::isLoggedIn()){
	//grab usersid
	$userid = User::isLoggedIn();
	
	//see if the user has a username
	if(!User::getUsername($userid)){
		//make sure not being redirected when already on page
		if ($GLOBALS['url_loc'][1] === "createusername"  || $GLOBALS['url_loc'][1] === "logout"){
		echo "eskettit";
		}
		else{
		//force user to take username onboarding
		header("location:../public_html/createusername");
		}
	}
	}
?>



