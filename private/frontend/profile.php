<h1><?php echo $username; ?>'s Profile</h1>
<form action="./profile?username=<?php echo $username; ?>" method="post">
<button>
<input type="submit" name="follow" value="Follow"/>
</button>
</form>