<script defer src="../js/confirm.js"></script>
@extends("app")

@section("content")

    <div class="animal">
        <p class="animal-name">
            {{ $animal->animal_name()  }}
            -
            <span class="animal-type">
                {{ ucfirst($animal->animal_type()) }}
            </span>
        </p>
        <p class="animal-details">
            {{ $animal->animalDetails() }}
        </p>

        @if ($animal->dangerous() == true)
            <p class="dangerous">DANGEROUS</p>
        @endif

        <p>
            <a class="btn btn-primary" href="/animals/edit/{{ $animal->id }}">Edit</a>
            <a onclick="confirm()" class="btn btn-danger" href="/animals/delete/{{ $animal->id }}">Delete</a>
        </p>

        <p class="owner">
            Owner:
                <a class="owner-link" href="/owners/{{ $animal->owner->id }}">
                {{ $animal->owner->fullName() }}
            </a>

        </p>

    </div>

@endsection
