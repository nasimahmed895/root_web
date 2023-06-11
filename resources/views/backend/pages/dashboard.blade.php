@extends('backend.app')
@section('container')
    <style>
        .col_height {
            height: 100vh
        }

        .center {
            height: 100%;
            position: relative;
            color: black;
        }

        .center h1 {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: black;

        }
    </style>
    <div class="row">
        <div class="col col_height">
            <div class="center">
                <h1>welcome</h1>
            </div>

        </div>
    </div>
@endsection
