@extends('admin.layouts.app')

@push('css')
    <link href="{{ asset('admin/css/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}"
        rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <form action="{{route('admin.course.update', $course->id)}}" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            @method('put')
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Course Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="course_code" value="{{$course->course_code}}">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Course Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="course_title" value="{{$course->course_name}}">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Course Category</label>
                            <div class="col-sm-4">
                                <select name="category" class="form-control">
                                    <option value disabled>Select or Create Course Category...</option>
                                    @forelse ($categories as $item)
                                        <option value="{{ $item->title }}" {{($item->id == $course->course_categories_id) ? 'selected' : ''}}>{{ $item->title }}</option>
                                    @empty

                                    @endforelse
                                </select>
                            </div>

                            <label class="col-sm-2 col-form-label text-right">Course Industry</label>
                            <div class="col-sm-4">
                                <select name="industry" class="form-control">
                                    <option value>Select or Create Course Industry...</option>
                                    @forelse ($industries as $item)
                                        <option value="{{ $item->title }}" {{($item->id == $course->course_industries_id) ? 'selected' : ''}}>{{ $item->title }}</option>
                                    @empty

                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Course Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="rto" id="rto" value="{{$course->rto}}">
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
                                <textarea name="details" class="info">{{$course->course_desc}}</textarea>
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
                <button type="button" class="btn btn-primary mr-4" onclick="event.preventDefault(); document.getElementById('form').submit()">Save</button>
                <button type="reset" class="btn btn-light">Clear</button>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <!-- Tags Input -->
    <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ asset('admin/js/plugins/spartan/spartan-multi-image-picker.js') }}"></script>

    <!-- iCheck -->
    <script src="{{ asset('admin/js/plugins/iCheck/icheck.min.js') }}"></script>

    <script src="{{ asset('admin/tinymce/tinymce.min.js') }}"></script>

    <script>
        $('#rto').tagsinput();


        tinymce.init({
            selector: "textarea.info",

            /* width and height of the editor */
            width: "100%",
            height: 650,
            /* display statusbar */
            statubar: true,

            /* plugin */
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],

            /* toolbar */
            toolbar: "insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

            /* style */
            style_formats: [{
                    title: "Headers",
                    items: [{
                            title: "Header 1",
                            format: "h1"
                        },
                        {
                            title: "Header 2",
                            format: "h2"
                        },
                        {
                            title: "Header 3",
                            format: "h3"
                        },
                        {
                            title: "Header 4",
                            format: "h4"
                        },
                        {
                            title: "Header 5",
                            format: "h5"
                        },
                        {
                            title: "Header 6",
                            format: "h6"
                        }
                    ]
                },
                {
                    title: "Inline",
                    items: [{
                            title: "Bold",
                            icon: "bold",
                            format: "bold"
                        },
                        {
                            title: "Italic",
                            icon: "italic",
                            format: "italic"
                        },
                        {
                            title: "Underline",
                            icon: "underline",
                            format: "underline"
                        },
                        {
                            title: "Strikethrough",
                            icon: "strikethrough",
                            format: "strikethrough"
                        },
                        {
                            title: "Superscript",
                            icon: "superscript",
                            format: "superscript"
                        },
                        {
                            title: "Subscript",
                            icon: "subscript",
                            format: "subscript"
                        },
                        {
                            title: "Code",
                            icon: "code",
                            format: "code"
                        }
                    ]
                },
                {
                    title: "Blocks",
                    items: [{
                            title: "Paragraph",
                            format: "p"
                        },
                        {
                            title: "Blockquote",
                            format: "blockquote"
                        },
                        {
                            title: "Div",
                            format: "div"
                        },
                        {
                            title: "Pre",
                            format: "pre"
                        }
                    ]
                },
                {
                    title: "Alignment",
                    items: [{
                            title: "Left",
                            icon: "alignleft",
                            format: "alignleft"
                        },
                        {
                            title: "Center",
                            icon: "aligncenter",
                            format: "aligncenter"
                        },
                        {
                            title: "Right",
                            icon: "alignright",
                            format: "alignright"
                        },
                        {
                            title: "Justify",
                            icon: "alignjustify",
                            format: "alignjustify"
                        }
                    ]
                }
            ],

            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
            },

            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ],

            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                };
                input.click();
            }
        })
    </script>
@endpush
