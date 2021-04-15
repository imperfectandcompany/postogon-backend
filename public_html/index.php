<?php
   include("../config.php");
   
   if(!ob_start("ob_gzhandler")) ob_start();
   session_start();
   
   error_reporting(E_ERROR | E_WARNING | E_PARSE);
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   
   
   include("../functions/functions.general.php");
   include("../classes/class.user.php");		
   include("../classes/class.posts.php");	   
   include("../classes/class.database.php");
   include("../classes/class.general.php");
   
   switch($GLOBALS['url_loc'][1]){
       case "/":
       break;
       case "signup":
           include('../backend/signup.php');	
       break;
       case "join":
   		header("location:../public_html/signup");
       break;
       case "signin":
   		header("location:../public_html/login");
       break;
       case "home":
           include('../backend/home.php');	
       break;		
       case "createusername":
           include('../backend/create_a_user.php');
       break;	
       case "signup":
           include('../backend/signup.php');	
       break;	
       case "settings":
           include('../backend/settings.php');	
       break; 	
       case "reset":
           include('../backend/reset.php');	
       break;	
       case "redeem":
           include('../backend/redeem.php');
   	break;
       case "profile":
           include('../backend/profile.php');
   	break;
       case "notifications":
           include('../backend/notifications.php');
   	break;	
       case "logout":
           include('../backend/logout.php');	
       break;	
       case "login":
           include('../backend/login.php');	
       break; 	
       default:
           include('../backend/index.php');
   }
   ?>
<!doctype html>
<html>
   <head>
      <meta charset="UTF-8" />
      <?php
         switch($GLOBALS['url_loc'][1]){
             case "/":
                 echo("<title>Welcome #postogon</title>");	
             break;
             case "createusername":
                 echo("<title>Create Username #postogon</title>");	
             break;	
             case "signup":
                 echo("<title>Sign Up #postogon</title>");		
                 echo("<script src='https://www.google.com/recaptcha/api.js' async defer></script>");	
             break;
             case "logout":
                 echo("<title>Logout #postogon</title>");		
             break;
             case "reset":
                 echo("<title>Reset #postogon</title>");
         		
                 echo("<script src='https://www.google.com/recaptcha/api.js' async defer></script>");			
             break;	
             case "redeem":
                 echo("<title>Redeem #postogon</title>");	
         	break;
             case "profile":
         echo("<title>@".$profile."'s Profile | #postogon</title>");
                 echo("<script src='../scripts/moments.js' async defer></script>");			
         	break;
             case "home":
                 echo("<title>Home #postogon</title>");		
         	break;		
             case "settings":
                 echo("<title>Settings #postogon</title>");		
             break;
             case "login":	
                 echo("<title>Login #postogon</title>");		
             break; 	
             default:
                 echo("<title>#postogon</title>");
         }
         ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@1.x.x/dist/alpine-clipboard.js"></script>		 		 
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
      <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js"></script>
<script>
 let root = document.documentElement;

 function updateRealViewportDimensions() {
   console.log(`1vh = ${window.innerHeight / 100}px`)
   root.style.setProperty('--real-vh', (window.innerHeight / 100) + "px");
 }</script>	  
	  
<script defer>
updateRealViewportDimensions()
 const vhChangeEventTypes = [
   "scroll",
   "resize",
   "fullscreenchange",
   "fullscreenerror",
   "touchcancel",
   "touchaction",   
   "touchend",
   "touchmove",
   "touchstart",
   "mozbrowserscroll",
   "mozbrowserscrollareachanged",
   "mozbrowserscrollviewchange",
   "mozbrowserresize",
   "MozScrolledAreaChanged",
   "mozbrowserresize",
   "orientationchange"
   "pageYOffset"
   
 ]
 vhChangeEventTypes.forEach(function(type) {
   window.addEventListener(type, event => updateRealViewportDimensions());
 })
</script>

<script>
var mobile = window.matchMedia( "(max-width: 640px)" );
var prevScrollpos = window.pageYOffset;



window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0px";	
  } else if (document.getElementById("header").classList.contains('headeropen') && mobile.matches){
    document.getElementById("header").style.top = "-230px";
  } else if (document.getElementById("header").classList.contains('headeropen')){
    document.getElementById("header").style.top = "0px";
  } else {
	      document.getElementById("header").style.top = "-65px";

  }
  

  if (prevScrollpos > currentScrollPos) {
    document.getElementById("footer").style.bottom = "0";	
  } else if (document.getElementById("footer").classList.contains('footeropen') && mobile.matches){
    document.getElementById("footer").style.bottom = "-230px";
  } else if (document.getElementById("footer").classList.contains('footeropen')){
    document.getElementById("footer").style.bottom = "0";
  } else {
	      document.getElementById("footer").style.bottom = "-3.5rem";

  }  
  

  prevScrollpos = currentScrollPos;
}
</script>






