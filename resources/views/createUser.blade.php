@extends("app")
{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Your Profile</h1>
                </div>

                <div class="card-body">

                    <form method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" name="name" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" name="password" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="role">Role</label>
                            <input id="role" name="role" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection

