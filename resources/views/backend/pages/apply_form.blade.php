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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Contact Us</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Contact
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
                    <table class="table align-items-center mb-0 contact-us hover w-100" id="data-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Apply Post</th>
                                <th>file </th>
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
            ajax: "{{ route('apply-form.index') }}",
            columns: [

                {
                    data: 'name',
                    name: 'name ',

                },
                {
                    data: 'email',
                    name: 'email',

                },
                {
                    data: 'number',
                    name: 'number',

                },
                {
                    data: 'slug',
                    name: 'slug',

                },
                {
                    data: 'file',
                    name: 'file ',

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