<script>	
function RadioFields() {
    return {
        value: false, 
        init() {
          this.value = this.$el.querySelector('input[type=radio]:checked').value
        },      
    }
}
window.RadioFields = RadioFields;	
</script>	






      <link href="/lit/public_html/css/main.css" rel="stylesheet">
      <script
         src="https://code.jquery.com/jquery-3.6.0.js"
         integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
         crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function() {
jQuery("body").append(jQuery("<div><dt/><dd/></div>").attr("id", "progress"));
jQuery("#progress").width(100+ "%");
jQuery("#progress").width("101%").delay(100).fadeOut(400, function() {
jQuery(this).remove();
});
});
</script>		 
      <!-- ... -->
      <script src='/lit/public_html/scripts/main.js' async defer></script>  
   </head>
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
            <div class="h-16 flex items-center mx-auto">Loading.....</div>
        </div>

         </div>
		 
      <div class="flex flex-col">
<?php if($GLOBALS['url_loc'][1] == "home" || "profile" || "settings"): ?>	  
         <header id="header" class="z-20 bg-white text-center justify-center" style="touch-action: none; top: 0px;">
            <?php
               switch($GLOBALS['url_loc'][1]){
                   case "/":
                   break;
                   case "signup":
                   break;
                   case "logout":
                   break;
                   case "reset":
                   break;	
                   case "redeem":	
				   break;
                   case "home":
                       include('../frontend/components/header/home.php');	
                   break;
                   case "notifications":
                   break; 	
                   case "createusername":
                   break;	
                   case "profile":
                       include('../frontend/components/header/profile.php');					   
                   break; 
                   case "settings":
                       include('../frontend/components/header/settings.php');					   
                   break; 		
                   case "login":
                   break; 	
                   default:
                   break; 
               }
               ?>
         </header>
<?php endif; ?>
         <main class=" " style="-webkit-overflow-scrolling:touch">
            <?php
               switch($GLOBALS['url_loc'][1]){
                   case "/":
                   break;
                   case "signup":
                       include('../frontend/signup.php');		
                   break;
                   case "logout":
                       include('../frontend/logout.php');	
                   break;
                   case "reset":
                       include('../frontend/reset.php');	
                   break;	
                   case "redeem":
                       include('../frontend/redeem.php');		
               	break;
                   case "home":
                       include('../frontend/home.php');	
                   break;
                   case "notifications":
                       include('../frontend/notifications.php');
               	break;		
                   case "createusername":
                       include('../frontend/create_a_user.php');
                   break;	
                   case "profile":
                       include('../frontend/profile.php');
               	break;	
                   case "settings":
                       include('../frontend/settings.php');	
                   break; 		
                   case "login":
                       include('../frontend/login.php');	
                   break; 	
                   default:
                       include('../frontend/index.php');	
               }
               ?>
         </main>
         <footer id="footer" class="bg-white border-gray-300 inset-x-0 bottom-0 text-center z-50 flex lg:hidden" style="touch-action: none; bottom: 0px;">
            <?php
               switch($GLOBALS['url_loc'][1]){
                   case "/":
                   break;
                   case "signup":
                   break;
                   case "logout":
                   break;
                   case "reset":
                   break;	
                   case "redeem":	
               	break;
                   case "home":
                       include('../frontend/components/footer/home.php');	
                   break;
                   case "notifications":
                   break; 	
                   case "createusername":
                   break;	
                   case "profile":
                       include('../frontend/components/footer/profile.php');		
                   break; 
                   case "settings":
                       include('../frontend/components/footer/settings.php');			
                   break; 		
                   case "login":
                   break; 	
                   default:
                   break; 
               }
               ?>
         </footer>
      </div>
	  
<?php if($GLOBALS['url_loc'][1] == "home"): ?>
<script>
    //define
    const delay = ms => new Promise(res => setTimeout(res, ms));


    window.addEventListener('load', (event) => {
        swap();
    });


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
    $(this).css('height', 'auto').css('height', this.scrollHeight + offset);
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
			})
		},
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