<?php

class posts {

public static function fetch_posts($order){	
return DatabaseConnector::query('SELECT * FROM posts WHERE to_whom = 1 ORDER BY posted_on '. $order);
}




public static function fetch_userPosts($order, $user_id){	
	return DatabaseConnector::query('SELECT * FROM posts WHERE user_id=:userid ORDER BY posted_on '.$order, array(':userid'=>$user_id));
}



public static function likePost($postid){	
	$user_id = User::isLoggedIn();

	if(!DatabaseConnector::query('SELECT user_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid,':userid'=>$user_id))){
	DatabaseConnector::query('UPDATE posts SET likes=likes+1 WHERE id=:postid', array(':postid'=>$postid));
	
	DatabaseConnector::query('INSERT INTO post_likes (user_id, post_id) VALUES (:userid, :postid)', array(':userid'=>$user_id, ':postid'=>$postid));
    header("refresh: 0;");
	} else {
    header("refresh: 0;");
            throw new Exception('Error: Post already liked!');
	}
	
}

public static function unlikePost($postid){	
	$user_id = User::isLoggedIn();
	if(DatabaseConnector::query('SELECT user_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid,':userid'=>$user_id))){
	DatabaseConnector::query('UPDATE posts SET likes=likes-1 WHERE id=:postid', array(':postid'=>$postid));
	DatabaseConnector::query('DELETE FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid, ':userid'=>$user_id));
    header("refresh: 0;");
	} else {
    header("refresh: 0;");				
            throw new Exception('Error: Post not liked!');		
	}
}

//-- select the column body from the table posts and the username column from the table users FROM the tables users, posts, and followers
//update, also grabs the likes - post date - and activity status
// in the second line, the condition set ensures that the user_id column of the posts table is equal to the user_id column of the followers table
// the third line takes the column user_id of table posts and matches it with the user_id column from the followers table. this allows us to match the username to the owner of the post.
// the last condition ensures that the follower of the user_id pertains to the user logged in. When executed, this adds the two selected columns to an array. showing the posts of the people that the user is following
public static function getPublicPosts($user_id, $order){
return DatabaseConnector::query('SELECT posts.body, posts.user_id, users.`status`, posts.id, posts.likes, posts.posted_on, users.`username` FROM users, posts , followers
WHERE posts.user_id = followers.user_id
AND users.id = posts.user_id
AND to_whom = 1
AND follower_id = '.$user_id.' ORDER BY posts.posted_on '.$order);
}

public static function getBothPosts($user_id, $order){
return DatabaseConnector::query('SELECT posts.body, posts.user_id, users.`status`, posts.id, posts.likes, posts.posted_on, users.`username` FROM users, posts , followers
WHERE posts.user_id = followers.user_id
AND users.id = posts.user_id
AND follower_id = '.$user_id.' ORDER BY posts.posted_on '.$order);
}

public static function getPrivatePosts($user_id, $order){
return DatabaseConnector::query('SELECT posts.body, posts.user_id, users.`status`, posts.id, posts.likes, posts.posted_on, users.`username` FROM users, posts , contacts
WHERE posts.user_id = contacts.contact_id
AND users.id = posts.user_id
AND to_whom = 2
AND contacts.user_id = '.$user_id.' ORDER BY posts.posted_on '.$order);
}

public static function isLiked($postid){
	$user_id = User::isLoggedIn();	
	if(DatabaseConnector::query('SELECT user_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postid,':userid'=>$user_id))){
	return true;
	}
	return false;
}

public static function isPrivate($postid, $postuser){
	if(DatabaseConnector::query('SELECT to_whom FROM posts WHERE id=:postid AND user_id=:userid', array(':postid'=>$postid,':userid'=>$postuser))[0]['to_whom'] == '2'){
	return true;
	}
	return false;
}

public static function countPostLikes($postid){	
	$user_id = User::isLoggedIn();
	if(DatabaseConnector::query('SELECT count(*) as total from post_likes WHERE post_id=:postid', array(':postid'=>$postid))){
	return DatabaseConnector::query('SELECT count(*) as total from post_likes WHERE post_id=:postid', array(':postid'=>$postid));	
	}
}





}
?>