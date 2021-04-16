            <div class="flex justify-end flex-shrink-0 px-6 py-4">
			<div class="flex mr-auto">
               <a href="./settings"><img class="h-8 w-8" style="filter:brightness(0.1)" src="/assets/logo.svg" alt="postogon logo"></a>
			   <a href="./settings"><h1 class="px-6 text-xl font-semibold cursor-pointer">Settings</h1></a>
			   </div>
			   <div class="flex ">
               <button @click="open = !open" :aria-expanded="open ? 'true' : 'false'" :class="{'font-semibold': open, 'active': open}" class="p-1 px-2 text-white transition duration-200 bg-red-500 rounded-md cursor-pointer focus:outline-none" aria-expanded="false">
                  
                  <svg :class="{ 'rotate-180': open }" class="inline-block w-4 h-4 transition-transform transform" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                     <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
               </button>

			   </div>
            </div>
   