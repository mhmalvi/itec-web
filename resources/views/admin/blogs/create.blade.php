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
        <form action="{{ route('admin.blog.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Blog Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="blog_title">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select name="category" class="form-control" id="category">
                                    <option value selected disabled>Select or Create Category...</option>
                                    @forelse ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @empty

                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Details</label>
                            <div class="col-sm-10">
                                <textarea name="details" id="info"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Tags (max 10)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="meta_tags[]" />
                            </div>
                            <div class="col-sm-1 text-right">
                                <button type="button" class="btn btn-sm btn-primary my-1">Add</button>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Keywords (max 5)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="meta_keys[]" />
                            </div>
                            <div class="col-sm-1 text-right">
                                <button type="button" class="btn btn-sm btn-primary my-1">Add</button>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="meta_des" rows="5" style="resize: none;"></textarea>
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
                                <h5>Thumbnail (1920 x 1080)</h5>
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
                        Publish This Article
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

    <script src="{{ asset('admin/js/plugins/spartan/spartan-multi-image-picker.js') }}"></script>

    <!-- iCheck -->
    <script src="{{ asset('admin/js/plugins/iCheck/icheck.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('admin/js/plugins/select2/select2.full.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#info').summernote({
                height: 650,
                disableResizeEditor: true,
                placeholder: 'Write your content here...',
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

            $("#category").select2({
                placeholder: 'Select or Create Course Category...',
                theme: 'bootstrap4',
                tags: true
            }).on('select2:close', function() {
                var element = $(this);
                var new_category = $.trim(element.val());

                if (isNaN(new_category) && new_category != '') {
                    $.ajax({
                        url: "{!! route('admin.blog.category.add') !!}",
                        method: "POST",
                        data: {
                            blog_category: new_category
                        },
                        dataType: 'json',
                        success: function(res) {
                            if (res.data.status == 200) {
                                element.append('<option value="' + res.data.id + '">' +
                                    res.data.name + '</option>').val(res.data.id);
                            }
                        }
                    });
                };
            });
        });

    </script>
@endpush
