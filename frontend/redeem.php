<style>
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
    transition: background-color 5000s ease-in-out 0s;
}
</style>

<div class="w-full container mx-auto px-6 pt-6">
		<div class="flex justify-between items-center">
			<a class="flex items-center text-purple-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl select-none"  href="./"> 
			<!-- Brand Icon-->
<svg class="h-8 fill-current text-purple-600 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 601 572">
<path d="M549.528 354.832C587.161 317.204 549.528 231.128 549.528 163.867C549.528 96.6061 525.301 139.644 473.555 87.9045C421.81 36.1652 428.395 77.7918 374.533 23.936C320.67 -29.9199 277.627 23.936 199.773 23.936C121.684 23.936 59.824 163.867 59.824 163.867C-93.5319 163.867 104.278 326.611 38.4201 392.461C-27.4383 458.311 108.277 462.309 183.544 537.566C258.81 612.823 342.309 537.566 438.98 537.566C535.886 537.566 417.576 427.267 549.293 427.267C681.48 427.502 511.894 392.461 549.528 354.832ZM426.043 357.184C359.715 357.184 419.222 412.686 370.534 412.686C321.846 412.686 279.744 450.55 241.875 412.686C204.007 374.822 135.561 372.706 168.725 339.546C201.89 306.385 102.397 224.308 179.545 224.308C179.545 224.308 210.593 153.755 250.108 153.755C289.387 153.755 311.026 126.709 338.075 153.755C365.124 180.8 361.831 159.869 387.94 185.974C414.048 212.079 426.278 190.442 426.278 224.308C426.278 258.174 445.33 301.447 426.278 320.496C406.991 339.546 492.372 357.184 426.043 357.184Z"/>
</svg>
			<!-- Text -->
				 POSTOGON
			</a>

<!-- Search bar / Hidden on mobile devices -->
			<div class="hidden md:block  ">		
<form class="border rounded flex" autocomplete="off" action="results.php" method="get">
    <input type="text" name="search_query" class="px-4 py-2 focus:ring-inset focus:ring-2 focus:outline-none select-none focus:ring-purple-400 focus:ring-opacity-80" placeholder="Search..."/>
	<!-- button with search icon -->
    <button type="submit" class="flex items-center focus:outline-none text-gray-400 hover:text-gray-900 justify-center px-4 border-l">
      <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"></path></svg>
    </button>
  </form>
			</div>
			
		</div>
</div>
<!-- BEGIN ELEMENTS -->
<main class="bg-white max-w-md mx-auto p-8 md:border-t-8 md:border-purple-700 md:p-12 md:my-10 rounded lg:shadow-2xl md:shadow-lg sm:shadow-sm">
        <section>
		<div class="pb-8">
            <h3 class="font-bold text-2xl text-center"><?php if($success == 0): ?><?php if(!$isTokenValid): ?>Redeem Your Token<?php endif; ?><?php if($isTokenValid): ?>Change Your Password<?php endif; ?><?php endif; ?><?php if($success == 1): ?>We're back baby.<?php endif; ?></h3>
<?php
/*Call our notification handling*/ include("../frontend/sitenotif.php");
?>

<?php if($tokenwarning == 1): ?>
			<div class="pt-8">	
           <div class="bg-yellow-200 border-l-4 border-yellow-300 text-yellow-800 p-4">
  <p class="font-bold">Bruh...</p>
  <p>You must fill in this field with a token found in your email upon reset.</p>
</div>
</div>
<?php endif; ?>

<?php if($success == 1): ?>
			<div class="pt-8">	
           <div class="bg-green-200 border-l-4 border-green-300 text-green-800 p-4">
  <p class="font-bold">Success!</p>
  <p>Successfully reset password.</p>
</div>
                <br>
                <hr>
			<section>
                <div class="flex flex-col max-w-lg mx-auto text-center mt-12">
				<p class="text-purple-600 mb-6 font-bold">Need some help?<a href="./contact" class="font-normal text-purple-500 pl-2 hover:text-purple-700 hover:underline underline-none ml-1">Contact Us</a></p>
                <a href="./login" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 focus:outline-none rounded shadow-md hover:shadow-xl transition duration-200">Go back</a>
                </div>
			</section>
