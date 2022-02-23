@extends('admin.layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.industries.index') }}" class="btn btn-default">
                    Back
                </a>
            </div>
            <div class="col-lg-12 mt-3">
                <edit-industry-component industry_data="{{ json_encode($industry) }}" />
            </div>
        </div>
    </div>
@endsection
