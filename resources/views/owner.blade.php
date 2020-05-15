@extends("app")
@section("content")
<div class="card">

    <h5 class="mb-1">{{ $owner->fullName() }} </h5>

    {{ $owner->fullAddress() }}
    <br><br>

    @foreach ($owner->animals as $animal)
    <a href="/animals/{{ $animal->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            @include("partials/animal")
        </div>
    </a>
    @endforeach

</div>
@endsection