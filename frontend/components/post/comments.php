		 <div class="antialiased mx-auto overscroll-contain">
  <div class="mt-4">
<!-- if there are no comments, they are removed from the DOM -->
<template x-if="hasComments">
<?php foreach($comments as $comment): ?> 
		<!-- 
		x-show will set the dom node to display:none. if needed to be removed completely, we can use x-if. 
		-->			
		 <div x-show="isCollapsed" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">  
    <div class="flex ">
            <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center mr-2 border-4 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
               <div class="my-1">?</div>
            </div>
      <div class="leading-relaxed">
	  <div class="flex-initial">
        <strong>
            <a class="font-bold cursor-pointer hover:underline" href="<?php if($GLOBALS['url_loc'][2] === User::getUsername($comment['user_id'])){ echo '../profile/'; echo User::getUsername($p['user_id']);} else{ echo './profile/'; echo User::getUsername($comment['user_id']); }?>"><?php echo User::getUsername($comment['user_id'])?></a>
		</strong>
		</div>
        <p class="text-sm">
          <?php echo htmlspecialchars($comment['comment']); ?>
        </p>
		<div class="space-x-2 flex text-xs text-gray-400 ">
         <span><?php echo zdateRelative($comment['posted_on']);?></span><span>15 likes</span><span>Reply</span></div>
		 
		 
		 <div x-cloak x-data="{showReplies: false, notFinished: true}" @click.away="showReplies = false">   		 
				 <button class="my-5 font-semibold text-blue-400 focus:outline-none"  @click="showReplies = !showReplies" :aria-expanded="showReplies ? 'true' : 'false'" :class="{'text-blue-500': showReplies}">	 
		 <p class="uppercase text-gray-400 font-bold text-xs" x-text="showReplies ? 'CURRENTLY IN DEVELOPMENT' : 'View replies'">
		 </button>	
		 		 <div x-show="showReplies & !notFinished" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
				 <!-- replies -->
          <div class="flex">
      <div class="flex-shrink-0 ">
            <div class="w-6 h-6 mr-2 sm:w-8 sm:h-8 text-center transition text-white bg-gray-700 bg-center border-2 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
            </div>
      </div>
            <div class="flex-1 leading-relaxed">
        <strong>username</strong>
        <p class="text-sm">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
          sed diam nonumy eirmod tempor invidunt ut labore et dolore
          magna aliquyam erat, sed diam voluptua.
        </p>
		<div class="space-x-2 flex text-xs text-gray-400 ">
         <span>2h</span><span>15 likes</span><span>Reply</span></div>
            </div>
          </div>
				 </div> 
</div>

				 
      </div>
    </div>
	</div>
<?php endforeach; ?>				 
</template>
<template x-if="showButton || isCollapsed">
	<!-- Create comment component -->
				<form method="post" x-cloak class="flex flex-col" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">				   
			   <input type="hidden" name="postid" value="<?php echo $p['id'];?>"></input>			
			   <div class="border dark:border-dark rounded-lg flex relative w-full">
				<textarea x-ref="input" x-model="value" id="ctext" name="commentBody" class="animate-pulse dark:bg-darker text-lg transition p-2 bg-white w-11/12 mr-4 resize-none focus:outline-none char-limiter" maxlength="180" placeholder="Add a comment..." rows="3" spellcheck="false" style="height:44px;overflow-y:hidden;"></textarea>
				<div class="absolute bottom-0 right-0"><button type="submit" id="submitcomment" name="comment" value="Comment" class="select-none p-2  font-semibold text-gray-200 dark:text-dark focus:outline-none" :class='{"text-gray-800 dark:text-light cursor-pointer": value.length > 0, "cursor-not-allowed" :  value.length < 1}' :disabled="value.length < 1">Post</button></div></div>
				</form>
    <script>
      $(document).find('textarea').each(function () {
        var offset = this.offsetHeight - this.clientHeight;
        $(this).on('keyup input focus', function () {
          $(this).css('height', '40px').css('height', this.scrollHeight + offset);
        });
        $(this).on('blur', function () {
        $(this).animate({"height":"40px",}, "fast");
        });			
      });
    </script>				
				
				</template>
  </div>
</div>