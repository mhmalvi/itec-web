@extends('admin.layouts.app')

@push('css')
    <link href="{{ asset('admin/css/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css"
        rel="stylesheet" />
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <create-course-component categories_data="{{ json_encode($categories) }}"
                    industries_data="{{ json_encode($industries) }}" />
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Tags Input -->
    <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <!-- iCheck -->
    <script src="{{ asset('admin/js/plugins/iCheck/icheck.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('admin/js/plugins/select2/select2.full.min.js') }}"></script>

    <script src="{{ asset('admin/tinymce/tinymce.min.js') }}"></script>

    @include('admin.courses.script')
@endpush
