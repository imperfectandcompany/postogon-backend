<div class="bg-white">
            <div class="flex space-between  px-6 py-4 shadow-sm">
			<div class="flex mr-auto">
               <a href="../"><img class="h-8 w-8" style="filter:brightness(0.1)" src="assets/logo.svg" alt="postogon logo"></a>
			   </div>
			   <a href="./"><h1 class="flex px-6 text-xl font-semibold cursor-pointer">Postogon</h1></a>
            </div>
         </div>

      <div class="relative max-w-md hidden float-right md:pt-8 pl-18 lg:block md:pr-36">
<div class="font-sans text-black ">
  <form class="border rounded flex" action="results.php" method="get">
    <input type="text" name="search_query" class="px-4 py-2 focus:ring-inset focus:ring-2 focus:outline-none select-none focus:ring-yellow-500 focus:ring-opacity-100" placeholder="Search...">
    <button type="submit" class="flex items-center focus:outline-none text-gray-400 hover:text-gray-900 justify-center px-4 border-l">
      <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"></path></svg>
    </button>
  </form>
</div>    
</div>



<div class=" md:block body-bg min-h-screen pt-12 md:pt-20 pb-6 ox-2 md:px-0" style="font-family:'Lato', sans-serif;">

    <header class="max-w-lg mx-auto">
        <div class="text-6xl">
            <h1 class="font-semibold text-yellow-500 text-center">Hiiiii</h1>
        </div>
		
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg lg:shadow-2xl md:shadow-lg sm:shadow-sm">
        <section>
		<div class="pb-8">
            <h3 class="font-bold text-2xl text-center">Sign up for Postogon</h3>
<?php
/*Call our notification handling*/ include("../frontend/sitenotif.php");
?>
<?php if(isset($success)): ?>
			<div class="pt-8">	
           <div class="bg-green-200 border-l-4 border-green-300 text-green-800 p-4">
  <p class="font-bold">Success!</p>
  <p>Successfully logged in.</p>
</div>
</div>
<?php endif; ?>
</div>
        </section>
        <section class="">
            <form class="flex flex-col" method="POST" action="">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-small font-bold mb-2 ml-3" for="emailoruser">Email / Username</label>
                    <input type="text" id="emailoruser" name="login_emailoruser" value="<?php echo htmlspecialchars($_POST['login_emailoruser'], ENT_QUOTES); ?>"
                           class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 vorder-gray-300 focus:border-yellow-600 transition duration-500 px-3 pb-3" />
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
				
                    <label class="block text-gray-700 text-small font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" id="password" name="login_password" 
                           class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 vorder-gray-300 focus:border-yellow-600 transition duration-500 px-3 pb-3" />
                </div>

                <div class="flex justify-end">
                    <a href="" class="text-sm text-yellow-600 hover:text-yellow-700 hover:underline mb-6">Forgot Password?</a>
                </div>
                <input type="hidden" name="form_type" value="user_login" />				
                <button name="login" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 focus:outline-none rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
            </form>
                <br />
                <hr />
                <div class="flex flex-col max-w-lg mx-auto text-center mt-12">
                    <p class="text-yellow-600 mb-6">Need some help?<a href="./support" class="font-bold hover:underline"> Support here</a></p>
                <a href="./signup" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 focus:outline-none rounded shadow-lg hover:shadow-xl transition duration-200">Create An Account</a>
                </div>			
		
        </section>
    </main>

    <footer class="max-w-lg mx-auto flex justify-center text-yellow-600">
        <a href="" class="hover:underline">Contact</a>
        <span class="mx-3">&#8226</span>
        <a href="" class="hover:underline">Privacy</a>
        <span class="mx-3">&#8226</span>
        <a href="" class="hover:underline">Legal</a>
        <span class="mx-3">&#8226</span>
        <a href="" class="hover:underline">Careers</a>
    </footer>

</div>