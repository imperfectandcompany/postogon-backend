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
		 <div x-data="{isCollapsed: false, active: false, showButton: false, <?php if(!posts::countPostComments($p['id']) == ''){echo "hasComments: true"; } else { echo "hasComments: false"; } ?>, value: ''}" @click.away="showButton = false, isCollapsed = false, active = false">   
   <div class="bg-white dark:bg-darker dark:text-light rounded post transition border-6 mb-2 shadow-sm md:px-4  md:py-4 <?php if($GLOBALS['url_loc'][1] === "home" || "timeline"){ echo ("p-2 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96  ");} if($GLOBALS['url_loc'][1] === "profile"){ echo ("mx-4");}?>" id="normalpost">
   <!-- header --> 
  
      <div class="flex">
<a class="cursor-pointer" href="<?php if($GLOBALS['url_loc'][2] === User::getUsername($p['user_id'])){ echo '../profile/'; echo User::getUsername($p['user_id']);} else{ echo './profile/'; echo User::getUsername($p['user_id']); }?>"> 	  
         <!-- avatar -->
         <div class="relative mr-1">
            <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center mr-2 border-4 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
               <div class="my-1">?</div>
            <span class="flex transition -my-4 mx-5 animate-bounce focus:opacity-50 focus:outline-none select-none"><?php if(posts::isPrivate($p['id'], $p['user_id'])):?>🔓<?php endif?></span>			   
            </div>
         </div>
         <div>
            <!-- username -->
            <span class="mr-1 font-bold cursor-pointer hover:underline"><?php echo User::getUsername($p['user_id'])?></span>
			
      <!-- activity status -->
            <span class="absolute animate-ping rounded-full h-2 w-2 mt-1 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></span>
            <span class="absolute rounded-full h-2 w-2 mt-1 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></span>
            <!-- tagline -->	
            <div class="flex flex-row items-center text-xs text-gray-400 select-none">
               <div class="">tagline</div>
            </div>
</a>			
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
<div class="my-4">
         		 <p class="text-sm antialiased break-words sm:subpixel-antialiased md:antialiased" x-data="{ isCollapsed: false, maxLength: 140, originalContent: '', content: '' }" x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)">
    <span class="whitespace-pre-line" x-text="isCollapsed ? originalContent : content"><!-- prevent user from posting html --><?php echo nl2br(htmlspecialchars($p['body']));?></span>
    <button class="text-blue-600 hover:text-blue-400 focus:text-blue-500 transition focus:outline-none" @click="isCollapsed = !isCollapsed" x-show="originalContent.length > maxLength" x-text="isCollapsed ? 'Show less' : 'Show more'" style="display: none;">Show more</button>
  </p>
		 </div>	  

      <div class="flex w-full items-center">
        <div class="flex justify-start mr-auto space-x-1 items-center">
                  <!-- date -->
            <span class="flex flex-row text-xs text-gray-400 select-none">
            <?php echo zdateRelative($p['posted_on']);?>
            </span>	
		</div>
         <!-- bio -->			
         <div class="flex justify-end ml-auto items-center">
            <p class="text-xs text-gray-400 transition hover:text-gray-500">Bio goes here</p>
         </div>
      </div> 
		<!-- 
		X-data creates the "component", initializes the of "isCollapsed" with false and also sets name as an empty value.
		-->
		<!-- 
		@click is the event fired when clicked we toggled the value from true to false and vice versa. 
		:class basically says if the value of isCollapsed is true, add the class text-blue-500. 
		-->
<div class="flex mt-5">
         <div class="flex justify-start mr-auto <?php if(posts::countPostLikes($p['id'])){ echo "space-x-1"; } ?> items-center">
		             <span class="flex text-xs text-gray-400 hover:text-blue-400 hover:underline hover:cursor-pointer transition">
			            <?php if(posts::countPostLikes($p['id']) == '1'){ echo "1 like"; } elseif(posts::countPostLikes($p['id']) == ''){ echo "";} else { echo posts::countPostLikes($p['id']); echo " likes"; } ?>
						</span>		
<?php if(!posts::countPostComments($p['id']) == ''): ?>
		 <button class="flex text-xs text-gray-400 hover:text-blue-400 hover:underline hover:cursor-pointer transition focus:outline-none" x-on:click="if (!showButton) $nextTick(()=>{$refs.input.focus()});" @click="isCollapsed = !isCollapsed, showButton = false, active = false" :aria-expanded="isCollapsed ? 'true' : 'false'" :class="{'text-gray-500': isCollapsed}">
			            <?php if(posts::countPostComments($p['id']) == '1'){ echo "1 comment"; } elseif(posts::countPostComments($p['id']) == ''){ echo "";} else { echo posts::countPostComments($p['id']); echo " comments"; } ?>
		 </button>
<?php endif; ?>	
         </div>
         <!-- bio -->			
         <div class="flex justify-end ml-auto space-x-1 items-center">
		 <button class="font-semibold text-blue-400 ml-auto focus:outline-none flex " x-show="!isCollapsed" x-on:click="if (!showButton) $nextTick(()=>{$refs.input.focus()});" @click="showButton = !showButton, $dispatch" :aria-expanded="showButton ? 'true' : 'false'" :class="{'text-blue-500': showButton}">
<div :class="{ 'hover:text-blue-400': active, 'hover:bg-blue-200': active, 'focus:text-gray-400': active, 'text-blue-400': active, 'border-blue-200': active}" @click="active = !active" class="transition border duration-500 focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-400 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">                           
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
</svg>
</div>
		 </button>
         <!-- likes -->
	   <form method="POST" class="">
	   <input type="hidden" name="username" value="<?php echo $username;?>"> </input>					   
	   <input type="hidden" name="postid" value="<?php echo $p['id'];?>"> </input>		 
		<?php if (posts::isLiked($p['id'])): ?>		 
		<button type="submit" name="unlike" value="Unlike" class="font-semibold text-blue-500 focus:outline-none flex">
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click="active = !active" class="transition border focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">                           
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" stroke="none">
		  <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
		</svg>	
		</div>		
		</button>
		
		<?php elseif(!posts::isLiked($p['id'])): ?>		 
		<button type="submit" name="like" value="Like" class="font-semibold text-blue-400 focus:outline-none flex">
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click="active = !active" class="transition border focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">                           
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
		</svg>
		</div>		
		</button>		 
		<?php endif; ?>
		</form>
         </div>
      </div>	


	  
	  
  <?php include('comments.php');?>	  
   </div>
</div>
   <!-- end post -->
<?php endforeach; ?>
<?php endif; ?>
