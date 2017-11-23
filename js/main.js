
"use strict";

if($('#pickupDate').length) {
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
}

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
    menuWidth: 260, // Default is 240
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

function checkPhone() {
    var tempSimVal = 29.99;
    var simCount = parseInt($('#simCount').find(":selected").val());
    var tempSimTotal = simCount * tempSimVal;
    $('#bd-sim').text("x" + simCount + " = $" + tempSimTotal.toFixed(2)); 

    var phoneChecked = false;
    var iphoneCount = 0;
    var androidCount = 0;
    var lCount = 1;
    if($("#phone1Box").prop('checked') == true && $('#phone1Box').parent().is(':visible')) {
        phoneChecked = true;
        if( $('input[name=phone1Group]:checked', '#tourForm').val() === "iphoneSelect") { iphoneCount++; }
        else { androidCount++; }
    }
    lCount++;
    if(lCount <= simCount && $("#phone2Box").prop('checked') == true && $('#phone2Box').parent().is(':visible')) {
        phoneChecked = true;
        if( $('input[name=phone2Group]:checked', '#tourForm').val() === "iphoneSelect") { iphoneCount++; }
        else { androidCount++; }
    }
    lCount++;
    if(lCount <= simCount && $("#phone3Box").prop('checked') == true && $('#phone3Box').parent().is(':visible')) {
        phoneChecked = true;
        if( $('input[name=phone3Group]:checked', '#tourForm').val() === "iphoneSelect") { iphoneCount++; }
        else { androidCount++; }
    }
    lCount++;
    if(lCount <= simCount && $("#phone4Box").prop('checked') == true && $('#phone4Box').parent().is(':visible')) {
        phoneChecked = true;
        if( $('input[name=phone4Group]:checked', '#tourForm').val() === "iphoneSelect") { iphoneCount++; }
        else { androidCount++; }
    }
    lCount++;
    if(lCount <= simCount && $("#phone5Box").prop('checked') == true && $('#phone5Box').parent().is(':visible')) { 
        phoneChecked = true;
        if( $('input[name=phone5Group]:checked', '#tourForm').val() === "iphoneSelect") { iphoneCount++; }
        else { androidCount++; }
    }

    var tempiPhoneVal = 3.99;
    var tempiPhoneTotal = iphoneCount * tempiPhoneVal;
    $('#bd-iphone').text("x" + iphoneCount + " = $" + tempiPhoneTotal.toFixed(2));

    var tempAndroidVal = 2.99;
    var tempAndroidTotal = androidCount * tempAndroidVal;
    $('#bd-android').text("x" + androidCount + " = $" + tempAndroidTotal.toFixed(2));

    var tempSubtotal = tempAndroidTotal+tempiPhoneTotal;

    if(phoneChecked) { 
        $('#cRentalDates').removeClass('hidden');
    }
    else {
        $('#cRentalDates').addClass('hidden');
    }

    return tempSubtotal;
}

function convertStringToDate(date) {
    var dt = new Date(parseInt(date.substring(0, 3), 10),        // Year
                  parseInt(date.substring(5, 7), 10), // Month 
                  parseInt(date.substring(8), 10));  // Day
    return dt;
}

$('input[name=phone1Group]:radio, input[name=phone2Group]:radio, input[name=phone3Group]:radio, input[name=phone4Group]:radio, input[name=phone5Group]:radio').change(checkPhone);

///////////// Input handling START ////////////////

$('#phone1Box, #phone2Box, #phone3Box, #phone4Box, #phone5Box').on('click', checkPhone);

$('#simCount').blur(function() 
{
    if( $('#simCount').find(":selected").val() !== '0') {
        $(this).removeClass('warning');
    }
    else {
        $(this).addClass('warning');
    }
});

$('#simCount').change(checkPhone);

$('#pickupDate').blur(function()
{
    if( $(this).val().length === 0 ) {
        $(this).addClass('warning');
        $('#toDate').addClass('warning');
    }
    else {
        $(this).removeClass('warning');
        $('#toDate').removeClass('warning');
    }
});

