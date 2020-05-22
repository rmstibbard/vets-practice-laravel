<form method="post">
    @csrf
    <div class="form-group">
        <label for="animal_name">Animal name</label>
        <input id="animal_name" name="animal_name" class="form-control"
            value="{{ $animal ?  $animal->animal_name ?? '' : '' }}">
    </div>
    <div class="form-group">
        <label for="animal_type">Animal type</label>
        <input id="animal_type" name="animal_type" class="form-control"
            value="{{ $animal ?  $animal->animal_type ?? '' : '' }}">
    </div>

    <div class="form-group">
        <label for="treatments">Treatments</label>
        <input id="treatments" name="treatments" class="form-control"
            value="{{ $animal ? $animal->treatments->implode('name',", ") ?? '' : '' }}">
    </div>

    <div class="form-group">
        <label for="dob">Date of birth</label>
        <input id="dob" name="dob" class="form-control"
            value="{{ $animal ? $animal->dob ?? '' : '' }}">
        <!-- Make friendly date? -->
    </div>

    <div class="form-group">
        <label for="weight">Weight (tons)</label>
        <input id="weight" name="weight" class="form-control"
            value="{{ $animal ?  $animal->weight ?? '' : '' }}">
    </div>

    <div class="form-group">
        <label for="height">Height (cm)</label>
        <input id="height" name="height" class="form-control"
            value="{{  $animal ?  $animal->height ?? '' : '' }}">
    </div>

    <div class="form-group">
        <label for="biteyness">Biteyness (1 - 5)</label>
        <input id="biteyness" name="biteyness" class="form-control"
            value="{{  $animal ?  $animal->biteyness ?? '' : '' }}">
    </div>

    <div class="form-group">
        <label for="owner">Owner</label>
        <select id="owner_id" name="owner_id">
            <option value = "{{ $animal ? $animal->owner->id : '' }}">{{ $animal ? $animal->owner->fullName() : '' }}</option>
            <option value = "{{ $animal ? $animal->owner->id : '' }}">-----------------</option>
            @foreach ($owners as $owner)
            <option value = "{{ $owner->id }}">{{ $owner->fullName() }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
