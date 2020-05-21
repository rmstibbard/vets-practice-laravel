@extends("app")
@section("content")
<div class="ca rd">
    <div class="owner" ">
        <h5 class="mb-1">
            {{ $owner->fullName() }}
        </h5>
        <h6>
            {{ $owner->fullAddress() }}
        </h6>

        <p>
            <a class="edit edit-owner" href="/owners/edit/{{ $owner->id }}">EDIT OWNER</a></span>
        </p>
    </div>
    <hr>

    <div class="owner-animals">

    <h3>{{ $owner->fullName() }}'s pets</h3>

        @foreach ($owner->animals as $animal)
            <p>
                <span class="animal-list-name">
                    <a href="/animals/{{ $animal->id }}" class="animal-link">
                        {{ $animal->animal_name() }}
                    </a>
                </span>
                <span class="animal-list-type">
                    - {{ ucfirst($animal->animal_type()) }}
                </span>
                <span class="animal-list-details">
                        {{ $animal->animalDetails() }}
                </span>
                @if ($animal->dangerous()==true)
                    <span class="dangerous">&nbsp;&nbsp;DANGEROUS!</span>
                @endif
                <span class="animal-list-edit">
                    <a class="edit-animal edit" href="/animals/edit/{{ $animal->id }}">Edit</a>
                </span>
            </p>
        @endforeach

@endsection
