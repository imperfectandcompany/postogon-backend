<?php
//grabs all the posts of the user that is viewing the page.
//order by desc from unix timestamp because the higher the number the earlier they are.//
switch ($GLOBALS['url_loc'][1]){
	case 'home':
	$dbposts = DatabaseConnector::query('SELECT * FROM timeline ORDER BY posted_on DESC');
	break;
	case 'profile':
	$dbposts = DatabaseConnector::query('SELECT * FROM timeline WHERE user_id=:userid ORDER BY posted_on DESC', array(':userid'=>$user_id));
	break;
	default:
	break;
}
?>