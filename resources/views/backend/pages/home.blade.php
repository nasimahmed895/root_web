@extends('backend.app')
@section('container')
@section('css')
    <style>
        .data-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .data-table tr:hover {
            background-color: #ddd;
        }
    </style>
@endsection
<!-- Navbar -->
<div class=" py-1 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Home</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Featured Services
        </h6>
    </nav>
</div>
<!-- End Navbar -->
<div class="card-body pt-4 p-3">

</div>
<div class="row">
    <div class="col-12">

        <div class="card mb-4">

            <div class="card-body px-0 pt-0 pb-2">
                <div class="  p-4">
                    {{--  <h5 class="float-left mt-2">Our Clients </h5>  --}}
                    <h6 class="float-left mt-2">Featured Services </h6>
                    <a class="btn btn-primary mt-2 mb-0 btn-sm ajax-modal float-end"
                        href="{{ route('featured.create') }}" data-title="{{ _lang('Add New') }}">
                        <i class="fas fa-plus mr-1"></i>
                        {{ _lang('Add New') }}
                    </a>
                    <table class="table align-items-center mb-0 mt-3 data-table  hover w-100" id="data-table">
                        <thead>
                            <tr>
                                <th>Image
                                </th>
                                <th>
                                    Heading</th>
                                <th>
                                    Text</th>
                                <th>
                                    Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.data-table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paginate: false,
            searching: false,
            info: false,
            //pageLength: 1,

            ajax: "{{ route('featured.index') }}",
            columns: [{
                    data: 'image',
                    name: 'image ',

                },

                {
                    data: 'heading',
                    name: 'heading ',

                },
                {
                    data: 'text',
                    name: 'text ',

                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        })

    });
</script>
@endsection
