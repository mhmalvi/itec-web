$(document).ready(function () {
    //open modal
    $("#open-rpl-modal").on("click", function () {
        $(".rpl-modal-bg").addClass("rpl-modal-active");
        $(body).toggleClass("overflow");
    });

    //close modal
    $("#rpl-modal-close").on("click", function () {
        $(".rpl-modal-bg").removeClass("rpl-modal-active");
    });


    $(".industry").on("change", function () {
        var title = $(this).val();

        if (title == 'other') {
            $(".other").fadeIn(500);
        }else{
            $.ajax({
                url: "api/get-course-by-industry",
                method: "GET",
                data: {
                    title: title
                },
                dataType: "json",
                success: function(res) {
                    var option =
                        "<option disabled selected value>Choose your preffered course...</option>";
                    if (res.status == 200) {
                        res.data.map((data) => {

                            var title = data.Course;

                            option +=
                                '<option value="'+title+'">'+title+'</option>';
                        });

                        $(".other").fadeOut(300);
                        $(".course").html(option);
                    }
                }
            })
        }
    });   


    /**
     * Form Response
     */
    $("#rpl-form").on('submit', function (e) {
        e.preventDefault();
        const fd = new FormData();
        fd.append('name', $("#name").val());
        fd.append('contact', $("#phone").val());
        fd.append('email', $("#email").val());
        fd.append('location', $("#location").val());
        fd.append('qualification', $("#qualification").val());
        fd.append('relevant', $("#relevant").val());
        fd.append('work_location', $("#work_location").val());
        fd.append('designation', $("#designation").val());
        fd.append('industry', $("#industry").val());
        fd.append('courses', $("#courses").val());
        fd.append('remark', $("#remark").val());

        var files = $("#file").prop('files');

        if (files.length > 0) {
            $.each(files, function (key,value) {
                fd.append('files[]', value);
            });
        }


        $.ajax({
            url: 'api/rpl',
            method: 'POST',
            data:fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#rpl-modal-form").toggleClass('visible');
                $("#submit-loader").toggleClass('visible');
            },
            success: function (data) {
                $("#rpl-form").trigger("reset");
                $("#btn-submit").prop('disabled', false);
                $("#submit-success").css('display', 'block').css('opacity', '1');
                $("#submit-loader").toggleClass('visible');
                setTimeout(() => {
                    $(".rpl-modal-bg").removeClass("rpl-modal-active");
                }, 5000);
            },
            error: function (err) {
                $("#rpl-modal-form").toggleClass('visible');
                $("#submit-loader").toggleClass('visible');
                $("#btn-submit").prop('disabled', false);
                toastr.warning('Invalid form submittion. Please try again', 'warning');
            }
        })
    });

    $('.loader-inner').loaders()
})