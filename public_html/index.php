<?php
include("../loader.php");
include ('../config.php');   
if(isset($BACKEND)){
include('../backend/'.$BACKEND.'.php');	
}
?>
<!doctype html>
<html>
  <?php include_once('head.php');?>
  <body class="w-full max-w-8xl mx-auto">
    <div class="flex flex-col" x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark }">
      <!-- Loading screen -->		 
      <div
           class="fixed inset-0 z-50 flex items-center w-full justify-center animate-pulse text-3xl font-bold bg-white"
           x-ref="loading"
           >
        <img
             class="h-32 w-32 mx-auto injectable" 
             style="filter:brightness(0.1)"
             src="/assets/logo.svg"
             alt="postogon logo"/>
        <div class="h-16 flex items-center mx-auto">Loading.....
        </div>
    </div>
    <div class="flex flex-col dark:bg-dark">
      <?php if(isset($HEADER)): ?>
	   <header x-data="{ open: false }" :class="{'headeropen': open}" id="header" class="z-10 text-center justify-center headeropen" style="touch-action: none; top: 0px;">	  
        <?php include('../frontend/components/header/'.$HEADER.'.php');?>		 
      </header>
      <?php endif; ?>
      <?php if(isset($FRONTEND)): ?>	 	  
      <main class="post" style="-webkit-overflow-scrolling:touch">
        <?php include('../frontend/'.$FRONTEND.'.php');?>		 	  
      </main>
      <?php endif; ?>	  
	  
	  
      <?php if(isset($FOOTER)): ?>		  
      <footer id="footer" class="bg-white dark:bg-dark dark:text-light border-gray-300 dark border-dark inset-x-0 bottom-0 text-center z-50 flex lg:hidden" style="touch-action: none; bottom: 0px;">
        <?php include('../frontend/components/footer/'.$FOOTER.'.php');?>	
      </footer>
      <?php endif; ?>		  
    </div>
    <?php if($GLOBALS['url_loc'][1] == "home"): ?>
<div class="fixed bottom-20 right-5">
        <button
          aria-hidden="true"
          @click="toggleTheme"
          class="p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring focus:ring-primary"
        >
          <svg
            x-show="isDark"
            class="w-8 h-8 text-white"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
            />
          </svg>
          <svg
            x-show="!isDark"
            class="w-8 h-8 text-white"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
            />
          </svg>
        </button>
      </div>  	
	
  </div>
	
    <script>
(function(){ 
  var templates = document.querySelectorAll('svg template');
  var el, template, attribs, attrib, count, child, content;
  for (var i=0; i<templates.length; i++) {
    el = templates[i];
    template = el.ownerDocument.createElement('template');
    el.parentNode.insertBefore(template, el);
    attribs = el.attributes;
    count = attribs.length;
    while (count-- > 0) {
      attrib = attribs[count];
      template.setAttribute(attrib.name, attrib.value);
      el.removeAttribute(attrib.name);
    }
    el.parentNode.removeChild(el);
    content = template.content;
    while ((child = el.firstChild)) {
      content.appendChild(child);
    }
  }
})();	
	
      //define
      const delay = ms => new Promise(res => setTimeout(res, ms));
      window.addEventListener('load', (event) => {
        swap();
      }
                             );
      const swap = async () => {
        await delay(500);
        //puts all posts with id skeleton post into an array, one for each normal post
        var divs = document.querySelectorAll('#skeletonpost');
        for (var i = 0; i < divs.length; i++) {
          //i is index of each, it loops until its empty
          divs[i].classList.add('hidden');
        }
        var divs = document.querySelectorAll('#preload');
        for (var i = 0; i < divs.length; i++) {
          //i is index of each, it loops until its empty
          divs[i].classList.remove('invisible');
          divs[i].classList.add('hidden');
        }
        var divs = document.querySelectorAll('#normalpost');
        for (var i = 0; i < divs.length; i++) {
          //i is index of each, it loops until its empty
          divs[i].classList.remove('hidden');
        }
      };
    </script>
    <script>
      $("#ready").hide();
      $('#text').on('input propertychange', function () {
        if ($(this).val() !== "") {
          $("#submitpost").removeClass("p-1 px-4 cursor-default font-semibold text-white transition transition-colors bg-red-300 rounded-md btn duration-200  focus:outline-none");
          $("#submitpost").addClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200  focus:outline-none");
          document.getElementById("submitpost").disabled = false;
        }
        else {
          $("#submitpost").removeClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200 focus:outline-none");
          $("#submitpost").addClass("p-1 px-4 cursor-default font-semibold text-white transition transition-colors bg-red-300 rounded-md btn duration-200 focus:outline-none");
          document.getElementById("submitpost").disabled = true;
        }
      }); 

    </script>
    <?php endif;?>
    <script>	  
      const setup = () => {

        const getTheme = () => {
          if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
          }
          return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }	

        const setTheme = (value) => {
          window.localStorage.setItem('dark', value)
        }		
		  
        return {
          loading: true,
          isMobileSubMenuOpen: false,
          isDark: getTheme(),
          toggleTheme() {
            this.isDark = !this.isDark
            setTheme(this.isDark)
          },		  
          openMobileSubMenu() {
            this.isMobileSubMenuOpen = true
            this.$nextTick(() => {
              this.$refs.mobileSubMenu.focus()
            }
           )
          }
          ,
        }
      }  
    </script>
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>
  </body>
</html>
