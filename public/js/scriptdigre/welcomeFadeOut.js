$(document).ready(function() {
    $("body").click(function(){
    $("#titulo").fadeOut(2000,function(){
        window.location.replace("principal");
    });                    
    });
        });