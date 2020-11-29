(function($) {

/******************Hamburger Menu***************/

//var menu = document.querySelector('.main-nav');
//var hamburger = document.querySelector('.hamburger');

//hamburger.addEventListener('click', function(){
//    //the ul ".main-nav" has height:0; and transition:height 0.6s; then the class ".open" added to the ul gives it a height of 177px which exposes the menu
//    menu.classList.toggle('open');
//});
//
//$('.main-nav a').on('click', function(){ 
//    menu.classList.remove('open');
//    console.log('clicked');
//});

//jquery version
var menu = $('.main-nav');
var hamburger = $('.hamburger');
var links = $('.main-nav a');

hamburger.on('click', function(){
    menu.toggleClass('open');
});

links.on('click', function(){ 
    menu.removeClass('open');
});

/******************************************/

/*************Parallax Scrolling Effect********/

var $window = $(window);

$('div[data-type="background"]').each(function(){
    var $bgobj = $(this);
    ;
    $(window).scroll(function(){
		
        //yPos is made negative because the $bgobj's background image is being shifted up on the page. It's divided by the data-speed=5 which makes it a smaller number than the $window.scrollTop() therefore, the $bgobj scrolls slower than the actual $window.scrollTop() distance
        var yPos = -($window.scrollTop() / $bgobj.data('speed'));
        var coords = '50% ' + yPos + 'px';
        $bgobj.css({
            backgroundPosition: coords
        });
    });
});

/*************************************************/
/******************Smooth Scrolling***************/

//  jQuery(document).ready(function(){
//  // Select all links with hrefs that contain hashes
//  jQuery('a[href*="#"]')
//    // Remove links that don't actually link to anything
//    .not('[href="#"]')
//    .not('[href="#0"]')
//    .click(function(event) {
//      // On-page links
//      if (
//        //replace the location with an empty string and check if it's equal to 'this' (a.button) replaced with an empty string
//        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
//        &&
//        //check if the location host and a.button host are the same
//        location.hostname == this.hostname
//      ) {
//        //somelink.hash returns a DOMString containing a '#' followed by the fragment identifier of the URL. For <a href="someURL#foobar"> this.hash returns '#foobar'.  
//        // Figure out element to scroll to
//        var target = jQuery(this.hash);
//        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
//        // Does a scroll target exist?
//        if (target.length) {
//          // Only prevent default if animation is actually gonna happen
//          event.preventDefault();
//          jQuery('html, body').animate({
//            scrollTop: target.offset().top
//          }, 1000, function() {
//            // Callback after animation
//            // Must change focus!
//            var jQuerytarget = jQuery(target);
//            jQuerytarget.focus();
//            if (jQuerytarget.is(":focus")) { // Checking if the target was focused
//              return false;
//            } else {
//              jQuerytarget.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//              jQuerytarget.focus(); // Set focus again
//            };
//          });
//        }
//      }
//    });
//  });

/***********************************************/
/************Another jquery smooth scroll script from css tricks comment section*******************/

($('a[href*="#"]').not('[href="#"]')).click(function() {
    //The location object is part of the window object and is accessed through the window.location property. The location.pathname is a Location object property that sets or returns the path name of a URL
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
        //hash is a location object property that sets or returns the anchor part (#) of a URL.
        //If you click on the work link, $(this.hash) is an 'a' tag with an href="#work"
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 //scrollTop: Get the number of pixels the content of an element is scrolled vertically.
                 //offset().top: how many pixels the target is from the top of the document
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});




})( jQuery );