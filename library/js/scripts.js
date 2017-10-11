/*
 * Bones Scripts File
 * Author: Eddie Machado
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
// var waitForFinalEvent = (function () {
// 	var timers = {};
// 	return function (callback, ms, uniqueId) {
// 		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
// 		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
// 		timers[uniqueId] = setTimeout(callback, ms);
// 	};
// })();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
// var timeToWaitForLast = 100;

/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = jQuery('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * jQuery(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function

/*************************
 * Service Tab Block
**************************/

  function serviceTabs() {
  // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    jQuery(".tab_content").hide();
    jQuery(".tab_content:first").show();

  /* if in tab mode */
  jQuery("ul.tabs li").click(function() {
  
    jQuery(".tab_content").hide();
    var activeTab = jQuery(this).attr("rel"); 
    jQuery("#"+activeTab).fadeIn();    
  
    jQuery("ul.tabs li").removeClass("active");
    jQuery(this).addClass("active");

    jQuery(".tab_drawer_heading").removeClass("d_active");
    jQuery(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
  });

  /* if in drawer mode */
  jQuery(".tab_drawer_heading").click(function() {
      
      jQuery(".tab_content").hide();
      var d_activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+d_activeTab).fadeIn();
    
    jQuery(".tab_drawer_heading").removeClass("d_active");
      jQuery(this).addClass("d_active");
    
    jQuery("ul.tabs li").removeClass("active");
    jQuery("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
  
  /* Extra class "tab_last" to add border to right side of last tab */
  jQuery('ul.tabs li').last().addClass("tab_last");
}

/*************************
 * Mobile Menu Slide
**************************/

function mobileMenu() {
  jQuery('#menu-burger').on("click", function() {
      jQuery("#menu-mobile-menu").toggleClass("active");
  });
}
/*************************
 * Mobile Dropdowns
**************************/
  function mobileDropdowns() {
    var acc = document.getElementsByClassName("li");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      };
    }
  }

/*************************
 * Google Recaptcha
**************************/

function recaptcha_callback() {
      jQuery('#contact_submit').removeAttr('disabled');
}       

  if( jQuery("#oid").length !== 0 ) {
    document.getElementById('oid').value = '00D15000000NClj';
  }

/*************************
 * Stuff from the footer
**************************/

// Parallaxe activation script

  if( jQuery("#scene").length !== 0 ) {
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
  }


// timestamp for Recaptcha form

if( jQuery("#g-recaptcha-response").length !== 0 ) {
  function timestamp() {
     var response = document.getElementById("g-recaptcha-response");
     if (response == null || response.value.trim() == "") {
         var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
         elems["ts"] = JSON.stringify(new Date().getTime());
         document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
     }
  }

  setInterval(timestamp, 500);
}

// Google analytics
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-74181107-1', 'auto');
  ga('send', 'pageview');

/*************************
 * Contact Form
**************************/

jQuery(document).ready(function() {

  serviceTabs();
  mobileDropdowns();
  mobileMenu();

}); /* end of as page load scripts */
