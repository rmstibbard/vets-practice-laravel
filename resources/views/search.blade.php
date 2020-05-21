@extends("app")
@section("content")

<div class="list-group owners-list">
    <h2>Matching Owners</h2>

    @foreach ($ownerResults as $owner)
    <a href="/owners/{{ $owner->id }}" class="list-group-item list-group-item-action">

        <div class="owners-list">

            <h5 class="mb-1">{{ $owner->firstname . " " . $owner->lastname  }} </h5>
            {{
            $owner->address_1 . ", " . $owner->address_2 . ", " . $owner->town . ", " . $owner->postcode . ". Landline: " . $owner->landline . ". Mobile: " . $owner->mobile
            }} <!-- Repetitive -->

        </div>

    </a>
    @endforeach

</div>

<br><br>

<div class="list-group animals-list">
    <h2>Matching Animals</h2>

    @foreach ($animalResults as $animal)
    <a href="/animals/{{ $animal->id }}" class="list-group-item list-group-item-action">

        <div class="animals-list">

            <h5 class="mb-1">{{ $animal->animal_name . " - " . ucfirst($animal->animal_type) }} </h5>
            {{
                 "DoB: " . date('j M Y', strtotime($animal->dob)) . ". Weight: " . $animal->weight . "kg. Height: " . $animal->height . "cm. Biteyness score: " . $animal->biteyness
            }}

        </div>

    </a>
    @endforeach

</div>

@endsection

