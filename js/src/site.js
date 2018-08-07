jQuery(document).ready(function($){
// Add your custom jQuery here

//add/remove fixed behavior to nav bar
$(function() {
    //caches a jQuery object containing the navbar element
    var navbar = $("#topNav");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            navbar.addClass("fixed-top");
        } else {
            navbar.removeClass("fixed-top");
        }
    });
});

//scroll function
$(".scrollDown").click(function() { /*select class that triggers scroll*/
    $('html, body').animate({
        scrollTop: $("#content").offset().top -110/*class you want to scroll to!!*/
    }, 1500); /*animation time length*/
});

$(".wpcf7-submit").addClass("btn btn-danger");

});