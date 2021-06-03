$(document).ready(function () {
    $("#industry").on("change", function() {
        var title = $(this).val();

        if (title == 'other') {
            $(".courses").slideUp("slow").css('display', 'none');
            $(".other_ind").slideDown("slow").css('display', 'block');
            $(".other_course").slideDown("slow").css('display', 'block');
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

                        if ($(".courses").css('display') == 'none') {
                            $(".courses").slideDown("slow").css('display', 'block');
                            $(".other_ind").slideUp("slow").css('display', 'none');
                            $(".other_course").slideUp("slow").css('display', 'none');
                        }
                        $("#courses").html(option);
                    }
                }
            })
        }
    });   


    /**
     * Form Response
     */
    $("#msform").on('submit', function (e) {
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
            beforeSend: function() {
                $("#btn-submit").html('Sending...');
                $("#btn-submit").prop('disabled', true);
            },
            success: function (data) {
                $("#msform").trigger("reset");
                $("#btn-submit").html('Submit');
                $("#btn-submit").prop('disabled', false);
                toastr.success('Your response has been recorded. Thank you', 'success');
            },
            error: function (err) {
                $("#btn-submit").html('Submit');
                $("#btn-submit").prop('disabled', false);
                toastr.warning('Invalid form submittion. Please try again', 'warning');
            }
        })
    });

    $('.loader-inner').loaders()
})