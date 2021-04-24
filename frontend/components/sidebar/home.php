
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
<hr class="mt-4 mb-4">
                  <li>
                     <a href="<?php if($GLOBALS['url_loc'][2]){ echo ".";} ?>./home" class="flex font-normal items-center px-3 hover:text-gray-400 duration-200 mb-4">Create a list</a>
                  </li>	
				  
               </ul>

	