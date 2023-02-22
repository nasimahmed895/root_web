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
        <h6 class="font-weight-bolder text-white mb-0">Contact Us
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

                    <a class="btn btn-primary mt-2 mb-2 btn-sm text-white float-right"
                        href="{{ route('job-post.create') }}" data-title="{{ _lang('Add New') }}">
                        <i class="fas fa-plus mr-1"></i>
                        {{ _lang('Add New') }}
                    </a>
                    <table class="table align-items-center mb-0 contact-us hover w-100" id="data-table">
                        <thead>
                            <tr>
                                <th>title </th>
                                <th>vacancy </th>
                                <th>work_level </th>
                                <th>experience </th>
                                <th>salary </th>
                                <th>job_time </th>
                                <th>status </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="result"></div>
@endsection
@section('javascript')
<script>
    function copyToClipboard() {
        const buttons = document.getElementsByTagName("input");
        const buttonPressed = e => {
            // result.innerHTML = `ID of <em>${e.target.innerHTML}</em> is <strong>${e.target.id}</strong>`;
            // console.log(e.target.id);
            document.getElementById(e.target.id).select();
            document.execCommand('copy');

        }

        for (let button of buttons) {
            button.addEventListener("click", buttonPressed);
        }

    }
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.contact-us').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('job-post.index') }}",
            columns: [{
                    data: 'title',
                    name: 'title',

                },
                {
                    data: 'vacancy',
                    name: 'vacancy',
                },
                {
                    data: 'work_level',
                    name: 'work_level',

                },
                {
                    data: 'experience',
                    name: 'experience',

                },
                {
                    data: 'salary',
                    name: 'salary',

                },

                {
                    data: 'job_time',
                    name: 'job_time',

                },
                {
                    data: 'status',
                    name: 'status',

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
