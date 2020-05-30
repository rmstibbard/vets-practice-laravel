@extends("app")
@section("content")
<div class="card">
    <div class="user" ">
        <h5 class="mb-1">
            {{ $user->name }}
        </h5>
        <p>
            <span>
            {{ $user->email }}
            </span>
        <span>
            {{ $user->role }}
        </span>
        <span class="user-list-edit">
            <a class="btn btn-outline-dark"
                href="/users/edit/{{ $user->id }}">
                Edit
            </a>
            <a onclick="confirm()" class="btn btn-outline-danger"
                href="/users/delete/{{ $user->id }}">
                Delete
            </a>
        </span>
        </p>

    </div>
</div>

@endsection
