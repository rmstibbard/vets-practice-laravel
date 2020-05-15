@if ($animal->dangerous())
<h5 class="mb-1">{{ $animal->animal_name() . " - " . ucfirst($animal->animal_type()) . 
" (Dangerous)" }}
</h5>
<span class="text-danger font-weight-bold">{{ $animal->animalDetails() }}</span>
<a href="/animals/edit/{{ $animal->id }}">EDIT</a>
@else
<h5 class="mb-1">{{ $animal->animal_name() . " - " . ucfirst($animal->animal_type()) }} </h5>
{{ $animal->animalDetails() }}

<a href="/animals/edit/{{ $animal->id }}">EDIT</a>
@endif