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
            <div class="col-md-12">
                <a href="{{ route('admin.course.add') }}" class="btn btn-primary">
                    Create
                </a>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="ibox ">
                    <div class="ibox-content">
                        <course-list-component />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
