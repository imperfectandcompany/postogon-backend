<style>
    .backdrop {
      backdrop-filter: blur(5px);
	  -webkit-backdrop-filter: blur(5px);
    }</style>
	
<div class="mx-auto bg-no-repeat bg-cover bg-center relative w-full" style="background-image:url('https://images.unsplash.com/photo-1517639191054-4d31c81e0cc0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80'); height: 25vh; max-height:460px;">

<?php
   /*Call our notification handling*/ include("../frontend/sitenotif.php");
   ?>

<div class="flex sm:hidden md:block flex-shrink">
					<div class="absolute flex-initial justify-start inset-x-0 bottom-16">
                    <button class="border bg-gray-400 transition text-white px-6 py-2 text-sm focus:outline-none"><div class="backdrop">Back</div></button>
                    <button class="border backdrop text-white px-8 py-2 text-sm focus:outline-none">Edit Profile</button>
					</div>
	
<div class="flex justify-center md:justify-end flex-shrink text-white backdrop border-t absolute bottom-0 inset-x-0 p-2">		
					<div class="flex flex-row">
					<!-- join date-->
                        <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M15 12h5a2 2 0 0 1 0 4h-15l-3 -6h3l2 2h3l-2 -7h3z" transform="rotate(-15 12 12) translate(0 -1)"></path>
                                    <line x1="3" y1="21" x2="21" y2="21"></line>
                                </svg>
<p>Landed 1 Apr 2021</p>
</div>
<!-- divider -->
						<div class="mx-4">•</div>
<!-- activity status -->
<div class="flex flex-row">
			<span class="absolute animate-ping rounded-full h-2 w-2 mt-2 bg-green-500"></span>
			<span class="absolute rounded-full h-2 w-2 mt-2 bg-green-500"></span>
			</div>
			<div class="flex flex-row-reverse">
               <p class="ml-4">Online</p>
            </div>	
		</div>			
</div>       
</div>
	</div>
	
	<!-- sub menu -->
	<div class="mx-auto flex items-center bg-gray-100 w-full">

					<div class="flex justify-start w-1/2 text-sm">
						<ul class=" flex justify-between flex-1 md:flex-none items-center uppercase   items-baseline">
							<li class="mr-2">
								<a class="inline-block py-3 px-2 border-blue-600 border-b text-gray-800 no-underline font-medium leading-5 text-base cursor-default" href="post.html">Overview</a>
							</li>
							<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="#">About</a>
							</li>
							<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="#">Likes</a>
							</li>
							<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="#">Settings</a>
							</li>
						</ul>
					</div>


					<div class="flex w-1/2 justify-end">
						<a class="inline-block text-gray-500 px-2  no-underline hover:text-white hover:text-underline text-center  md:h-auto md:p-4" data-tippy-content="social1" href="">
							<svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
								<path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>
							</svg>
						</a>
						<a class="inline-block text-gray-500 px-2  no-underline hover:text-white hover:text-underline text-center  mr-1 md:h-auto md:p-4" data-tippy-content="social2" href="">
							<svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>							
						</a>
					</div>
				</div>
				
















