<?php
$username = User::isLoggedIn();
	
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