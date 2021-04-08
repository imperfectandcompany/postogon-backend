<?php
include("../config.php");

if(!ob_start("ob_gzhandler")) ob_start();
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include("../functions/functions.general.php");
include("../classes/class.user.php");		
include("../classes/class.database.php");
include("../classes/class.general.php");

switch($GLOBALS['url_loc'][1]){
    case "/":
    break;
    case "signup":
        include('../backend/signup.php');	
    break;
    case "join":
		header("location:../public_html/signup");
    break;
    case "signin":
		header("location:../public_html/login");
    break;
    case "home":
        include('../backend/home.php');	
    break;		
    case "createusername":
        include('../backend/create_a_user.php');
    break;	
    case "signup":
        include('../backend/signup.php');	
    break;	
    case "settings":
        include('../backend/settings.php');	
    break; 	
    case "reset":
        include('../backend/reset.php');	
    break;	
    case "redeem":
        include('../backend/redeem.php');
	break;
    case "profile":
        include('../backend/profile.php');
	break;
    case "logout":
        include('../backend/logout.php');	
    break;	
    case "login":
        include('../backend/login.php');	
    break; 	
    default:
        include('../backend/index.php');
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
<?php
switch($GLOBALS['url_loc'][1]){
    case "/":
        echo("<title>Welcome #postogon</title>");	
    break;
    case "createusername":
        echo("<title>Create Username #postogon</title>");	
    break;	
    case "signup":
        echo("<title>Sign Up #postogon</title>");		
        echo("<script src='https://www.google.com/recaptcha/api.js' async defer></script>");	
    break;
    case "logout":
        echo("<title>Logout #postogon</title>");		
    break;
    case "reset":
        echo("<title>Reset #postogon</title>");
		
        echo("<script src='https://www.google.com/recaptcha/api.js' async defer></script>");			
    break;	
    case "redeem":
        echo("<title>Redeem #postogon</title>");	
	break;
    case "profile":
echo("<title>@".$profile."'s Profile | #postogon</title>");
        echo("<script src='../scripts/moments.js' async defer></script>");			
	break;
    case "home":
        echo("<title>Home #postogon</title>");		
	break;		
    case "settings":
        echo("<title>Settings #postogon</title>");		
    break;
    case "login":	
        echo("<title>Login #postogon</title>");		
    break; 	
    default:
        echo("<title>#postogon</title>");
}
?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- ... -->
</head>
<body>
<?php
switch($GLOBALS['url_loc'][1]){
    case "/":
    break;
    case "signup":
        include('../frontend/signup.php');		
    break;
    case "logout":
        include('../frontend/logout.php');	
    break;
    case "reset":
        include('../frontend/reset.php');	
    break;	
    case "redeem":
        include('../frontend/redeem.php');		
	break;
    case "home":
        include('../frontend/home.php');	
    break;		
    case "createusername":
        include('../frontend/create_a_user.php');
    break;	
    case "profile":
        include('../frontend/profile.php');
	break;	
    case "settings":
        include('../frontend/settings.php');	
    break; 		
    case "login":
        include('../frontend/login.php');	
    break; 	
    default:
        include('../frontend/index.php');	
}
?>
</body>
</html>