<script defer src="../js/confirm.js"></script>
@extends("app")
@section("content")

<div class="users-list">
    @foreach ($users as $user)
        <p class="user-list-name">
                <a href="/users/{{ $user->id }}" class="user-link">
                    {{ ucfirst($user->name) }}
                </a>
        </p>
        <p>
            <span class="user-list-details">
                    Email: {{ $user->email }}
            </span>

            <span class="user-list-details">
                    Role: {{ $user->role }}
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


    @endforeach

    <a href="/users/create">
        <button class="btn btn-outline-dark" style="margin-right: 20px">
            CREATE NEW USER
        </button>
    </a>

</div>
@endsection
