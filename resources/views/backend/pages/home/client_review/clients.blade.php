@extends('backend.app')
@section('container')
@section('css')
@endsection
<!-- Navbar -->
<div class=" py-1 px-3 pb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Home</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Our Clients
        </h6>
    </nav>
</div>
<!-- End Navbar -->
<div class="row">
    <div class="col-12">

        <div class="card mb-4">
            <div class="card-body p-3 pt-0 pb-2">
                <div class="  px-2">
                    <div class="d-flax  justify-center align-items-center">
                        <h5 class="float-left mt-2">Our Clients </h5>
                        <a class="btn btn-primary mt-2 mb-0 btn-sm ajax-modal float-end"
                            href="{{ route('client-review.create') }}" data-title="{{ _lang('Add New') }}">
                            <i class="fas fa-plus mr-1"></i>
                            {{ _lang('Add New') }}
                        </a>
                    </div>
                    <table class="table align-items-center mb-0 mt-2 data-table  hover w-100" id="data-table">
                        <thead>
                            <tr>
                                <th>Image
                                </th>
                                <th>
                                    name</th>
                                <th>
                                    Designation</th>

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
            ajax: "{{ route('client-review.index') }}",
            columns: [{
                    data: 'image',
                    name: 'image ',

                },

                {
                    data: 'name',
                    name: 'name ',

                },
                {
                    data: 'designation',
                    name: 'designation ',

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
