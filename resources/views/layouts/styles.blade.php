<!-- CSS FILES -->
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/hamburger.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/loaders/loaders.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">
@stack('css')

<style>
    .lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