$('#toDate').blur(function()
{
    if( $(this).val().length === 0 ) {
        $(this).addClass('warning');
        $('#pickupDate').addClass('warning');
    }
    else{
        $(this).removeClass('warning');
        $('#pickupDate').removeClass('warning');
    }
});

//////////////// Input handling END ////////////////

$(document).ready(function() {
    $('#simAccordion').collapsible('open', 0);
    $('#form-container').hide();
    $('select').material_select();
    var top = $(window).scrollTop()+$(window).height();

    // Click on the arrow will make the page scroll and hide the header image
    $('.book-button').on('click',function(e){
        e.preventDefault();
        if($('#simCount').find(":selected").val() !== '0' && 
            (($('#pickupDate').is(':visible') && $('#pickupDate').val().length !== 0) ||
                !$('#pickupDate').is(':visible'))) 
        {
            var phoneTotal = checkPhone();
            var tempSimVal = 29.99;
            var simCount = parseInt($('#simCount').find(":selected").val());
            var simTotal = simCount * tempSimVal;
            var subTotal = simTotal;
            if( $('#pickupDate').is(':visible')) {
                var pickupDateStr  = $('#pickupDate').val();
                var toDateStr = $('#toDate').val();
                var pickupDate = convertStringToDate(pickupDateStr);
                var toDate = convertStringToDate(toDateStr);
                var rentDays = ((toDate - pickupDate) / (1000*60*60*24) + 1);
                $('#bd-rental-dates').text( $('#pickupDate').val() + " to " + $('#toDate').val() + " (" + rentDays + "d)");
                $('#bd-rental-dates').removeClass('hidden');

                subTotal = simTotal + (phoneTotal * rentDays);
            }
            else {
                $('#bd-rental-dates').addClass('hidden');
            }

            $('#bd-subtotal').text(" = $" + subTotal.toFixed(2));
            $('#pickupDate').removeClass('warning');
            $('#toDate').removeClass('warning');
            $('#simCount').removeClass('warning');
            $('#cWarningMessage').addClass('hidden');
            smoothScrollTo('#form-container');
        }
        else {
            if( $('#pickupDate').val().length === 0 ) { $('#pickupDate').addClass('warning'); }
            if( $('#toDate').val().length === 0 ) { $('#toDate').addClass('warning'); }
            if($('#simCount').find(":selected").val() === '0') { $('#simCount').addClass('warning'); }
            $('#cWarningMessage').removeClass('hidden');
        }
    });

    // $('.next-button').on('click', function(e) {
    //     var cwarn = false;
    //     if($('#firstName').val().length === 0) { 
    //         $('#firstName').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#firstName').removeClass('warning'); }
    //     if($('#lastName').val().length === 0) { 
    //         $('#lastName').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#lastName').removeClass('warning'); }
    //     if($('#email').val().length === 0) { 
    //         $('#email').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#email').removeClass('warning'); }
    //     if($('#nationality').find(":selected").val().length === 0) { 
    //         $('.select-dropdown').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('.select-dropdown').removeClass('warning');  }
    //     if($('#address1').val().length === 0) { 
    //         $('#address1').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#address1').removeClass('warning');  }
    //     if($('#cityAddress').val().length === 0) { 
    //         $('#cityAddress').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#cityAddress').removeClass('warning');  }
    //     if($('#zipCode').val().length === 0) { 
    //         $('#zipCode').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#zipCode').removeClass('warning'); }
    //     if($('#stateAddress').val().length === 0) { 
    //         $('#stateAddress').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#stateAddress').removeClass('warning'); }
    //     if($('#countryAddress').val().length === 0) { 
    //         $('#countryAddress').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#countryAddress').removeClass('warning'); }
    //     if($('#agreeBox').val().length === 0) { 
    //         $('#agreeBox').addClass('warning'); 
    //         cwarn = true; 
    //     }
    //     else { $('#agreeBox').addClass('warning');  }
    //     if(cwarn) { $('#nextWarningMessage').removeClass('hidden'); }
    // });

    $('select').material_select();
});


