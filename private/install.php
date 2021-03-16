<?
$GLOBALS['config']['url'] = 'https://www.postogon.com/devmaster';
$php_version=phpversion();

//checks to see if php version is good
if($php_version<7)
{
	$error=true;
	$php_error="Your current PHP version is $php_version which is too old.";
}

//declare function to grab current SQL version
function find_SQL_Version()
{
	$output = shell_exec('mysql -V');
	preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version);
	return @$version[0]?$version[0]:-1;
}

//stores current sql version to variable
$mysql_version=find_SQL_Version();

//checks to see if MYSQL version is good, used for storing data
if($mysql_version<5)
{
  if($mysql_version==-1){
  $mysql_error="MySQL version will be checked at the next step.";
  }
  else{
	$mysql_error="MySQL version is $mysql_version. Version 5 or newer is required.";
	$fatal_error=true; 
 }
}

//checks to see if mailing host is enabled, used to user registrations
if(!function_exists('mail'))
{
	$mail_error="PHP Mail function is not enabled.";
}


//annoyance
if(ini_get("safe_mode") )
{
  $error=true;
  $safe_mode_error="Turn off PHP Safe Mode";
}

//create a session and store it to see if it works
$_SESSION['does_this_work']=1;
if(empty($_SESSION['does_this_work']))
{
	$error=true;
	$session_error="Sessions must be enabled.";
}

$continue = $_POST['continue'];

// try to create the config file and let the user continue
$connect_code="<?php
define('DBSERVER','".$_POST['dbhost']."');
define('DBNAME','".$_POST['dbname']."');
define('DBUSER','".$_POST['dbuser']."');
define('DBPASS','".$_POST['dbpass']."');
?>";

include_once('frontend/installer.php');

?>
<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['config']['url']; ?>/assets/css/style.css?v=1">

