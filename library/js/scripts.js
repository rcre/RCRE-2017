/*
 * RESOURCE Scripts File
 * Author: Patrick Hanus
*/

/* This is a special import line for Codekit, that pulls in bower components */

// @codekit-prepend "_rrssb.js";
// @codekit-prepend "_mobilemenu.js";
// @codekit-prepend "_parallax.js";
// @codekit-prepend "_smoothscroll.js";
// @codekit-prepend "_sliderselector.js";

/*************************
 * Get Viewport Dimensions
**************************/

function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

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

var onSuccess = function(response) {

  var btnSubmit = document.getElementById("contact_submit");
  if ( btnSubmit.hasAttribute("disabled") ) {
          btnSubmit.removeAttribute("disabled");
      }
      
  document.getElementById('oid').setAttribute("value", "00D15000000NClj");

  var errorDivs = document.getElementsByClassName("recaptcha-error");
    if (errorDivs.length) {
      errorDivs[0].className = "";
    }

  var errorMsgs = document.getElementsByClassName("recaptcha-error-message");
    if (errorMsgs.length) {
      errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
    }
}; 

/*************************
 * Search Form
**************************/


jQuery("#searchButton").click(function() {
    jQuery("#searchform").toggleClass("visible");

    jQuery("#searchButton i").toggleClass("fa-search").toggleClass("fa-close");

    jQuery("#menu-burger").toggleClass("hide");
    jQuery(".meanmenu-reveal").toggleClass("hide");
    jQuery("#call").toggleClass("hide");

    jQuery("#s").focus();
    jQuery("#s").select();
});


/*************************
 * Contact Form
**************************/

jQuery(document).ready(function() {
  jQuery('header nav').meanmenu();
  
  serviceTabs();
  
  // Parallax activation script that kicks in on pages that have the #scene
  if( jQuery("#scene").length !== 0 ) {
    var scene = jQuery('scene');
    var parallax = new Parallax(scene);
  }

}); /* end of as page load scripts */
