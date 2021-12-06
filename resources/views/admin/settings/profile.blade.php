@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <basic-informations username="{{Auth::user()->name}}" email="{{Auth::user()->email}}"></basic-informations>
        <password-change></password-change>
    </div>
@endsection
