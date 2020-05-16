@extends("app")
@section("content")
<div class="card">

    <h5 class="mb-1">
        {{ $owner->fullName() }}
    </h5>
    <h6>
        {{ $owner->fullAddress() }}
    </h6>
    <p>
        <a class="edit edit-owner" href="/owners/edit/{{ $owner->id }}">EDIT OWNER DETAILS</a></span>
    </p>

    @foreach ($owner->animals as $animal)
     <a href="/animals/{{ $animal->id }}" class="list-group-item list-group-item-action">

        {{ $animal->animal_name() . " - " . ucfirst($animal->animal_type()) }}
            {{ $animal->animalDetails() }}

            <a class="edit edit-animal" href="/animals/edit/{{ $animal->id }}">EDIT ANIMAL DETAILS</a>


    </a>
    @endforeach

</div>
@endsection
