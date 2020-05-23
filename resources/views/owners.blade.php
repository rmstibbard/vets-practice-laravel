<script defer src="../js/confirm.js"></script>
@extends("app")
@section("content")

    <div class="owners-list">
        @foreach ($owners as $owner)
            <p>
                <span class="owner-list-name">
                    <a href="/owners/{{ $owner->id }}" class="owner-link">
                        {{ $owner->fullName() }}
                    </a>
                </span>
                <br>

                <span class="owner-list-details">
                        {{ $owner->fullAddress() }}
                </span>

                <span class="owner-list-edit">
                    <a class="btn btn-outline-dark"
                        href="/owners/edit/{{ $owner->id }}">
                        Edit
                    </a>
                    <a onclick="confirm()" class="btn btn-outline-danger"
                        href="/owners/delete/{{ $owner->id }}">
                        Delete
                    </a>
                </span>

        @endforeach
    </div>

</div>
@endsection