<div class="">
			<div class="w-full">

				<!--Lead Card-->
		<!-- profile picture, profile name, username, follow button, full name, bio, link -->
         <div class="flex w-full p-6 bg-white">
               <!-- Avatar -->
			   <div class="flex w-5/6 justify-start">
					<div class="flex">
					<div class="flex flex-row">
					  <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center border-4 border-gray-500 rounded-full cursor-pointer select-none hover:bg-gray-400">
						 <div class="my-1">?</div>
					  </div>
					  </div>
				  </div>
               <!-- Profile Name -->
			   <div class="flex ml-3">
				<div class="flex flex-col">
                  <div class="flex flex-row items-baseline">
                     <h1 class="text-xl font-bold flex"><?php echo $profile; ?></h1>
                     <h2 class="ml-1 text-xs text-gray-400 transition hover:text-gray-500">@<?php echo $profile; ?> <?php if($verified){echo 'verified'; } ?></h2>
                  </div>
                  <!-- Username -->
				  <div class="flex flex-col">
                  <div class="text-gray-600 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased mt-3">
                     <p class="text-xs text-gray-800 font-semibold transition hover:text-gray-700">Daiyaan Ijaz</p>
                     <p class="text-xs text-gray-500 transition hover:text-gray-600">Live life now, we can only learn from mistakes</p>
                     <a href="" class="text-xs text-blue-400 transition hover:text-blue-500">https://www.linkedin.com/in/daiyaanijaz/</a>
		
                  </div>
				  </div>
				  </div>
				</div>
				</div>
               <!-- Follow -->
					<div class="flex w-1/6 justify-end ">
				<div class="flex flex-col items-baseline">					
					<div class="flex flex-row">
					<?php if(User::isLoggedIn()): ?>
					<?php if(!$usersprofile): ?>					
                  <form action="../profile/<?php echo $profile;?>" method="post">
				  <?php if($isFollowing): ?>
                     <button type="submit" name="unfollow" value="Unfollow" class="text-blue-700 font-bold focus:outline-none">
                     Unfollow
                     </button>
					 <?php endif; ?>
				  <?php if(!$isFollowing): ?>
                     <button type="submit" name="follow" value="Follow" class="text-blue-700 font-bold focus:outline-none">
                     Follow
                     </button>
					 <?php endif; ?>					 
                  </form>
				  <?php endif; ?>							  
				  <?php endif; ?>				  
				<?php if(!User::isLoggedIn()): ?>
                    <a href="../login" class="text-blue-700 font-bold focus:outline-none">Follow</a>			
				  <?php endif; ?>
				  </div>
				  </div>

					  
				  </div>	  
         </div>

<!-- menu -->	  
<div class="border-b border-gray-100">
         <nav class="flex justify-center">
            <a href="#" class="px-3 py-1 text-base font-medium leading-5 border-b-2 border-blue-500 focus:outline-none cursor-default">Overview</a>
            <a href="#" class="px-3 py-2 text-base border-b-2 border-white hover:border hover:border-b hover:border-gray-300 font-normal leading-5 text-gray-500 focus:outline-none transition duration-150 ease-in-out">Media</a>
            <a href="#" class="px-3 py-2 text-base border-b-2 border-white hover:border hover:border-b hover:border-gray-300 font-normal leading-5 text-gray-500 focus:outline-none transition duration-150 ease-in-out">Feed 1</a>		
            <a href="#" class="px-3 py-2 text-base border-b-2 border-white hover:border hover:border-b hover:border-gray-300 font-normal leading-5 text-gray-500 focus:outline-none transition duration-150 ease-in-out">Feed 2</a>
         </nav>
      </div>
		</div>
	</div>
	
	
	<!-- dev mode -->
			<?php if($GLOBALS['devmode'] === 1): ?>	
<?php if(User::isAdmin($userid)): ?>			
<div class="md:px-32 py-8 w-full">
  <div class="shadow overflow-hidden md:rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">id</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Username</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">verified</td>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">usersprofile</td>		  
        </tr>
      </thead>
    <tbody class="text-gray-700">
      <tr>
        <td class="w-1/3 text-left py-3 px-4"><?php echo $user_id; ?></td>
		<td class="w-1/3 text-left py-3 px-4"><?php echo $profile; ?></td>
		<td class="w-1/3 text-left py-3 px-4"><?php echo User::getUserEmail($profile); ?></td>			
		<td class="w-1/3 text-left py-3 px-4"><?php if($verified==true){echo"Yes";}else{echo"No";} ?></td>
		<td class="w-1/3 text-left py-3 px-4"><?php if($usersprofile==true){echo"Yes";}else{echo"No";} ?></td>			
      </tr>
    </tbody>
    </table>
  </div>
</div>
           <?php endif;?>
           <?php endif;?>

		 










