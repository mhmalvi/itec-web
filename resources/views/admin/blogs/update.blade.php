@extends('admin.layouts.app')

@push('css')
    <link href="{{ asset('admin/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css"
        rel="stylesheet" />
@endpush

@section('content')
    <div class="container">
        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Blog Title <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}">
                                @error('blog_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Category <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control" id="category">
                                    <option value selected disabled>Select or Create Category...</option>
                                    @forelse ($categories as $item)
                                        <option value="{{ $item->title }}"
                                            {{ $blog->blog_categories_id == $item->id ? 'selected' : '' }}>
                                            {{ $item->title }}
                                        </option>
                                    @empty

                                    @endforelse
                                </select>
                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Details <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <textarea name="details" class="info">{!! $blog->blog_des !!}</textarea>
                                @error('details')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
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
                            <div class="col-sm-10" id="tags">
                                <input type="text" class="form-control" name="meta_tags" value="{{ $blog->meta_tags}}"/>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Keywords (max 5)</label>
                            <div class="col-sm-10" id="keys">
                                <input type="text" class="form-control" name="meta_keys" value="{{ $blog->meta_keys}}"/>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="meta_des" rows="5"
                                    style="resize: none;">{{ $blog->meta_des }}</textarea>
                                @error('meta_des')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="ibox">
                    <div class="ibox-content p-5">
                        {{-- <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('storage/blogs/' . $blog->thumbnailTwo) }}" alt="" style="width: 80%">
                            </div>
                            <div class="col-sm-7">
                                <img src="{{ asset('storage/blogs/' . $blog->thumbnailOne) }}" alt=""
                                    style="width: 100%">
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-sm-6">
                                <h5>Thumbnail (780 x 1000) <small class="text-danger">*</small></h5>
                                <p>
                                    Max File Size: 1 mb
                                </p>
                                <div id="thumb" data-height="250px"></div>
                                @error('thumbnail')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <h5>Content Image (1920 x 1080) <small class="text-danger">*</small></h5>
                                <p>
                                    Max File Size: 1 mb
                                </p>
                                <div id="img" data-height="250px"></div>
                                @error('img')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
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
                <button type="submit" class="btn btn-primary mr-4">Update</button>
                <a href="{{ route('admin.blogs') }}" class="btn btn-light">Cancel</a>
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

    <!-- Select2 -->
    <script src="{{ asset('admin/js/plugins/select2/select2.full.min.js') }}"></script>

    <script src="{{ asset('admin/tinymce/tinymce.min.js') }}"></script>

    @include('admin.blogs.script');
@endpush
