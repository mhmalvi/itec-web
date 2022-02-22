@extends('admin.layouts.app')

@push('css')
    <style>
        .devider {
            display: inline;
            padding: 0px 5px;
        }
    </style>
@endpush

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <course-list-component />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
