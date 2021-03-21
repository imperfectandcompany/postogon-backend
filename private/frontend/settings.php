<?php
/*Call our notification handling*/ include("../frontend/sitenotif.php");
?>
<?php if(isset($success)): ?>
			<div class="pt-8">	
           <div class="bg-green-200 border-l-4 border-green-300 text-green-800 p-4">
  <p class="font-bold">Success!</p>
  <p>Your password has been changed.</p>
</div>
</div>
<?php endif; ?>
<?php
include('components/changepassword/changepassword.php');
include('components/logout/logout.php');
?>