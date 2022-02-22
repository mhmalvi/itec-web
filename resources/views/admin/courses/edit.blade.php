@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <edit-course-component
                    course_data="{{ json_encode($course) }}"
                    categories_data="{{ json_encode($categories) }}"
                    industries_data="{{ json_encode($industries) }}"
                    />
            </div>
        </div>
    </div>
@endsection
