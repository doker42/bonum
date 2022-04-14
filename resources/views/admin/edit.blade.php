@extends('admin.admin_basic')

@section('content')

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Admin</h3>
            </div>

            <div class="card-body">

                @if(isset($admin))

                <form role="form" action="{{ route('update_admin', $admin) }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Name -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Admin name</label>
                                <input name="name" type="text" class="form-control float-right" value="{{ $admin->name }}" >
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Admin email</label>
                                <input name="email" type="text" class="form-control float-right" value="{{ $admin->email }}" >
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <!-- Password -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>new password</label>
                                <input name="password" type="password" class="form-control float-right" value="" >
                            </div>
                        </div>
                        <!-- Confirm Password -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>confirm  password</label>
                                <input name="password_confirmation" type="password" class="form-control float-right" value="" >
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>

                @endif
            </div>
        </div>
    </div>


@endsection
