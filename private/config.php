<?php
//This is how we get what page we should be on based on URL.
$GLOBALS['url_loc'] = explode('/', htmlspecialchars(strtok($_SERVER['REQUEST_URI'], '?'), ENT_QUOTES));

$GLOBALS['config']['url_offset'] = 2; 

$GLOBALS['db_conf']['db_host'] = "127.0.0.1";
$GLOBALS['db_conf']['port'] = "3306";
$GLOBALS['db_conf']['db_db'] = "igfastdl_postogon";
$GLOBALS['db_conf']['db_user'] = "igfastdl";
$GLOBALS['db_conf']['db_pass'] = "UR5WnRgRgUcT9mh5";
$GLOBALS['db_conf']['db_charset'] = "utf8";

 
if($GLOBALS['config']['url_offset'] > 0){
    $x = 0; while($x < ($GLOBALS['config']['url_offset'])){ unset($GLOBALS['url_loc'][$x]); $x++; }
    $GLOBALS['url_loc'] = array_values($GLOBALS['url_loc']);
}

switch($GLOBALS['url_loc'][1]){
    case "/":
    break;
    case "signup":
        include('../backend/index.php');	
    break; 
    default:
        include('../backend/index.php');	
}

//Do not touch -- These are settings we should define or set, but not adjust unless we absolutely need to.
$GLOBALS['errors'] = array();

$GLOBALS['messages'] = array(); //Main array for all status messages
$GLOBALS['messages']['error'] = array(); //Main array for all status messages
$GLOBALS['messages']['warning'] = array(); //Main array for all status messages
$GLOBALS['messages']['success'] = array(); //Main array for all status messages

?>
