@extends("app")
@section("content")

<div class="list-group owners-list">

    @foreach ($owners as $owner)
    <a href="/owners/{{ $owner->id }}" class="list-group-item list-group-item-action">

        <div class="owners-list">
            <h5 class="mb-1">{{ $owner->fullName() }} </h5>
            {{ $owner->fullAddress() }}
            <span class="owner-list-edit">
                <a class="btn btn-primary" href="/owners/edit/{{ $owner->id }}">Edit</a>
                <a onclick="confirm()" class="btn btn-danger" href="/owners/delete/{{ $owner->id }}">Delete</a>
            </span>
        </div>

    </a>
    @endforeach

</div>
@endsection
