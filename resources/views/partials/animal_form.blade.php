<form method="post">
    @csrf
    <div class="form-group">
        <label for="animal_name">Animal name</label>
        <input id="animal_name" name="animal_name" class="form-control" value="{{  $animal->animal_name ?? '' }}">
    </div>
    <div class="form-group">
        <label for="animal_type">Animal type</label>
        <input id="animal_type" name="animal_type" class="form-control" value="{{  $animal->animal_type ?? '' }}">
    </div>

    <div class="form-group">
        <label for="dob">Date of birth</label>
        <input id="dob" name="dob" class="form-control" value="{{  $animal->dob ?? '' }}">
        <!-- Make friendly date? -->
    </div>

    <div class="form-group">
        <label for="weight">Weight (tons)</label>
        <input id="weight" name="weight" class="form-control" value="{{  $animal->weight ?? '' }}">
    </div>

    <div class="form-group">
        <label for="height">Height (cm)</label>
        <input id="height" name="height" class="form-control" value="{{  $animal->height ?? '' }}">
    </div>

    <div class="form-group">
        <label for="biteyness">Biteyness (1 - 5)</label>
        <input id="biteyness" name="biteyness" class="form-control" value="{{  $animal->biteyness ?? '' }}">
    </div>

    <div class="form-group">
        <label for="owner_id">Owner ID</label>
        <!-- input id="owner_id" name="owner_id" class="form-control" value="1" -->
        <input id="owner_id" name="owner_id" class="form-control" value="{{  $animal->owner_id ?? '' }}">
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>