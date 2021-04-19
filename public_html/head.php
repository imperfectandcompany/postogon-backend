<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php print$META_DESC;?>" />
  <meta name="keywords" content="<?php print $META_WORDS;?>" />	  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
  <?php if(isset($PAGE_TITLE)): ?>
  <title>
    <?php print $PAGE_TITLE;?> #postogon
  </title>
  <?php endif; ?>
  <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@1.x.x/dist/alpine-clipboard.js">
  </script>		 		 
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js">
  </script>
  <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js">
  </script>
  <script>
    let root = document.documentElement;
    function updateRealViewportDimensions() {
      console.log(`1vh = ${window.innerHeight / 100}
px`)
      root.style.setProperty('--real-vh', (window.innerHeight / 100) + "px");
    }
  </script>	 
<script src='https://www.google.com/recaptcha/api.js' async defer></script>  
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
    }
                              )
  </script>
  <script>
    var mobile = window.matchMedia( "(max-width: 640px)" );
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("header").style.top = "0px";
      }
      else if (document.getElementById("header").classList.contains('headeropen') && mobile.matches){
        document.getElementById("header").style.top = "-230px";
      }
      else if (document.getElementById("header").classList.contains('headeropen')){
        document.getElementById("header").style.top = "0px";
      }
      else {
        document.getElementById("header").style.top = "-65px";
      }
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("footer").style.bottom = "0";
      }
      else if (document.getElementById("footer").classList.contains('footeropen') && mobile.matches){
        document.getElementById("footer").style.bottom = "-230px";
      }
      else if (document.getElementById("footer").classList.contains('footeropen')){
        document.getElementById("footer").style.bottom = "0";
      }
      else {
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
        }
        ,      
      }
    }
    window.RadioFields = RadioFields;
  </script>	
  <link href="/lit/public_html/css/main.css" rel="stylesheet">
  <script
          src="https://code.jquery.com/jquery-3.6.0.js"
          integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
          crossorigin="anonymous">
  </script>
  <script>
    jQuery(document).ready(function() {
      jQuery("body").append(jQuery("<div><dt/><dd/></div>").attr("id", "progress"));
      jQuery("#progress").width(100+ "%");
      jQuery("#progress").width("101%").delay(100).fadeOut(400, function() {
        jQuery(this).remove();
      }
                                                          );
    }
                          );
  </script>		 
  <!-- ... -->
  <script src='/lit/public_html/scripts/main.js' async defer>
  </script>  
</head>
