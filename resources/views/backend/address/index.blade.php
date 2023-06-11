@extends('backend.app')
@section('container')
    <!-- Navbar -->
    <div class=" py-1 px-3 pb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Address</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Address
            </h6>
        </nav>
    </div>
    <!-- End Navbar -->
    <div class="row">
        <div class="col-12">

            <div class="card mb-4">

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="  p-4">
                        {{--  <h5 class="float-left mt-2">Our Clients </h5>  --}}
                        <h6 class="float-left mt-2">Auth Table </h6>
                        <a class="btn btn-primary mt-2 mb-0 btn-sm ajax-modal float-end"
                            href="{{ route('address.create') }}" data-title="{{ _lang('Add New') }}">
                            <i class="fas fa-plus mr-1"></i>
                            {{ _lang('Add New') }}
                        </a>
                        <table class="table align-items-center mb-0 mt-3 data-table  hover w-100" id="data-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>address </th>

                                    <th>
                                        Code</th>
                                    <th>
                                        phone</th>
                                    <th>
                                        image</th>
                                    <th>
                                        status</th>
                                    <th>
                                        action</th>
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
        $(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                paginate: false,
                searching: false,
                info: false,
                ajax: "{{ route('address.index') }}",
                columns: [{
                        data: 'title',
                        name: 'title'
                    }, {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'country_code',
                        name: 'country_code'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },

                    {
                        data: 'status',
                        name: 'status align-middle text-center text-sm',

                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endsection
