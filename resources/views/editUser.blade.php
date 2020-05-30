@extends("app")
@section("content")

<h2>Edit User Details</h2>

<form method="post">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" name="name" class="form-control"
            value="{{ Auth::user()->name ?? '' }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name="email" class="form-control"
            value="{{ Auth::user()->email ?? '' }}">
    </div>

    <div class="form-group">
        <label for="role">Role</label>
        <input id="role" name="role" class="form-control"
            value="{{ Auth::user()->role ?? '' }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection
