<?php
   /*Call our notification handling*/ include("../frontend/sitenotif.php");
   ?>

   <div class="lg:flex">

	  			         <?php include('components/sidebar/sidebar.php') ?>	
	  
	  
      <div id="content-wrapper" class="min-w-0 w-full flex-auto sm:px-6 xl:px-8 top-10 pb-16 lg:static lg:max-h-full lg:overflow-visible">
	  <header id="header" class="z-10 hidden lg:block top-10 pb-10 lg:pt-10 lg:pb-14 font-medium text-base sm:px-3 xl:px-5 lg:text-sm pb-10 lg:pt-10 lg:pb-14 sticky?lg:h-(screen-18)">
					<div class="flex items-center justify-between mb-8">
					<!-- left -->
                  <div class="text-3xl tracking-tight font-extrabold text-gray-900">Latest Posts</div>
				  <!-- right -->
                  <div class="font-medium text-gray-900">View all posts</div>
				  </div>				
				</header>
         <div class="">
            <section>


               <div class="bg-white ">
			         <?php include('components/post/createpost.php') ?>	
					<?php include('components/post/post.php') ?>
			   </div>
            </section>
         </div>
      </div>
	  
	  
	  
   </div>
   