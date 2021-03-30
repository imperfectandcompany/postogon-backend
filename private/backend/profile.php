<?


$username = "";
if(!$GLOBALS['url_loc'][2])
{
//Check to see if user is logged in, if so... load his profile otherwise ask user to provide a profile
if (User::isLoggedIn()){
echo "user is logged in";
echo User::hasUsername(User::isLoggedIn());
} else {	
die("Please provide a profile");
}
}

if(isset($GLOBALS['url_loc'][2]) && is_numeric($GLOBALS['url_loc'][2]))
{
        echo $GLOBALS['url_loc'][2];
}


//uses get method to grab information
if (isset($_GET['username'])) {
	if(DatabaseConnector::query('SELECT username FROM users WHERE username=:username', array(':username'=>$_GET['username']))){
	$username = DatabaseConnector::query('SELECT username FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['username'];
	//check if follow button was hit
	if(isset($_POST['follow'])) {
		//get the id of the user we are trying to follow
		$userid = DatabaseConnector::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['username'];
		
		//check if the user is not following that user
		if (!DatabaseConnector::query('SELECT follower_id FROM followers WHERE user_id=:userid', array(':userid' =>$userid))){
			//insert query to follow the user
			DatabaseConnector::query('INSERT INTO followers (user_id, follower_id) VALUES (:userid, :followerid)', array(':userid'=>$userid,':followerid'=>$followerid));		
		}
	echo "1";	
	} else {
		echo "2";		
	}
}
}



?>