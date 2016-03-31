@inject('countries', 'App\Http\Utilities\Country')

<div class="row">
    <div class="col-md-6">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="street" class="label-control">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="{!! old('street') !!}">
        </div>

        <div class="form-group">
            <label for="city" class="label-control">City:</label>
            <input type="text" name="city" id="city" class="form-control" value="{!! old('city') !!}">
        </div>

        <div class="form-group">
            <label for="zip" class="label-control">Zip/Postal Code:</label>
            <input type="text" name="zip" id="zip" class="form-control" value="{!! old('zip') !!}">
        </div>

        <div class="form-group">
            <label for="street" class="label-control">Country:</label>
            <select name="country" id="country" class="form-control">
                @foreach($countries::all() as $country => $code)
                    <option value="{!! $code !!}">{!! $country !!}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="state" class="label-control">State:</label>
            <input type="text" name="state" id="state" class="form-control" value="{!! old('state') !!}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="price" class="label-control">Sale Price:</label>
            <input type="number" name="price" id="price" class="form-control" value="{!! old('price') !!}">
        </div>

        <div class="form-group">
            <label for="description" class="label-control">Home Description:</label>
            <textarea type="text" name="description" id="description" class="form-control" rows="10"></textarea>
        </div>

    </div>

    <div class="col-md-12">
        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Flyer</button>
        </div>
    </div>

</div>