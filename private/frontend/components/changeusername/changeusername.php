<form action="" method="post">
<input type="username" name="oldpasswor" value="<?php echo htmlspecialchars($_POST['oldpassword'], ENT_QUOTES); ?>" placeholder="Current Password"/>
<input type="submit" name="changeusername" value="Change Username"/>
</form>