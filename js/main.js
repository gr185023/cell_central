
"use strict";

var today = new Date();
var datePicker = {
    selectForward: true,
    startDate: today,
    inline: false
};

$('#pickupDate').dateRangePicker(datePicker);

// Right Sidebar
var infoRatio = $(window).width() * 0.63;
$('.open-right').sideNav({ // Trigger id
    menuWidth: infoRatio, // Default is 240
    edge: 'right', // Choose the horizontal origin
    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
});

// Left Sidebar
$('.open-left').sideNav({ // Trigger id
    menuWidth: 240, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
});

$.log = function(message) {
  var $logger = $("#logger");
  $logger.html($logger.html() + "\n * " + message );
}

/*
* Remove the hash from the address bar
*
*/
function removeHash(){
    history.pushState('', document.title, window.location.pathname);
}

// This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026
(function(a, b, c) {
    if (c in b && b[c]) {
        var d, e = a.location,
            f = /^(a|html)$/i;
        a.addEventListener("click", function(a) {
            d = a.target;
            while (!f.test(d.nodeName)) d = d.parentNode;
            "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
        }, !1)
    }
})(document, window.navigator, "standalone")

/*
* Animate the page to scroll smoothly to an element
*
* @param {String} elementSelector Css selector of the element
*
*/
function smoothScrollTo(elementSelector) {
    
    // var topOffset = $(elementSelector).offset().top;
    // $('body, html').animate({
    //         scrollTop: topOffset
    //     }, speed,removeHash);
    var speed = 618;

    $('#form-container').show();
    $('#cover-flexes').fadeOut("fast");
    $('#summary-container').slideUp("swing");
}

function smoothScrollToTop() {
    var speed = 618;
    $('#summary-container').slideDown("swing", function showNext() {
        $('#cover-flexes').fadeIn("swing");
    });

    setTimeout(function() {
        $('#form-container').hide();
    }, speed+100);

    window.scrollTo(0,0);
}

$(document).ready(function() {
    $('.collapsible').collapsible();
    $('#form-container').hide();
    $('select').material_select();
    var top = $(window).scrollTop()+$(window).height();

    // Click on the arrow will make the page scroll and hide the header image
    $('.book-button').on('click',function(e){
        e.preventDefault();
        smoothScrollTo('#form-container');
    });

    $('select').material_select();
});


