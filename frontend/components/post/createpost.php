      <div class="rounded p-2 mb-2 shadow-sm md:px-4 md:py-4 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition border-6">
        <form method="post">
            <div x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
               <div class="flex">
                  <div>
                     <!-- BEGIN AVATAR MEDIUM -->
                     <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center mr-2 border-4 border-gray-500 rounded-full cursor-pointer select-none hover:opacity-80">
                        <div class="my-1">?</div>
                     </div>
                     <!-- END AVATAR MEDIUM -->
                  </div>
<textarea id="text" name="postbody" class="animate-pulse w-full text-lg h-6 transition p-2 bg-white dark:bg-dark resize-none focus:outline-none char-limiter" maxlength="180" placeholder="What's Poppin'." rows="3" spellcheck="false" x-on:keyup="count = $refs.countme.value.length" x-ref="countme" style="height:44px;overflow-y:hidden;"></textarea>


               </div>
			   
               <div class="flex text-gray-500 ">
                  <div class="ml-auto text-xs font-semibold text-gray-400 count"><span x-html="count">0</span> / <span x-html="$refs.countme.maxLength">180</span></div>	
            </div>
<template x-if="count > 0">
<div><script>      $(document).find('textarea').each(function () {
        var offset = this.offsetHeight - this.clientHeight;
        $(this).on('keyup input focus', function () {
          $(this).css('height', '40px').css('height', this.scrollHeight + offset);
        });
        $(this).on('blur', function () {
          $(this).animate({"height":"40px",}, "fast");
        });			
      });</script></div>
</template>
			
			  <div class="flex ">
<fieldset x-init="init()" x-data="window.RadioFields()">
  <legend class="sr-only">
    Privacy setting
  </legend>
  <div class="flex" >

<div class="relative flex p-1 border"  :class="{ 'bg-indigo-100 border-indigo-200' : value == '1', 'border-gray-200' : value != '1' }">
      <div class="flex items-baseline h-5 ">
        <input id="settings-option-0" x-ref="radio" value="1" x-model="value" name="privacy_setting" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 cursor-pointer border-gray-300" checked>
      </div>
      <label for="settings-option-0" class="ml-3 flex items-baseline flex-col cursor-pointer">
        <span class="block text-xs font-medium items-baseline" :class="{ 'text-indigo-900' : value == '1', 'text-gray-800' : value !== '1' }">
          Public feed
        </span>
        <span class="block text-xs" :class="{ 'text-indigo-700' : value == '1', 'text-gray-600' : value !== '1' }">
        Everyone
        </span>
      </label>
    </div>

<div class="relative flex p-1 border" :class="{ 'bg-indigo-100 border-indigo-200' : value == '2', 'border-gray-200' : value != '2' }">
      <div class="flex items-baseline h-5 ">
        <input id="settings-option-1" name="privacy_setting" value="2" x-model="value" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 cursor-pointer border-gray-300">
      </div>
      <label for="settings-option-1" class="ml-3 flex flex-col cursor-pointer">
        <span class="block text-xs font-medium items-baseline" :class="{ 'text-indigo-900' : value == '2', 'text-gray-800' : value !== '2' }">
          Private feed
        </span>
        <span class="block text-xs" :class="{ 'text-indigo-700' : value == '2', 'text-gray-600' : value !== '2' }">
          Contacts
        </span>
      </label>
    </div>
  </div>
</fieldset>
</div>


               </div>

            <div class="flex flex-row-reverse">
               <input id="submitpost" type="submit" name="post" value="Post" class="p-1 px-4 font-semibold text-white transition bg-red-300 rounded-md select-none cursor-default focus:outline-none" disabled>    
            </div>
         </form>
      </div>