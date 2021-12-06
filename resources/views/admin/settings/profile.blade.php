@extends('admin.layouts.app')

@push('css')
    @include('admin.settings.profile-styles')
@endpush

@section('content')
    <div class="wrapper wrapper-content">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row container emp-profile mx-auto">
                <div class="col-md-4">
                    <h5>Personal Informations</h5>
                </div>
                <div class="col-md-8">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="username">User Name</label>
                                    <input type="text" name="username" class="form-control form-control-sm" value="{{ Auth::user()->name }}"/>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" class="form-control form-control-sm" value="{{ Auth::user()->email }}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row container emp-profile mx-auto">
                <div class="col-md-4">
                    <h5>Change Password</h5>
                </div>
                <div class="col-md-8">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="oldpassword">Old Password</label>
                                    <input type="password" name="old" id="password" class="form-control form-control-sm"/>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="newpassword" >New Password</label>
                                    <input type="password" name="new" id="newpassword" class="form-control form-control-sm"/>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="conpassword">Confirm Password</label>
                                    <input type="password" name="confirm" id="conpassword" class="form-control form-control-sm"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary btn-tone">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('js')
    <script src="{{ asset('admin/js/plugins/spartan/spartan-multi-image-picker.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#image").spartanMultiImagePicker({
                fieldName: 'image',
                maxCount: 1,
            });
        })
    </script>
@endpush
