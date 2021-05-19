$(document).ready(function () {
    //Mouse Hover
    $("#fb").mouseenter(function () {
        $("#socialLayer").addClass('facebook');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Follow Us On Facebook").fadeIn("slow");
        });
    });
    $("#tw").mouseenter(function () {
        $("#socialLayer").addClass('twitter');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Follow Us On Twitter").fadeIn("slow");
        });
    });
    $("#lin").mouseenter(function () {
        $("#socialLayer").addClass('linkedin');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Follow Us On LinkedIn").fadeIn("slow");
        });
    });
    $("#inst").mouseenter(function () {
        $("#socialLayer").addClass('insta');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Follow Us On Instagram").fadeIn("slow");
        });
    });


    //Mouse Leave
    $("#fb").mouseleave(function () {
        $("#socialLayer").removeClass('facebook');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Social Share").fadeIn("slow");
        });
    });
    $("#tw").mouseleave(function () {
        $("#socialLayer").removeClass('twitter');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Social Share").fadeIn("slow");
        });
    });
    $("#lin").mouseleave(function () {
        $("#socialLayer").removeClass('linkedin');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Social Share").fadeIn("slow");
        });
    });
    $("#inst").mouseleave(function () {
        $("#socialLayer").removeClass('insta');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Social Share").fadeIn("slow");
        });
    });
});