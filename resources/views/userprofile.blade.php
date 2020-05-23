@extends("app")
{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Your Profile</h1>
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Logged in as
                        {{ ucfirst(Auth::user()->name) }} ({{ Auth::user()->role }})
                    </h2>

                    <h2>Edit your profile</h2>
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input id="name" name="name" class="form-control"
                                value="{{ Auth::user()->name }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input id="email" name="name" class="form-control"
                                value="{{ Auth::user()->email }}">
                        </div>

                        <div class="form-group">
                            <label for="role">Role</label>
                            <input disabled id="role" name="name" class="form-control"
                                value="{{ Auth::user()->role }}">
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

