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
    <div class="flex flex-col" x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
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
    </div>
    <div class="flex flex-col">
      <?php if(isset($HEADER)): ?>	  
      <header id="header" class="z-20 bg-white text-center justify-center" style="touch-action: none; top: 0px;">
        <?php include('../frontend/components/header/'.$HEADER.'.php');?>		 
      </header>
      <?php endif; ?>
	  
	  
      <?php if(isset($FRONTEND)): ?>	 	  
      <main class=" " style="-webkit-overflow-scrolling:touch">
        <?php include('../frontend/'.$FRONTEND.'.php');?>		 	  
      </main>
      <?php endif; ?>	  
	  
	  
      <?php if(isset($FOOTER)): ?>		  
      <footer id="footer" class="bg-white border-gray-300 inset-x-0 bottom-0 text-center z-50 flex lg:hidden" style="touch-action: none; bottom: 0px;">
        <?php include('../frontend/components/footer/'.$FOOTER.'.php');?>	
      </footer>
      <?php endif; ?>		  
    </div>
    <?php if($GLOBALS['url_loc'][1] == "home"): ?>
    <script>
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
      $(document).find('textarea').each(function () {
        var offset = this.offsetHeight - this.clientHeight;
        $(this).on('keyup input focus', function () {
          $(this).css('height', '30px').css('height', this.scrollHeight + offset);
        });
		
        $(this).on('blur', function () {
          $(this).animate({"height":"40px",}, "fast");
        });			
		
      });
	  
	  
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
				   
      $('#ctext').on('input propertychange', function () {
        if ($(this).val() !== "") {
          $("#submitcomment").removeClass("text-gray-200 cursor-pointer");
          $("#submitcomment").addClass("text-gray-800 cursor-default");
          document.getElementById("submitcomment").disabled = false;
        }
        else {
          $("#submitcomment").removeClass("text-gray-800 cursor-pointer");
          $("#submitcomment").addClass("text-gray-200 cursor-not-allowed");
          document.getElementById("submitcomment").disabled = true;
        }
      });			   
    </script>
    <?php endif;?>
    <script>
      const setup = () => {
        return {
          loading: true,
          isMobileSubMenuOpen: false,
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
