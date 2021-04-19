<?php
if (!User::isLoggedin()){
	header("Location: https://postogon.com/lit/public_html/login");
}

$result = "global";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = htmlspecialchars($_REQUEST['view']);
}

if($result == "global"){
        $dbposts = posts::fetch_posts("DESC");	
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