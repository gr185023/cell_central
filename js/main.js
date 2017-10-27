
"use strict";

var today = new Date();
var datePicker = {
    selectForward: true,
    startDate: today,
    inline: false,
    separator : ' to ',
    getValue: function()
    {
        if ($('#pickupDate').val() && $('#toDate').val() )
            return $('#pickupDate').val() + ' to ' + $('#toDate').val();
        else
            return '';
    },
    setValue: function(s,s1,s2)
    {
        $('#pickupDate').val(s1);
        $('#toDate').val(s2);
    },
    extraClass: 'date-range-picker19'
};

$('#pickupDate').dateRangePicker(datePicker);
$('#toDate').dateRangePicker(datePicker);

// Right Sidebar
var infoRatio = $(window).width() * 0.63;
$('.open-right').sideNav({ // Trigger id
    menuWidth: infoRatio, // Default is 240
    edge: 'right', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true
});

// Left Sidebar
$('.open-left').sideNav({ // Trigger id
    menuWidth: 240, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true 
});

$('#simCount').change(function() {
    $('#simAccordion').removeClass("hidden");

    var simCount = parseInt($(this).val());

    $('#simListAccordion > .collapsible-body').each(function () { 
        if(simCount > 0) {
            $(this).slideDown("swing");
            simCount--;
        }
        else {
            $(this).slideUp("swing");
        }
    });
});

$('#phone1Box').change(function() {

    if (this.checked) { 
        $('#iphone1Select').removeAttr("disabled");
        $('#android1Select').removeAttr("disabled");
    }
    else {
        $('#iphone1Select').prop("disabled", "true");
        $('#android1Select').prop("disabled", "true");
    }
});

$('#phone2Box').change(function() {
    if (this.checked) { 
        $('#iphone2Select').removeAttr("disabled");
        $('#android2Select').removeAttr("disabled");
    }
    else {
        $('#iphone2Select').prop("disabled", "true");
        $('#android2Select').prop("disabled", "true");
    }
});

$('#phone3Box').change(function() {
    if (this.checked) { 
        $('#iphone3Select').removeAttr("disabled");
        $('#android3Select').removeAttr("disabled");
    }
    else {
        $('#iphone3Select').prop("disabled", "true");
        $('#android3Select').prop("disabled", "true");
    }
});

$('#phone4Box').change(function() {
    if (this.checked) { 
        $('#iphone4Select').removeAttr("disabled");
        $('#android4Select').removeAttr("disabled");
    }
    else {
        $('#iphone4Select').prop("disabled", "true");
        $('#android4Select').prop("disabled", "true");
    }
});

$('#phone5Box').change(function() {
    if (this.checked) { 
        $('#iphone5Select').removeAttr("disabled");
        $('#android5Select').removeAttr("disabled");
    }
    else {
        $('#iphone5Select').prop("disabled", "true");
        $('#android5Select').prop("disabled", "true");
    }
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
    $('#simAccordion').collapsible('open', 0);
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


