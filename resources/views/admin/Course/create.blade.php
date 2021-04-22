@extends('admin.layouts.app')

@push('css')
    <link href="{{ asset('admin/css/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}"
        rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <form action="">
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Course Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Course Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Informations</label>
                            <div class="col-sm-10">
                                <textarea name="" id="info"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Tags</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="metaTags" />
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Keywords</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="metaKeys" />
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="" rows="5" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="row">
                            <div class="col-sm-4">
                                <h5>Course Thumbnail (1920 x 1080)</h5>
                                <p class="text-secondary">
                                    Upload image that should show as thumbnail image to visitors.
                                </p>
                                <p>
                                    Max File Size: 1 mb
                                </p>
                            </div>
                            <div class="col-sm-8">
                                <div id="thumb" data-height="250px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 d-flex justify-content-between">
                <div class="checkbox checkbox-success pl-0">
                    <input id="checkbox3" type="checkbox" name="publish" checked>
                    <label for="checkbox3">
                        Publish Course
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mr-4">Publish</button>
                <button type="reset" class="btn btn-light">Clear</button>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <!-- SUMMERNOTE -->
    <script src="{{ asset('admin/js/plugins/summernote/summernote-bs4.js') }}"></script>
    <!-- Tags Input -->
    <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ asset('admin/js/plugins/spartan/spartan-multi-image-picker-min.js') }}"></script>

    <!-- iCheck -->
    <script src="{{ asset('admin/js/plugins/iCheck/icheck.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#metaTags').tagsinput({
                tagClass: 'label label-primary',
                maxTags: 10
            });

            $('#metaKeys').tagsinput({
                tagClass: 'label label-primary',
                maxTags: 5
            });

            $('#info').summernote({
                height: 400,
                disableResizeEditor: true,
                placeholder: 'Write course information here',
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });

            $("#thumb").spartanMultiImagePicker({
                fieldName: 'thumbnail',
                width: '100%',
                maxCount: 1,
            });
        });

    </script>
@endpush
