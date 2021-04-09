<div class="bg-white  p-2">
   <div class="bg-white p-2 border-b shadow-sm md:px-4 md:py-4 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition border-6">
      <div class="flex flex-col">
         <form action="./home/<?php echo $user;?>" method="post">
            <div class="flex">
               <div>
                  <!-- BEGIN AVATAR MEDIUM -->
                  <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center m-1 mr-2 border-4 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
                     <div class="my-1">?</div>
                  </div>
                  <!-- END AVATAR MEDIUM -->
               </div>
               <textarea id="text" name="post" class="w-full text-lg h-6 transition p-2 bg-white resize-none focus:outline-none char-limiter" maxlength="280" placeholder="What's Poppin'." rows="3" spellcheck="true" x-on:keyup="count = $refs.countme.value.length" x-ref="countme" style="height:44px;overflow-y:hidden;"></textarea>
            </div>
            <div class="flex m-2 text-gray-500 icons ml-14">
               <div class="ml-auto text-xs font-semibold text-gray-400 count select-none">0 / 280</div>
            </div>
            <div class="flex flex-row-reverse">
               <button id="submitpost" class="p-1 px-4 font-semibold text-white transition bg-red-500 rounded-md select-none cursor-default focus:outline-none" disabled>Post</button>     
            </div>
         </form>
      </div>
   </div>
   <!-- post -->
   <div class="bg-white p-2 shadow-sm md:px-4 md:py-4 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition border-6" id="normalpost">
      <div class="flex">
         <!-- avatar -->
         <div class="relative">
            <div class="w-8 h-8 font-bold text-center transition text-white bg-gray-700 bg-center  mr-2 border-4 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
               <div>?</div>
            </div>
         </div>
         <div>
            <!-- username -->
            <p class="mr-1 font-bold cursor-pointer hover:underline">Username</p>
            <!-- date -->
            <div class="flex items-center mt-1 text-xs text-gray-600 select-none">
               <p>Day - Month - Year</p>
               <p class="ml-1 mr-1">•</p>
               <p>Time</p>
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
            Content of the post goes here
         </p>
      </div>
      <!-- activity status -->
      <div class="flex w-full m-1">
         <div class="flex justify-start w-full">
            <span class="absolute animate-ping rounded-full h-2 w-2 mt-1 bg-green-500"></span>
            <span class="absolute rounded-full h-2 w-2 mt-1 bg-green-500"></span>
         </div>
         <!-- bio -->			
         <div class="flex justify-end w-full">
            <p class="text-xs text-gray-400 transition hover:text-gray-500 mb-4 mr-5">Bio goes here</p>
         </div>
      </div>
      <!-- bottom bar -->
      <div class="flex w-full justify-start border-gray-100 border-opacity-50">
         <!-- left -->
         <div class="flex justify-start w-full ml-1">
            <span class="text-gray-400">
            1 like                    </span>
         </div>
         <!-- likes -->
         <div class="flex justify-end w-full mr-1 select-none">
            <span class="text-gray-400">
            1 like                    </span>
         </div>
      </div>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
<script>
   $('textarea').each(function () {
       this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
   }).on('input', function () {
       this.style.height = 'auto';
       this.style.height = (this.scrollHeight) + 'px';
   });
   $("#ready").hide();
   
   $('#text').on('input propertychange', function () {
       if ($(this).val() !== "") {
           $("#submitpost").removeClass("p-1 px-4 cursor-default font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200  focus:outline-none");
           $("#submitpost").addClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200  focus:outline-none");
   document.getElementById("submitpost").disabled = false;        
   }
       else {
           $("#submitpost").removeClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200 focus:outline-none");
           $("#submitpost").addClass("p-1 px-4 cursor-default font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200 focus:outline-none");
   document.getElementById("submitpost").disabled = true;        
   }
   });	
</script>