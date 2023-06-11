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
<div class="card-body pt-4 p-3">

</div>
<div class="row">
    <div class="col-12">

        <div class="card mb-4">
            <ul class="list-group p-3">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Our Featured Services</h6>
                        <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Viking
                                Burrito</span></span>

                    </div>
                    <div class="ms-auto text-end">
                        {{--  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                class="far fa-trash-alt me-2"></i>Delete</a>  --}}
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">

                        <h6 class="mb-3 text-sm">Clients</h6>
                        <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Viking
                                Burrito</span></span>

                    </div>
                    <div class="ms-auto text-end">
                        {{--  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                class="far fa-trash-alt me-2"></i>Delete</a>  --}}
                        <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('client-review.index') }}"><i
                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                    </div>
                </li>
            </ul>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="  px-2">
                    {{--  <h5 class="float-left mt-2">Our Clients </h5>  --}}
                    <h6 class="float-left mt-2">Featured Services </h6>
                    <a class="btn btn-primary mt-2 mb-0 btn-sm ajax-modal float-end"
                        href="{{ route('featured.create') }}" data-title="{{ _lang('Add New') }}">
                        <i class="fas fa-plus mr-1"></i>
                        {{ _lang('Add New') }}
                    </a>
                    <table class="table align-items-center mb-0 data-table  hover w-100" id="data-table">
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
