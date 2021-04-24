<?php if(!$noPermission): ?>
<?php foreach($dbposts as $p): ?>  
<?php
            //get the id of the user
            $username= htmlspecialchars(User::getUsername($p['user_id']));
			//get status of the poster		
			$status = htmlspecialchars(User::getUserStatus($username));
			//get comments of the post
			$comments = comment::fetch_Comments($p['id'], "DESC");			
?>
   <!-- post -->
		 <div x-cloak x-data="{isCollapsed: false, showButton: false, <?php if(!posts::countPostComments($p['id']) == ''){echo "hasComments: true"; } else { echo "hasComments: false"; } ?> }" @click.away="showButton = false, isCollapsed = false">   
   <div class="bg-white rounded post transition border-6 mb-2 shadow-sm md:px-4  md:py-4 <?php if($GLOBALS['url_loc'][1] === "home" || "timeline"){ echo ("p-2 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96  ");} if($GLOBALS['url_loc'][1] === "profile"){ echo ("mx-4");}?>" id="normalpost">
      <div class="flex">
         <!-- avatar -->
         <div class="relative mr-1">
            <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center mr-2 border-4 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
               <div class="my-1">?</div>
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
         		 <p class="ml-5 mr-5 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased" x-data="{ isCollapsed: false, maxLength: 140, originalContent: '', content: '' }" x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)">
    <span x-text="isCollapsed ? originalContent : content">
	<!-- prevent user from posting html -->
<?php echo htmlspecialchars($p['body']);?>
</span>
    <button class="text-blue-600 hover:text-blue-400 focus:text-blue-500 transition focus:outline-none" @click="isCollapsed = !isCollapsed" x-show="originalContent.length > maxLength" x-text="isCollapsed ? 'Show less' : 'Show more'" style="display: none;">Show more</button>
  </p>
		 </div>	  
      <!-- activity status -->
      <div class="flex w-full">
         <div class="flex justify-start mr-auto ml-1">
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
		             <span class="ml-1 text-gray-400 hover:text-gray-500 hover:underline hover:cursor-pointer transition">
			            <?php if(posts::countPostLikes($p['id']) == '1'){ echo "1 like"; } elseif(posts::countPostLikes($p['id']) == ''){ echo "";} else { echo posts::countPostLikes($p['id']); echo " likes"; } ?>
			</span>		
		             <span class="ml-2 text-gray-400 hover:text-gray-500 hover:underline hover:cursor-pointer transition">
			            <?php if(posts::countPostComments($p['id']) == '1'){ echo "1 comment"; } elseif(posts::countPostComments($p['id']) == ''){ echo "";} else { echo posts::countPostComments($p['id']); echo " comments"; } ?>
			</span>			
            <div class="transition animate-bounce focus:opacity-50 focus:text-blue-500 focus:outline-none ml-2 select-none"><?php if(posts::isPrivate($p['id'], $p['user_id'])):?>🔓<?php endif?></div>
			
         </div>
         <!-- likes -->
         <div class="flex justify-end w-full select-none">		 
					   <form method="POST" class="ml-1">
					   <input type="hidden" name="username" value="<?php echo $username;?>"> </input>					   
					   <input type="hidden" name="postid" value="<?php echo $p['id'];?>"> </input>
					   <?php if (posts::isLiked($p['id'])): ?>
                     <button type="submit" name="unlike" value="Unlike" class="justify-end p-1 px-4 font-semibold text-white transition bg-blue-500 rounded-md focus:outline-none">
                     Unlike
                     </button>
					   <?php elseif(!posts::isLiked($p['id'])): ?>
                     <button type="submit" name="like" value="Like" class="justify-end p-1 px-4 font-semibold text-white transition bg-blue-500 rounded-md focus:outline-none">
                     Like
                     </button>
					 <?php endif; ?>
					</form>
         </div>
      </div>
	  
		<!-- 
		X-data creates the "component", initializes the of "isCollapsed" with false and also sets name as an empty value.
		-->
		<!-- 
		@click is the event fired when clicked we toggled the value from true to false and vice versa. 
		:class basically says if the value of isCollapsed is true, add the class text-blue-500. 
		-->
<div class="flex justify-end">
<?php if(!posts::countPostComments($p['id']) == ''): ?>
		 <button class="font-semibold flex text-blue-400 focus:outline-none mt-10 mb-5 flex mr-auto"  @click="isCollapsed = !isCollapsed, showButton = false" :aria-expanded="isCollapsed ? 'true' : 'false'" :class="{'text-blue-500': isCollapsed}">
		<!-- 
		x-text allows us to inject the value we set either as a variable using x-model from something likeinput or based on a 
		-->		 
		 <p x-text="isCollapsed ? 'Hide comments' : 'View comments'">
		 </button>
<?php endif; ?>	
		 <button class="font-semibold text-blue-400 focus:outline-none mt-10 mb-5 flex " x-show="!isCollapsed" @click="showButton = !showButton" :aria-expanded="showButton ? 'true' : 'false'" :class="{'text-blue-500': showButton}">
		<!-- 
		x-text allows us to inject the value we set either as a variable using x-model from something likeinput or based on a 
		-->		 
		 <p x-text="showButton ? 'Comment' : 'Comment'">
		 </button>	
</div>			  
	  
	  
  <?php include('comments.php');?>	  
   </div>
</div>
   <!-- end post -->
<?php endforeach; ?>
<?php endif; ?>
