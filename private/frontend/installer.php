<?
if(empty($php_error)){
$php="<span class='text-green-700'>$php_version - GOOD</span><br>"; 
}
else
{
	echo "<span class='text-green-700;'>$php_error</span><br>";
	$fatal_error=true;
}

if(empty($mysql_error)){
	$mysql="<span class='text-green-700'>$mysql_version - GOOD</span><br>"; 
}
else
{
	$mysql="<span class='text-green-700;'>$mysql_error</span><br>";
	$fatal_error=true;
}

if(empty($safe_mode_error)){
	$safemode="<span class='text-green-700'>GOOD</span><br>"; 
}
else
{
	$safemode="<span class='text-green-700;'>$safe_mode_error</span><br>";
	$fatal_error=true;
}

if(empty($mail_error)){
	$mail="<span class='text-green-700'>GOOD</span><br>"; 
}
else
{
	$mail="<span class='text-green-700;'>$mail_error</span><br>";
	$fatal_error=true;
}

if(empty($session_error)){
	$session="<span class='text-green-700'>GOOD</span><br>"; 
}
else
{
	$session="<span class='text-green-700;'>$session_error</span><br>";
	$fatal_error=true;
}
?>
<html>
<head>
<title>Installer - Postogon</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover, minimal-ui" id="viewportMeta" />
</head>
<body class="bg-gray-200" data-new-gr-c-s-check-loaded="14.998.0" data-gr-ext-installed="">
    <div class="bg-gray-800 text-white py-3 px-4 text-center fixed left-0 bottom-0 right-0 z-40">
        Website installation. If site is already setup... delete the installer folder.
		<br>
        <a class="underline text-gray-200" href="https://postogon.com/">Postogon 2021</a>
    </div>
    <div class="h-screen w-screen bg-gray-300">
	<?php if(!isset($continue)): ?>
	<table class="table-auto bg-white">
<thead>
<tr>
<th>Check</th>
<th>Status</th>
</tr>
</thead>


<tbody class="mx-auto text-center">
<tr>
<td>php version</td>
<td><?php echo $php;?></td>
</tr>
<tr>
<td>MySQL</td>
<td><?php echo $mysql;?></td>
</tr>
<tr>
<td>Mail</td>
<td><?php echo $mail;?></td>
</tr>
<tr>
<td>Safe Mode</td>
<td><?php echo $safemode;?></td>
</tr>
<tr>
<td>Session</td>
<td><?php echo $session;?></td>
</tr>

</tbody>
</table>
<?php if(empty($fatal_error)){echo("<form class='flex'  method='post' action=".$_SERVER['php_self']."><input name='continue' value='1' type='hidden'></input><button type='submit'  class='transition hover:opacity-25 hover:border-none focus:outline-none hover:border-gray-300 px-4 py-5 bg-white border border-b border-gray-600'>Continue</button></form>");
}?>
<?php endif; ?>


<?php if($continue == 1): ?>
<form method="post" action="<?php echo $_SERVER['php_self'];?>">
            <div class="container h-screen mx-auto flex justify-center items-center p-2 md:p-0">
                <div class="border border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
                    <div class="flex flex-col md:flex-row">
                        <div class="">
                            <select class="border p-2 rounded">
                                <option>Dropdown</option>
                                <option>Option</option>
                                <option>texas</option>
                            </select>
                        </div>
                        <div class="pt-6 md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>Option</option>
                                <option>Option</option>
                                <option>Option</option>
                            </select>
                        </div>
                        <div class="pt-6 md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>Option</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"></path>
                                </svg>
                                <input type="text" name="dbhost" placeholder="Database Host" class="bg-gray-300 max-w-full focus:outline-none text-gray-700">
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"></path>
                                </svg>
                                <input type="text" name="dbname" placeholder="Database Name" class="bg-gray-300 max-w-full focus:outline-none text-gray-700">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z"></path>
                                </svg>
                                <input type="text" name="dbuser" placeholder="Database User" class="bg-gray-300 max-w-full focus:outline-none text-gray-700">
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z"></path>
                                </svg>
                                <input type="text" name="dbpass" placeholder="Database Password" class="bg-gray-300 max-w-full focus:outline-none text-gray-700">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center"><form class='flex'  method='post' action=".$_SERVER['php_self']."><input name='continue' value='2' type='hidden'></input><button type="submit" class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Continue</button></form></div>
                </div>
            </div>
</form>
<?php endif;?>


<?php if($continue == 2): ?>
<?php
$servername = $_POST['dbhost'];
$username = $_POST['dbuser'];
$password = $_POST['dbpass'];
$name = $_POST['dbname'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$name", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db_error=false;
  echo "Connected successfully";
} catch(PDOException $e) {
  $db_error=true;
  echo "The host, username, password, or database are incorrect.
  Here is the MySQL error: " . $e->getMessage();	
}
?>

<?php if($db_error==false): ?>
<?php
if(!is_writable("./inc/db_connect.php"))
{
  echo "<p>Sorry, I can't write to <b>inc/db_connect.php</b>.
  You will have to edit the file yourself. Here is what you need to insert in that file:<br /><br />
  <textarea rows='5' cols='50' onclick='this.select();'>$connect_code</textarea></p>";
}
else
{
  $fp = fopen('../inc/db_connect.php', 'wb');
  fwrite($fp,$connect_code);
  fclose($fp);
  chmod('inc/db_connect.php', 0666);
}
?>
<?php endif;?>
<?php endif;?>

        </div>





</body>
</html>
