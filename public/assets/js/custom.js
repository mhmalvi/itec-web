$(document).ready(function () {
    $(window).on('load', function(){
        setTimeout(() => {
            $("#exampleModalCenter").modal('show');
        }, 2800);
    })

    
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
    $("#yt").mouseenter(function () {
        $("#socialLayer").addClass('youtube');
        $("#socialInner h5").fadeOut(function () {
            $(this).text("Subscribe Our Youtube Cannel").fadeIn("slow");
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
    $("#yt").mouseleave(function () {
        $("#socialLayer").removeClass('youtube');
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



    /**
     * Form Submit
     * 
     */
    $("#subscribe").on("submit", function (e) {
        e.preventDefault();

        var email = $(this).find('input').val();
        
        $.ajax({
            url: 'api/subscribe',
            method: 'POST',
            data: {email: email},
            dataType: 'json',
            success: function (data) {
                if (data.status == 422) {
                    for (const error in data.errors) {
                        $("#err").text(data.errors[error]);
                    }
                }

                if (data.status == 200) {
                    $("#subscribe").trigger("reset");
                    $("#success").text(data.success);
                    setInterval(() => {
                        $("#exampleModalCenter").modal("hide");
                    }, 500);
                }
            }
        })
    });
});