<?php
$username = User::isLoggedIn();
	
if(isset($_POST['like'])) {
	$postid = $_POST['postid'];
	posts::likePost($postid);
	die($result);
	header("Refresh:");
}

if(isset($_POST['unlike'])) {
	$postid = $_POST['postid'];
	posts::unlikePost($postid);
	die($result);	
	header("Refresh:");
}
?> 