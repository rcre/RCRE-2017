/*
 * Bones Scripts File
 * Author: Eddie Machado
*/


/* This is a special import line for Codekit, that pulls in bower components */

// @codekit-prepend "../../bower_components/rrssb/js/rrssb.js";




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
 * Mobile Menu Submenus
**************************/

(function ($) {
  "use strict";
    $.fn.meanmenu = function (options) {
        var defaults = {
            meanMenuTarget: jQuery(this), // Target the current HTML markup you wish to replace
            meanMenuContainer: 'header', // Choose where meanmenu will be placed within the HTML
            meanMenuClose: "X", // single character you want to represent the close menu button
            meanMenuCloseSize: "26px", // set font size of close button
            meanMenuOpen: "<span /><span /><span />", // text/markup you want when menu is closed
            meanRevealPosition: "right", // left right or center positions
            meanRevealPositionDistance: "0", // Tweak the position of the menu
            meanRevealColour: "", // override CSS colours for the reveal background
            meanScreenWidth: "768", // set the screen width you want meanmenu to kick in at
            meanNavPush: "0px", // set a height here in px, em or % if you want to budge your layout now the navigation is missing.
            meanShowChildren: true, // true to show children in the menu, false to hide them
            meanExpandableChildren: true, // true to allow expand/collapse children
            meanExpand: "+", // single character you want to represent the expand for ULs
            meanContract: "-", // single character you want to represent the contract for ULs
            meanRemoveAttrs: false, // true to remove classes and IDs, false to keep them
            onePage: false, // set to true for one page sites
            meanDisplay: "block", // override display method for table cell based layouts e.g. table-cell
            removeElements: "" // set to hide page elements
        };
        options = $.extend(defaults, options);

        // get browser width
        var currentWidth = window.innerWidth || document.documentElement.clientWidth;

        return this.each(function () {
            var meanMenu = options.meanMenuTarget;
            var meanContainer = options.meanMenuContainer;
            var meanMenuClose = options.meanMenuClose;
            var meanMenuCloseSize = options.meanMenuCloseSize;
            var meanMenuOpen = options.meanMenuOpen;
            var meanRevealPosition = options.meanRevealPosition;
            var meanRevealPositionDistance = options.meanRevealPositionDistance;
            var meanRevealColour = options.meanRevealColour;
            var meanScreenWidth = options.meanScreenWidth;
            var meanNavPush = options.meanNavPush;
            var meanRevealClass = ".meanmenu-reveal";
            var meanShowChildren = options.meanShowChildren;
            var meanExpandableChildren = options.meanExpandableChildren;
            var meanExpand = options.meanExpand;
            var meanContract = options.meanContract;
            var meanRemoveAttrs = options.meanRemoveAttrs;
            var onePage = options.onePage;
            var meanDisplay = options.meanDisplay;
            var removeElements = options.removeElements;

            //detect known mobile/tablet usage
            var isMobile = false;
            if ( (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Blackberry/i)) || (navigator.userAgent.match(/Windows Phone/i)) ) {
                isMobile = true;
            }

            if ( (navigator.userAgent.match(/MSIE 8/i)) || (navigator.userAgent.match(/MSIE 7/i)) ) {
              // add scrollbar for IE7 & 8 to stop breaking resize function on small content sites
                jQuery('html').css("overflow-y" , "scroll");
            }

            var meanRevealPos = "";
            var meanCentered = function() {
              if (meanRevealPosition === "center") {
                var newWidth = window.innerWidth || document.documentElement.clientWidth;
                var meanCenter = ( (newWidth/2)-22 )+"px";
                meanRevealPos = "left:" + meanCenter + ";right:auto;";

                if (!isMobile) {
                  jQuery('.meanmenu-reveal').css("left",meanCenter);
                } else {
                  jQuery('.meanmenu-reveal').animate({
                      left: meanCenter
                  });
                }
              }
            };

            var menuOn = false;
            var meanMenuExist = false;

            if (meanRevealPosition === "right") {
                meanRevealPos = "right:" + meanRevealPositionDistance + ";left:auto;";
            }
            if (meanRevealPosition === "left") {
                meanRevealPos = "left:" + meanRevealPositionDistance + ";right:auto;";
            }
            // run center function
            meanCentered();

            // set all styles for mean-reveal
            var $navreveal = "";

            var meanInner = function() {
                // get last class name
                if (jQuery($navreveal).is(".meanmenu-reveal.meanclose")) {
                    $navreveal.html(meanMenuClose);
                } else {
                    $navreveal.html(meanMenuOpen);
                }
            };

            // re-instate original nav (and call this on window.width functions)
            var meanOriginal = function() {
              jQuery('.mean-bar,.mean-push').remove();
              jQuery(meanContainer).removeClass("mean-container");
              jQuery(meanMenu).css('display', meanDisplay);
              menuOn = false;
              meanMenuExist = false;
              jQuery(removeElements).removeClass('mean-remove');
            };

            // navigation reveal
            var showMeanMenu = function() {
                var meanStyles = "background:"+meanRevealColour+";color:"+meanRevealColour+";"+meanRevealPos;
                if (currentWidth <= meanScreenWidth) {
                jQuery(removeElements).addClass('mean-remove');
                  meanMenuExist = true;
                  // add class to body so we don't need to worry about media queries here, all CSS is wrapped in '.mean-container'
                  jQuery(meanContainer).addClass("mean-container");
                  jQuery('.mean-container').prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="'+meanStyles+'">Show Navigation</a><nav class="mean-nav"></nav></div>');

                  //push meanMenu navigation into .mean-nav
                  var meanMenuContents = jQuery(meanMenu).html();
                  jQuery('.mean-nav').html(meanMenuContents);

                  // remove all classes from EVERYTHING inside meanmenu nav
                  if(meanRemoveAttrs) {
                    jQuery('nav.mean-nav ul, nav.mean-nav ul *').each(function() {
                      // First check if this has mean-remove class
                      if (jQuery(this).is('.mean-remove')) {
                        jQuery(this).attr('class', 'mean-remove');
                      } else {
                        jQuery(this).removeAttr("class");
                      }
                      jQuery(this).removeAttr("id");
                    });
                  }

                  // push in a holder div (this can be used if removal of nav is causing layout issues)
                  //jQuery(meanMenu).before('<div class="mean-push" />');
                  //jQuery('.mean-push').css("margin-top",meanNavPush);

                  // hide current navigation and reveal mean nav link
                  jQuery(meanMenu).hide();
                  jQuery(".meanmenu-reveal").show();

                  // turn 'X' on or off
                  jQuery(meanRevealClass).html(meanMenuOpen);
                  $navreveal = jQuery(meanRevealClass);

                  //hide mean-nav ul
                  jQuery('.mean-nav ul').hide();

                  // hide sub nav
                  if(meanShowChildren) {
                      // allow expandable sub nav(s)
                      if(meanExpandableChildren){
                        jQuery('.mean-nav ul ul').each(function() {
                            if(jQuery(this).children().length){
                                jQuery(this,'li:first').parent().append('<a class="mean-expand" href="#" style="font-size: '+ meanMenuCloseSize +'">'+ meanExpand +'</a>');
                            }
                        });
                        jQuery('.mean-expand').on("click",function(e){
                            e.preventDefault();
                              if (jQuery(this).hasClass("mean-clicked")) {
                                  jQuery(this).text(meanExpand);
                                jQuery(this).prev('ul').slideUp(300, function(){});
                            } else {
                                jQuery(this).text(meanContract);
                                jQuery(this).prev('ul').slideDown(300, function(){});
                            }
                            jQuery(this).toggleClass("mean-clicked");
                        });
                      } else {
                          jQuery('.mean-nav ul ul').show();
                      }
                  } else {
                      jQuery('.mean-nav ul ul').hide();
                  }

                  // add last class to tidy up borders
                  jQuery('.mean-nav ul li').last().addClass('mean-last');
                  $navreveal.removeClass("meanclose");
                  jQuery($navreveal).click(function(e){
                    e.preventDefault();
                if( menuOn === false ) {
                        $navreveal.css("text-align", "center");
                        $navreveal.css("text-indent", "0");
                        $navreveal.css("font-size", meanMenuCloseSize);
                        jQuery('.mean-nav ul:first').slideDown();
                        menuOn = true;
                    } else {
                      jQuery('.mean-nav ul:first').slideUp();
                      menuOn = false;
                    }
                      $navreveal.toggleClass("meanclose");
                      //I commeted this out to make my own animated button
                      //meanInner();
                      //jQuery(removeElements).addClass('mean-remove');
                  });

                  // for one page websites, reset all variables...
                  if ( onePage ) {
                    jQuery('.mean-nav ul > li > a:first-child').on( "click" , function () {
                      jQuery('.mean-nav ul:first').slideUp();
                      menuOn = false;
                      jQuery($navreveal).toggleClass("meanclose").html(meanMenuOpen);
                    });
                  }
              } else {
                meanOriginal();
              }
            };

            if (!isMobile) {
                // reset menu on resize above meanScreenWidth
                jQuery(window).resize(function () {
                    currentWidth = window.innerWidth || document.documentElement.clientWidth;
                    if (currentWidth > meanScreenWidth) {
                        meanOriginal();
                    } else {
                      meanOriginal();
                    }
                    if (currentWidth <= meanScreenWidth) {
                        showMeanMenu();
                        meanCentered();
                    } else {
                      meanOriginal();
                    }
                });
            }

          jQuery(window).resize(function () {
                // get browser width
                currentWidth = window.innerWidth || document.documentElement.clientWidth;

                if (!isMobile) {
                    meanOriginal();
                    if (currentWidth <= meanScreenWidth) {
                        showMeanMenu();
                        meanCentered();
                    }
                } else {
                    meanCentered();
                    if (currentWidth <= meanScreenWidth) {
                        if (meanMenuExist === false) {
                            showMeanMenu();
                        }
                    } else {
                        meanOriginal();
                    }
                }
            });

          // run main menuMenu function on load
          showMeanMenu();
        });
    };
})(jQuery);

/*************************
 * Stuff from the footer
**************************/

// Parallax activation script that kicks in on pages that #
  if( jQuery("#scene").length !== 0 ) {
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
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
  jQuery('header nav').meanmenu();
  serviceTabs();
  //mobileDropdowns();

}); /* end of as page load scripts */
