@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <blog-edit-component slug="{{ $slug }}" />
    </div>
@endsection
