@extends("app")
@section("content")

<div class="list-group">

    @foreach ($animals as $animal)
    <a href="/animals/{{ $animal->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            @include("partials/animal")
        </div>

    </a>
    @endforeach

</div>
@endsection