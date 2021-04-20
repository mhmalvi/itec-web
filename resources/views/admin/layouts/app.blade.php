<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ITEC - International Training & Educational Counsel</title>

    {{-- Style Sheets --}}
    @include('admin.layouts.styles')

</head>

<body>
    <div id="wrapper">
        {{-- Navbar --}}
        @include('admin.layouts.sidebar')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('admin.layouts.header')

            @yield('content')

        </div>
    </div>

    @include('admin.layouts.scripts')
</body>

</html>
