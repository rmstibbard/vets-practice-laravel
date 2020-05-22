<script defer src="../js/confirm.js"></script>
@extends("app")
@section("content")

    <div class="animals-list">
        @foreach ($animals as $animal)
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
                    <a class="btn btn-primary" href="/animals/edit/{{ $animal->id }}">Edit</a>
                    <a onclick="confirm()" class="btn btn-danger" href="/animals/delete/{{ $animal->id }}">Delete</a>
                </span>
            </p>
        @endforeach
    </div>

</div>
@endsection
