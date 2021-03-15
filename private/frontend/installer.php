<?


if(empty($php_error)){
echo "<span class='text-green-700'>$php_version - GOOD</span><br>"; 
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

<table class="table-fixed bg-green-200 w-full">

<thead>
<tr>
<th class="w-1/2">Check</th>
<th class="w-1/2">Status</th>
</tr>
</thead>

<tbody>
<tr>
<td class="w-1/2">1</td>
<td class="w-1/2">2</td>
</tr>
</tbody>
</table>


