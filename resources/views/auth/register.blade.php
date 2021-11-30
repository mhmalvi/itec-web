<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ITEC | Login</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div class="d-flex justify-content-center" style="padding: 50px 0px 15px 0px;">
                <img src="{{ asset('images/logo.webp') }}" alt="" style="max-width: 130px;">
            </div>
            @if ($errors->any())
                <div class="text-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <small>{{ $error }}</small>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="m-t" role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="User Name"
                        value="{{ old('name') }}" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email"
                        value="{{ old('email') }}" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
            </form>
            <p class="m-t"> <small>QuadQue Technologies ltd &copy; <script>
                        document.write(new Date().getFullYear())

                    </script></small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('admin/js/jquery-3.1.1.min.j') }}s"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/admin/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });

    </script>
</body>

</html>
