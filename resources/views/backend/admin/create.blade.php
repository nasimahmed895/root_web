@extends('backend.app')
@section('container')
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-2">
                        <h6 class="float-left" style="float: left">User create</h6>

                    </div>
                    <div class="card-body px-0 pt-0 pb-2 bg-white">
                        <div class="card-body">

                            <form action="{{ route('admin.store') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name"
                                        value="{{ old('first_name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name"
                                        value="{{ old('last_name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <button type="submit" id="next-button " class="btn btn-primary float-end">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
