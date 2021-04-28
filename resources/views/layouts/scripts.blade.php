<!-- JS FILES -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/splitting.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
@stack('js')
<script src="{{ asset('assets/js/scripts.js') }}"></script>

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
                            option +=
                                `<option value=${data.Course}>${data.Course}</option>`;
                        });

                        $("#courses").html(option);
                    }
                }
            })
        });
    });

</script>
