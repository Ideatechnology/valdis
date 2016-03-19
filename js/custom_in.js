/**
 *  1.  top Menu
    2.  Main Menu
    3.  Search box
    4.  Accordion
    5.  Toggle
    6.  Owl Carousel
    7.  Sync owl carousel
    8.  Pie chart
    9.  Single-share-filter
    10. Time-filter
    11. Smooth Scrolling
    12. Scroll Slider
    13. Breadking News
    14. Validate Form
    15. Google Map
    16. Masonry
    17. Match height
    18. Mobile-menu

 *-----------------------------------------------------------------
 **/
 

"use strict";


$(document).ready(function(){

var kopa_variable = {
    "contact": {
        "address": "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
        "marker": "/url image"
    },
    "i18n": {
        "VIEW": "View",
        "VIEWS": "Views",
        "validate": {
            "form": {
                "SUBMIT": "Submit",
                "SENDING": "Sending..."
            },
            "name": {
                "REQUIRED": "Please enter your name",
                "MINLENGTH": "At least {0} characters required"
            },
            "email": {
                "REQUIRED": "Please enter your email",
                "EMAIL": "Please enter a valid email"
            },
            "url": {
                "REQUIRED": "Please enter your url",
                "URL": "Please enter a valid url"
            },
            "message": {
                "REQUIRED": "Please enter a message",
                "MINLENGTH": "At least {0} characters required"
            }
        },
        "tweets": {
            "failed": "Sorry, twitter is currently unavailable for this user.",
            "loading": "Loading tweets..."
        }
    },
    "url": {
        "template_directory_uri":""
    }
};

var map;


var http = location.protocol;
var slashes = http.concat("//");
var host = slashes.concat(window.location.hostname);

var pathnya=host+":8081/";
//var pathnya=host+"/";
//alert(pathnya);
/* =========================================================
1. top Menu
============================================================ */

Modernizr.load([
  {
  
  
  
    load: pathnya + 'js/superfish.js',
    complete: function () {

        //Main menu
        $('.top-menu').superfish({
        });

    }
  }
]);


/* =========================================================
2. Main Menu
============================================================ */

Modernizr.load([
  {
    load: pathnya + 'js/superfish.js',
    complete: function () {
        
        var r_ul = $('.kopa-main-nav .sf-menu');
        r_ul.find('> li').each(function() {
            r_ul.prepend(this);
        });
        r_ul.superfish({
            speed: "fast",
            delay: "100"
        });

        var r_ul2 = $('.kopa-main-nav-2 .sf-menu');
        r_ul2.find('> li').each(function() {
            r_ul2.prepend(this);
        });

        r_ul2.superfish({
            speed: "fast",
            delay: "100"
        });

        $('.header-top-list ul').superfish({
            speed: "fast",
            delay: "100"
        });

        var r_ul3 = $('.bottom-menu');
        r_ul3.find('> li').each(function() {
            r_ul3.prepend(this);
        });

        var ba1_h = $('.bottom-area-1').find(".kopa-logo").height();
        $('.bottom-menu').css("line-height", ba1_h + "px");

        var p_mr = (ba1_h -31)/2;
        $('.bottom-nav-mobile').find(".pull").css({
            "margin-top": p_mr,
            "margin-bottom": p_mr
        });
        var p_h = $('.bottom-nav-mobile').find(".pull").height();
        var btnav_p = p_mr + p_h + 15;
        $('.bottom-nav-mobile').find(".bottom-menu-mobile").css({
            "top": btnav_p
        });

    }
  }
]);


/* =========================================================
3. Accordion
============================================================ */

var panel_titles = $('.kopa-accordion .panel-title a');
    panel_titles.addClass("collapsed");
    $('.panel-heading.active').find(panel_titles).removeClass("collapsed");
    panel_titles.click(function(){
        $(this).closest('.kopa-accordion').find('.panel-heading').removeClass('active');
        var pn_heading = $(this).parents('.panel-heading');
        if ($(this).hasClass('collapsed')) {
            pn_heading.addClass('active');
        } else {
            pn_heading.removeClass('active');
        }
    });



 /* =========================================================
4. Toggle
============================================================ */
 
    $('.kopa-toggle .panel-group .collapse').collapse({
        toggle: false
    });  
    var panel_titles_2 = $('.kopa-toggle .panel-title a');
    panel_titles_2.click(function(){
        var parent = $(this).closest('.panel-heading');
        if (parent.hasClass('active')) {
            parent.removeClass('active');
        } else {
            parent.addClass('active');
        }
    });










/* ============================================
18. Mobile-menu
=============================================== */

    Modernizr.load([{
        load: [pathnya + 'js/jquery.navgoco.js'],
        complete: function () {

            $(".main-menu-mobile").navgoco({
                accordion: true
            });
            $(".main-menu-mobile").find(".sf-mega").removeClass("sf-mega").addClass("sf-mega-mobile");
            $(".main-menu-mobile").find(".sf-mega-section").removeClass("sf-mega-section").addClass("sf-mega-section-mobile");
            
            $(".main-nav-mobile > .pull").click(function () {
                $(this).closest(".main-nav-mobile").find(".main-menu-mobile").slideToggle("slow");
            });
            $(".caret").removeClass("caret");

            $(".bottom-nav-mobile > .pull").click(function () {
                $(this).closest(".bottom-nav-mobile").find(".main-menu-mobile").slideToggle("slow");
            });

        }
    }]);



/* =========================================================
20. Sticky menu
============================================================ */ 

    Modernizr.load([{
        load: [pathnya + 'js/waypoints.js', pathnya + 'js/waypoints-sticky.js'],
        complete: function () {
            jQuery('.kopa-header-middle').waypoint('sticky');
        }
    }]);

});
