@if(count($errors) > 0)
    <div class="alert alert-danger">
        <h4>Oops! There were some errors:</h4>
        <ul>
            @foreach($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif