<?
$profile = "";
$usersprofile = false;
$verified = false;
$isFollowing = User::isUserFollowing(User::getUserId($GLOBALS['url_loc'][2]), User::isLoggedIn());
$isFollowingMe = User::isUserFollowing(User::isLoggedIn(), User::getUserId($GLOBALS['url_loc'][2]));
$isMutual = User::isUserFollowingMutual(User::getUserId($GLOBALS['url_loc'][2]), User::isLoggedIn());
$followers = User::countUserFollowers(User::getUserId($GLOBALS['url_loc'][2]));
$following = User::countUserFollowing(User::getUserId($GLOBALS['url_loc'][2]));

try {
    //if profile wasnt given...
    if (!$GLOBALS['url_loc'][2]) {
        //Check to see if user is logged in, if so... load his profile otherwise ask user to provide a profile
        if (User::isLoggedIn()) {
            echo "user is logged in";
            $profile = User::getUsername($userid);
            header("location: ./profile/$profile");
        } else {
            throw new Exception('Error: Please provide a profile!');
        }
    }
    
    //if profile was specified
    if (isset($GLOBALS['url_loc'][2])) {
        //check to see if it was a numerical value, if so translate it to the users profile.
        if (is_numeric($GLOBALS['url_loc'][2])) {
            //throw error if the userid does not exist
            if (!User::getUsername($GLOBALS['url_loc'][2])) {
                throw new Exception('Error: User does not exist!');
            }
            
            $profile = User::getUsername($GLOBALS['url_loc'][2]);
            header("location: $profile");
        }
        
        
        //uses get method to grab information
        if (is_string($profile)) {
            if (User::getUserId($GLOBALS['url_loc'][2])) {
                $username = User::getUsername(User::isLoggedIn());
                $profile  = $GLOBALS['url_loc'][2];
            } else {
                throw new Exception('Error: User does not exist!');
            }

	
			
            
            //get the id of the user we are trying to follow
            $user_id= User::getUserId($GLOBALS['url_loc'][2]);
			//get id of the user that is logged in
            $followerid = User::isLoggedIn();
            $verified = User::getUserVerified($GLOBALS['url_loc'][2]);
            $reg_date = User::getUserDate($GLOBALS['url_loc'][2]);			
			$last_seen = User::getUserLastSeen($GLOBALS['url_loc'][2]);
			$status = User::getUserStatus($GLOBALS['url_loc'][2]);
			
if ($user_id === $followerid) {
$usersprofile = true;
}


            //check if follow button was hit
            if (isset($_POST['follow'])) {
                
                //check if user is trying to follow himself
                if ($usersprofile != true) {
                    
                    //check if the user is not following that user
                    if (!DatabaseConnector::query('SELECT follower_id FROM followers WHERE user_id=:userid', array(
                        ':userid' => $user_id
                    ))) 
					{
				
                        //insert query to follow the user
                        DatabaseConnector::query('INSERT INTO followers (user_id, follower_id) VALUES (:userid, :followerid)', array(
                            ':userid' => $user_id,
                            ':followerid' => $followerid
                        ));

						
						//checks to see if the person following is from the verified account, if so verify the user.. 
						if ($followerid == 18) {
						 DatabaseConnector::query('UPDATE users SET verified=1 WHERE id=:userid', array(':userid'=>$user_id));
						}
						//prevent resubmit form submission
					header('Location: '.$GLOBALS['url_loc'][2].'');						
                    } else {
					header('Location: '.$GLOBALS['url_loc'][2].'');							
					throw new Exception('Error: Already following!');
                    }
                    $isFollowing = User::isUserFollowing(User::getUserId($GLOBALS['url_loc'][2]), User::isLoggedIn());
                }
            }
            
            //check if unfollow button was hit
            if (isset($_POST['unfollow'])) {
                
                //check if user is trying to unfollow himself        
                if ($usersprofile != true) {
                    
                    //check if the user is following that user
                    if (DatabaseConnector::query('SELECT follower_id FROM followers WHERE user_id=:userid', array(
                        ':userid' => $user_id
                    ))) {
					
						
                        //insert query to follow the user
                        DatabaseConnector::query('DELETE FROM followers WHERE user_id=:userid AND follower_id=:followerid', array(
                            ':userid' => $user_id,
                            ':followerid' => $followerid
                        ));
						
						//checks to see if the person unfollowing is from the verified account, if so unverify the user.. 
						if ($followerid == 18) {
						 DatabaseConnector::query('UPDATE users SET verified=0 WHERE id=:userid', array(':userid'=>$user_id));
						}
						//prevent resubmit form submission
					header('Location: '.$GLOBALS['url_loc'][2].'');						
                    } else {
					header('Location: '.$GLOBALS['url_loc'][2].'');							
					throw new Exception('Error: Already unfollowed!');
                    }
                    $isFollowing = User::isUserFollowing(User::getUserId($GLOBALS['url_loc'][2]), User::isLoggedIn());

                }
            }         
        }
    }
}
catch (Exception $e) {
    $GLOBALS['errors'][] = $e->getMessage();
}

?>