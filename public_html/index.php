<?php
//include our backend config file
include("../../private/config.php");
//gzip compression
if(!ob_start("ob_gzhandler")) ob_start();

// php sessions store user information to be used across pages
//the function below starts the session.
session_start();

//lists which errors will show up
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//sets configuration option, 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">

    <!-- TailwindCSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['config']['url']; ?>/assets/css/style.css?v=1">
    <title>Master Dev - Postogon</title>
</head>
<body>
</body>
</html>
