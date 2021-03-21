<?php
/*Call our notification handling*/ include("../frontend/sitenotif.php");
?>
<?php if($isTokenValid): ?>

<?php if(isset($success)): ?>
			<div class="pt-8">	
           <div class="bg-green-200 border-l-4 border-green-300 text-green-800 p-4">
  <p class="font-bold">Success!</p>
  <p>Successfully reset password.</p>
</div>
</div>
<?php endif; ?>
</div>

<form action="" method="post">
<input type="password" name="newpassword" value="<?php echo htmlspecialchars($_POST['newpassword'], ENT_QUOTES); ?>" placeholder="New Password"/>
<input type="password" name="newpasswordrepeat" value="" placeholder="Repeat Password"/>
<input type="submit" name="changepassword" value="Change Password"/>
</form>
<?php endif; ?>