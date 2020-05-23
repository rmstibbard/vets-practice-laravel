@extends("app")
@section("content")
<div class="card">
    <div class="owner" ">
        <h5 class="mb-1">
            {{ $owner->fullName() }}
        </h5>
        <p>
            {{ $owner->fullAddress() }}
        </p>
        <p>
            {{ $owner->phoneNumbers() }}

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
                    <a class="btn btn-outline-dark"
                        href="/animals/edit/{{ $animal->id }}">
                        Edit
                    </a>
                    <a onclick="confirm()" class="btn btn-outline-danger"
                        href="/animals/delete/{{ $animal->id }}">
                        Delete
                    </a>
                </span>

            </p>
        @endforeach

@endsection
