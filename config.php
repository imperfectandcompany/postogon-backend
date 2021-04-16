<?php
switch ($GLOBALS['url_loc'][1])
{
    case "/":
    break;
    case "signup":
        $PAGE_TITLE = "Sign up";
        $BACKEND = "signup";
        $FRONTEND = "signup";
    break;
    case "join":
        header("location:../public_html/signup");
    break;
    case "signin":
        header("location:../public_html/login");
    break;
    case "home":
        $dbposts = posts::fetch_posts("DESC");
        $PAGE_TITLE = "Home";
        $BACKEND = "home";
        $FRONTEND = "home";		
        $FOOTER = "home";
        $HEADER = "home";
    break;
    case "createusername":
        $PAGE_TITLE = "Create Username";
        $BACKEND = "createusername";
        $FRONTEND = "createusername";	
    break;
    case "signup":
        $PAGE_TITLE = "Sign up";
        $BACKEND = "signup";
        $FRONTEND = "signup";	
    break;
    case "settings":
        $PAGE_TITLE = "Settings";
        $BACKEND = "settings";
        $FRONTEND = "settings";	
        $FOOTER = "settings";
        $HEADER = "settings";
    break;
    case "reset":
        $PAGE_TITLE = "Reset";
        $BACKEND = "reset";
        $FRONTEND = "reset";
    break;
    case "redeem":
        $PAGE_TITLE = "Redeem";
        $BACKEND = "redeem";
        $FRONTEND = "redeem";
    break;
    case "profile":
        $PAGE_TITLE = "Profile";
        $BACKEND = "profile";
        $FRONTEND = "profile";
        $FOOTER = "profile";
        $HEADER = "profile";
    break;
    case "timeline":
        $PAGE_TITLE = "Timeline";
        $dbposts = posts::getPublicPosts(User::isLoggedIn() , "DESC");
        $BACKEND = "timeline";
        $FRONTEND = "timeline";
    break;
    case "notifications":
        $PAGE_TITLE = "Notifications";
        $BACKEND = "notifications";
        $FRONTEND = "notifications";
    break;
    case "logout":
        $PAGE_TITLE = "Logout";
        $BACKEND = "logout";
        $FRONTEND = "logout";
        $FOOTER = "logout";
        $HEADER = "logout";
    break;
    case "login":
        $PAGE_TITLE = "Log In";
        $BACKEND = "login";
        $FRONTEND = "login";
    break;
    default:
        $BACKEND = "index";
        $FRONTEND = "index";
	break;
}
?>