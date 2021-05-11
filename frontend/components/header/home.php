			<div class="bg-white dark:bg-dark dark:border-dark dark:text-light flex shadow-xl border-b border-gray-200 justify-end flex-shrink-0 px-6  md:px-4 lg:px-6 py-4">
			<div class="flex mr-auto">
               <a href="."><img class="h-8 w-8" style="" src="<?php if($GLOBALS['url_loc'][2]){ echo ".";} ?>./assets/logo.svg" alt="postogon logo"></a>
			   <a href="."><h1 class="px-6 text-xl font-semibold cursor-pointer">Home</h1></a>
			   </div>
			   <div class="flex ">
               <button @click="open = !open" :aria-expanded="open ? 'true' : 'false'" :class="{'font-semibold': open, 'active': open}" class="p-1 px-2 text-white transition duration-200 bg-red-500 rounded-md cursor-pointer focus:outline-none" aria-expanded="false">
                  Feed
                  <svg :class="{ 'rotate-180': open }" class="inline-block w-4 h-4 ml-1 transition-transform transform rotate-180" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                     <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
               </button>

			   </div>
            </div>            
          
			


<div x-show="open" x-cloak @click.away="open = false" :class="{'invisible': closed}" x-transition:enter="transition ease-in duration-100" x-transition:enter-start="opacity-0 transform translate-y-0" x-transition:enter-end="opacity-100 transform -translate-y-3" x-transition:leave="transition ease-in-out duration-100" x-transition:leave-end="opacity-0 transform -translate-y-3" class="bg-white flex justify-center mx-auto shadow-sm">   
               <ul>
                  <li>
                     <form method="get" class="flex items-center <?php if($result != "global"){echo "px-3";}?> hover:text-gray-400 duration-200 mb-4">
                        <button type="submit" name="view" value="global" class="focus:outline-none <?php if($result == "global"){ echo "font-bold";} ?>">Global</button>
                     </form>
                  </li>
                  <li>
                     <form method="get" class="flex items-center <?php if($result != "all"){echo "px-3";}?> hover:text-gray-400 duration-200 mb-4">
                        <button type="submit" name="view" value="all" class="focus:outline-none <?php if($result == "all"){ echo "font-bold";} ?>">All</button>
                     </form>
                  </li>				  
                  <li>
                     <form method="get" class="flex items-center <?php if($result != "feed1"){echo "px-3";}?>  hover:text-gray-400 duration-200 mb-4">
                        <button type="submit" name="view" value="feed1" class="focus:outline-none <?php if($result == "feed1"){ echo "font-bold";} ?>">Feed One</button>
                     </form>
                  </li>
                  <li>
                     <form method="get" class="flex items-center <?php if($result != "feed2"){echo "px-3";}?>  hover:text-gray-400 duration-200 mb-4">
                        <button type="submit" name="view" value="feed2" class="focus:outline-none <?php if($result == "feed2"){ echo "font-bold";} ?>">Feed Two</button>
                     </form>
                  </li>
               </ul>
<hr class="mt-4 mb-4">		
	  </div>