<!-- JS FILES -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/splitting.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('admin/js/plugins/toastr/toastr.min.js') }}"></script>
@stack('js')
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>

<script>
    $(document).ready(function() {
        $("#industry").on("change", function() {
            var title = $(this).val();

            if (title == 'other') {
                $(".other_ind").slideDown("slow").css('display', 'block');
            }else{
                $.ajax({
                    url: "{!! route('get.course') !!}",
                    method: "POST",
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

                            $("#courses").html(option);
                        }
                    }
                })
            }
        });

        $("#courses").on("change", function() {
            if ($(this).val() == 'other') {
                $(".other_course").slideDown("slow").css('display', 'block');
            }
        });
    });


    $(document).ready(function(){
        $(window).on('load', function(){
            setTimeout(() => {
                $("#exampleModalCenter").modal('show');
            }, 2800);
        })
    })

</script>


<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
