<div class="l_col adrs">
    <h2>Add New Address</h2>

    <form action="/adresses/new" method="post">
        @csrf
        <div class="field">
            <label>Name *</label>
            <input type="text" name="name" value="" palceholder="" class="vl_empty" />
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="field">
            <label>Your city *</label>
            <select name="city" class="vl_empty">
                <option class="plh"></option>
                <option value="1">Dubai</option>
                <option value="2">Abu Dhabi</option>
            </select>
            @if ($errors->has('city'))
                <span class="text-danger">{{ $errors->first('city') }}</span>
            @endif
        </div>
        <div class="field">
            <label>Your area *</label>
            <select name="area">
                <option class="plh"></option>
                <option>Abu Hail</option>
                <option>Al Buteen</option>
            </select>
            @if ($errors->has('area'))
                <span class="text-danger">{{ $errors->first('area') }}</span>
            @endif
        </div>

        <div class="field">
            <label>Street</label>
            <input type="text" name="street" value="" palceholder="" class="vl_empty" />
        </div>
        <div class="field">
            <label>House # </label>
            <input type="text" name="house" value="" palceholder="House Name / Number" />
        </div>

        <div class="field">
            <label class="pos_top">Additional information</label>
            <textarea name="additional_info"></textarea>
        </div>

        <div class="field">
            <input type="submit" value="add address" class="green_btn" />
        </div>
    </form>
</div>
