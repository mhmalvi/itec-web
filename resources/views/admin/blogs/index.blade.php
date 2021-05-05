@extends('admin.layouts.app')

@push('css')
    <link href="{{ asset('admin/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <style>
        .devider {
            display: inline;
            padding: 0px 5px;
        }

    </style>
@endpush

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr class="text-center">
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Posted at</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($blogs as $item)
                                        <tr>
                                            <td>
                                                {{ $item->blog_title }}
                                                <br>
                                                <div class="action-links">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('admin.blog.edit', $item->blog_slug) }}"><i
                                                                    class="fa fa-edit"></i>&nbsp;Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin.blog.remove', $item->blog_slug) }}"
                                                                onclick="return confirm('Are you sure to delete?')"><i
                                                                    class="fa fa-trash"></i>&nbsp;Trash</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $item->blog_categories_id }}
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('admin/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }]

            });

        });

    </script>
@endpush