</div>				
<?php endif; ?>
        </section>
		<?php if($success == 0): ?>		
        <section>
		<?php if(!$isTokenValid): ?>		
            <form class="flex flex-col" method="GET">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-400 text-small font-bold mb-2 ml-3" for="token">Token</label>
                    <input type="text" id="token" name="token" aria-describedby="accountToken"  value="<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES); ?>"
                           class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" />
                </div>      
                <button type="submit" class="border border-purple-600 bg-white hover:bg-gray-100 hover:border-purple-300 hover:text-purple-400 text-purple-500 font-bold py-2 focus:outline-none rounded shadow-sm hover:shadow-md transition duration-200">Redeem Token</button>
            </form>
			<br>
			<hr>			
			<section>
                <div class="flex flex-col max-w-lg mx-auto text-center mt-12">
				<p class="text-purple-600 mb-6 font-bold">Need some help?<a href="./contact" class="font-normal text-purple-500 pl-2 hover:text-purple-700 hover:underline underline-none ml-1">Contact Us</a></p>
                <a href="./login" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 focus:outline-none rounded shadow-md hover:shadow-xl transition duration-200">Go back</a>
                </div>
			</section>			
		<?php endif; ?>
		<?php if($isTokenValid): ?>
            <form class="flex flex-col" method="POST">		
		<div class="mb-6 pt-3 rounded bg-gray-200">
  <div class="relative w-full">
	<label class="block text-gray-400 focus:text-gray-500 text-small font-bold mb-2 ml-3" for="newpassword">New Password</label>
  <div class="absolute inset-y-0 right-0 flex items-center px-2">
      <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
      <label class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label" for="toggle">Show</label>
	</div>
		<input type="password" id="newpassword" autocomplete="off" name="newpassword" value="<?php echo htmlspecialchars($_POST['newpassword'], ENT_QUOTES); ?>" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 js-password px-3 pb-3"/>	
  </div>
		</div>
		<div class="mb-6 pt-3 rounded bg-gray-200">
	<label class="block text-gray-400 focus:text-gray-500 text-small font-bold mb-2 ml-3" for="newpasswordrepeat">Confirm Password</label>
		<input type="password" id="newpasswordrepeat" autocomplete="off" name="newpasswordrepeat" value="<?php echo htmlspecialchars($_POST['newpasswordrepeat'], ENT_QUOTES); ?>" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"/>	
		</div>	
                <button type="submit" value="Change Password" name="changepassword"class="border border-purple-600 bg-white hover:bg-gray-100 hover:border-purple-300 hover:text-purple-400 text-purple-500 font-bold py-2 focus:outline-none rounded shadow-sm hover:shadow-md transition duration-200">Change Password</button>
</form>
			<br>
			<hr>			
			<section>
                <div class="flex flex-col max-w-lg mx-auto text-center mt-12">
				<p class="text-purple-600 mb-6 font-bold">Need some help?<a href="./contact" class="font-normal text-purple-500 pl-2 hover:text-purple-700 hover:underline underline-none ml-1">Contact Us</a></p>
                <a href="./login" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 focus:outline-none rounded shadow-md hover:shadow-xl transition duration-200">Go back</a>
			</section>	
                </div>
			<?php endif; ?>		
        </section>
			<?php endif; ?>	
    </main>
<!-- Imprint -->
<div class="md:flex items-center text-center text-sm">
        <div class="py-3 text-gray-500 select-none text-center mx-auto border-b md:border-b-0">
?? 2021 Imperfect and Company
        </div>
        <div class="mx-auto mb-4 md:mb-0">
            <div class="w-48 text-gray-500 transition inline-block relative space-x-8 mb-4 mt-4 md:mt-0 md:mb-0">
		  <a href="https://imperfectandcompany.com/careers/" target="_blank" class="hover:text-gray-800">Jobs</a>
		  <a href="https://imperfectandcompany.com/terms-of-service/" target="_blank" class="hover:text-gray-800">Legal</a>
		  <a href="https://imperfectandcompany.com/privacy-policy/" target="_blank" class="hover:text-gray-800">Privacy</a>
            </div>
            <div>
            </div>
          </div>
      </div>
<?php password(); ?> 	  