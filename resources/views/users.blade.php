<script defer src="../js/confirm.js"></script>
@extends("app")
@section("content")

    <div class="users-list">
        <table>
            <tbody>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
                @foreach ($users as $user)
                <tr class="user-list-name">
                   <td><a href='/users/{{$user->id }}'>{{$user->name }}</a></td>
                   <td>{{$user->email }}</td>
                   <td>{{$user->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
