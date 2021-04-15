<?php

class posts {

public static function fetch_posts($order){	
return DatabaseConnector::query('SELECT * FROM posts ORDER BY posted_on '. $order);
}

public static function fetch_userPosts($order, $user_id){	
	return DatabaseConnector::query('SELECT * FROM posts WHERE user_id=:userid ORDER BY posted_on '.$order, array(':userid'=>$user_id));
}

public static function likePost($postid){	
	$user_id = User::isLoggedIn();
	if(!DatabaseConnector::query('SELECT user_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid,':userid'=>$user_id))){
	DatabaseConnector::query('UPDATE posts SET likes=likes+1 WHERE id=:postid', array(':postid'=>$postid));
	
	DatabaseConnector::query('INSERT INTO post_likes (user_id, post_id) VALUES (:userid, :postid)', array(':userid'=>$user_id, ':postid'=>$postid));
	}
	echo "already liked";
}

public static function unlikePost($postid){	
	$user_id = User::isLoggedIn();
	if(DatabaseConnector::query('SELECT user_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid,':userid'=>$user_id))){
	DatabaseConnector::query('UPDATE posts SET likes=likes-1 WHERE id=:postid', array(':postid'=>$postid));
	DatabaseConnector::query('DELETE FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid, ':userid'=>$user_id));
	}
	echo "user has not liked the post!";
}

public static function isLiked($postid){
	$user_id = User::isLoggedIn();	
	if(DatabaseConnector::query('SELECT user_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid,':userid'=>$user_id))){
	return true;
	}
	return false;
}



}
?> 