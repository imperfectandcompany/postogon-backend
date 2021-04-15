<?php

	$username = User::isLoggedIn();

//grabs all the posts of the user that is viewing the page.
//order by desc from unix timestamp because the higher the number the earlier they are.//
switch ($GLOBALS['url_loc'][1]){
	case 'home':
	$dbposts = posts::fetch_posts("DESC");
	break;
	case 'profile':
	$dbposts = posts::fetch_userPosts("DESC", $user_id);
	break;
	default:
	break;
}

if(isset($_POST['like'])) {
	$postid = $_POST['postid'];
	posts::likePost($postid);
	header("Refresh:");
}

if(isset($_POST['unlike'])) {
	$postid = $_POST['postid'];
	posts::unlikePost($postid);
	header("Refresh:");
}
?> 