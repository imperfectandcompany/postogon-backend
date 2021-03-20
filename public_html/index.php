<?php
include("../config.php");

switch($GLOBALS['url_loc'][1]){
    case "/":
    break;
    case "signup":
        include('../backend/index.php');	
    break; 
    default:
        include('../backend/index.php');	
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
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
        include('../frontend/index.php');	
    break; 
    default:
        include('../frontend/index.php');	
}
?>
</body>
</html>