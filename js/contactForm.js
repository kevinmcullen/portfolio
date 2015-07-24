$(document).ready(function () {
    
    var showError = function () {
        $(this).closest("div").find(".error").animate({left: "15px", opacity: "1"}, "fast"); };
    var hideError = function () {
        $(this).closest("div").find(".error").animate({right: "15px", opacity: "0"}, "fast");        
    };
   // jQuery methods go here...
    $(".contactForm").on("focusin", "input", showError);
    $(".contactForm").on("focusout", "input", hideError);    
    $(".contactForm").on("focusin", "textarea", showError);
    $(".contactForm").on("focusout", "textarea", hideError);


});