 <?php foreach($dbposts as $p): ?>  
<?php
            //get the id of the user
            $username= User::getUsername($p['user_id']);
			//get status of the poster		
			$status = User::getUserStatus($username);
?>
   <!-- post -->
   <div class="bg-white rounded post transition border-6  mb-2 shadow-sm md:px-4 md:py-4 <?php if($GLOBALS['url_loc'][1] === "home"){ echo ("p-2 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96  ");} if($GLOBALS['url_loc'][1] === "profile"){ echo ("mx-4");}?>" id="normalpost">
      <div class="flex">
         <!-- avatar -->
         <div class="relative">
            <div class="w-8 h-8 font-bold text-center transition text-white bg-gray-700 bg-center mr-2 border-4 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
               <div>?</div>
            </div>
         </div>
         <div>
            <!-- username -->
            <p class="mr-1 font-bold cursor-pointer hover:underline"><a href="<?php if($GLOBALS['url_loc'][2] === User::getUsername($p['user_id'])){ echo '../profile/'; echo User::getUsername($p['user_id']);} else{ echo './profile/'; echo User::getUsername($p['user_id']); }?>"><?php echo User::getUsername($p['user_id'])?></a></p>
            <!-- date -->
            <div class="flex items-center mt-1 text-xs text-gray-600 select-none">
               <p><?php echo zdateRelative($p['posted_on']);?></p>
            </div>
         </div>
         <!-- more options button -->
         <div class="flex flex-col flex-shrink-0 ml-auto leading-none text-center">
            <div class="relative">
               <svg class="h-4 leading-none text-gray-500 cursor-pointer fill-current title-font hover:text-gray-700" viewBox="0 0 60 60" xmlns="https://www.w3.org/2000/svg">
                  <path d="M8 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM52 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM30 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8z"></path>
               </svg>
            </div>
         </div>
      </div>
      <!-- post -->
      <div class="mt-4 mb-4">
         <p class="ml-5 mr-5 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased">
            <div class="posts">
			<!-- prevent user from posting html -->
<?php echo htmlspecialchars($p['body']);?>
</div>

         </p>
      </div>
      <!-- activity status -->
      <div class="flex w-full">
         <div class="flex justify-start mr-auto">
            <div class="absolute animate-ping rounded-full h-2 w-2 mt-1 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></div>
            <div class="absolute rounded-full h-2 w-2 mt-1 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></div>
         </div>
         <!-- bio -->			
         <div class="flex justify-end ml-auto ">
            <p class="text-xs text-gray-400 transition hover:text-gray-500 mb-4">Bio goes here</p>
         </div>
      </div>
      <!-- bottom bar -->
      <div class="flex w-full justify-start border-gray-100 border-opacity-50">
         <!-- left -->
         <div class="flex justify-start w-full ml-1">
		             <span class="text-gray-400">
			            <?php echo $p['likes']?>
			</span>
            <div class="transition animate-bounce  focus:opacity-50 focus:text-blue-500 focus:outline-none ml-2 select-none"><?php if($p['to_whom'] == 2):?>🔓<?php endif?></div>
			
         </div>
         <!-- likes -->
         <div class="flex justify-end w-full mr-1 select-none">
		 
					   <form method="POST">
					   <input type="hidden" name="username" value="<?php echo $username;?>"> </input>					   
					   <input type="hidden" name="postid" value="<?php echo $p['id'];?>"> </input>
					   <?php if (posts::isLiked($p['id'])): ?>
                     <button type="submit" name="unlike" value="Unlike" class="text-blue-700 mr-1  font-bold focus:outline-none">
                     Unlike
                     </button>
					   <?php elseif(!posts::isLiked($p['id'])): ?>
                     <button type="submit" name="like" value="Like" class="text-blue-700 mr-1  font-bold focus:outline-none">
                     Like
                     </button>
					 <?php endif; ?>
					</form>
         </div>
      </div>
   </div>
   <!-- end post -->
<?php endforeach; ?>   
   