@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.course') }}" class="btn btn-default">
                    Back
                </a>
            </div>
            <div class="col-md-12">
                <create-course-component categories_data="{{ json_encode($categories) }}"
                    industries_data="{{ json_encode($industries) }}" />
            </div>
        </div>
    </div>
@endsection
