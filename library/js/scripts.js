/*
 * RESOURCE Scripts File
 * Author: Patrick Hanus
*/

/* This is a special import line for Codekit, that pulls in components */

// @codekit-prepend "_mobilemenu.js";
// @codekit-prepend "_parallax.js";
// @codekit-prepend "_smoothscroll.js";
// @codekit-prepend "_sliderselector.js";
// @codekit-prepend "_rrssb.js";
// @codekit-prepend "_drift.js";

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


jQuery("#moreInfo").click(function() {
    jQuery(".listing-contact").toggleClass("active");
});

jQuery("#closeInfo").click(function() {
    jQuery(".listing-contact").toggleClass("active");
});

/*************************
 * Search Form
**************************/

// window.onscroll = function() { 
//   var sidebar = document.getElementById("contactSidebar");
//   var sticky = header.offsetTop + 500;

//   if (window.pageYOffset >= sticky) {
//     sidebar.classList.add("sticky");
//     } else {
//       sidebar.classList.remove("sticky");
//     }
// };

/*************************
 * Cool Button
**************************/

function coolButton() {
  //var docStyle = document.documentElement.style;
  var aElem = document.querySelector('a');
  var boundingClientRect = aElem.getBoundingClientRect();

  aElem.onmousemove = function (e) {

    var x = e.clientX - boundingClientRect.left;
    var y = e.clientY - boundingClientRect.top;

    var xc = boundingClientRect.width / 2;
    var yc = boundingClientRect.height / 2;

    var dx = x - xc;
    var dy = y - yc;

    docStyle.setProperty('--rx', dy / -1 + 'deg');
    docStyle.setProperty('--ry', dx / 5 + 'deg');
  };

  aElem.onmouseleave = function (e) {

    docStyle.setProperty('--ty', '0');
    docStyle.setProperty('--rx', '0');
    docStyle.setProperty('--ry', '0');
  };

  aElem.onmousedown = function (e) {

    docStyle.setProperty('--tz', '-25px');
  };

  document.body.onmouseup = function (e) {

    docStyle.setProperty('--tz', '-12px');
  };
}

/*************************
 * Ready Functions
**************************/

jQuery(document).ready(function() {
  jQuery("header nav").meanmenu();
  serviceTabs();
  coolButton();

  if(jQuery("#scene").length !== 0) {
    var scene = document.getElementById("scene");
    var parallax = new Parallax(scene);
  }

}); /* end of as page load scripts */