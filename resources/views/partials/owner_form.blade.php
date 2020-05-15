<form method="post">
    @csrf
    <div class="form-group">
        <label for="firstname">First name</label>
        <input id="firstname" name="firstname" class="form-control" value="{{  $owner->firstname ?? '' }}">
    </div>
    <div class="form-group">
        <label for="lastname">Last name</label>
        <input id="lastname" name="lastname" class="form-control" value="{{ $owner->lastname  ?? '' }}">
    </div>
    <div class="form-group">
        <label for="address_1">Address Line 1</label>
        <input id="address_1" name="address_1" class="form-control" value="{{ $owner->address_1   ?? '' }}">
    </div>
    <div class="form-group">
        <label for="address_2">Address Line 2</label>
        <input id="address_2" name="address_2" class="form-control" value="{{ $owner->address_2   ?? '' }}">
    </div>
    <div class="form-group">
        <label for="town">Town</label>
        <input id="town" name="town" class="form-control" value="{{ $owner->town   ?? '' }}">
    </div>
    <div class="form-group">
        <label for="postcode">Postcode</label>
        <input id="postcode" name="postcode" class="form-control" value="{{ $owner->postcode   ?? '' }}">
    </div>
    <div class="form-group">
        <label for="landline">Landline</label>
        <input id="landline" name="landline" class="form-control" value="{{ $owner->landline   ?? '' }}">
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input id="mobile" name="mobile" class="form-control" value="{{ $owner->mobile   ?? '' }}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>