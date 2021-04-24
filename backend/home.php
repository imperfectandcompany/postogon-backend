<?php
if (!User::isLoggedin()){
	header("Location: https://postogon.com/lit/public_html/login");
}

//different tabs / views			
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if(isset($_REQUEST['view'])){
	$result = htmlspecialchars($_REQUEST['view']);				
	} else {
	$result = "global";	
	}
}

if($result == "global"){
        $dbposts = posts::fetch_PublicPosts("DESC");	
}

if($result == "all"){
        $dbposts = posts::getBothPosts(User::isLoggedIn() , "DESC");	
}

if($result == "feed1"){
        $dbposts = posts::getPublicPosts(User::isLoggedIn() , "DESC");	
}

if($result == "feed2"){
        $dbposts = posts::getPrivatePosts(User::isLoggedIn() , "DESC");	
}




include_once('components/post/createpost.php');



include_once('components/post/post.php');


?>