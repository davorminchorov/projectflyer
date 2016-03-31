@extends('layout')


@section('content')

    <div class="row">
        <div class="col-md-4">
            <h1>{{ $flyer->street }}</h1>
            <h2>{{ $flyer->price }}</h2>

            <hr>

            <div class="description">
                {!! nl2br($flyer->description) !!}
            </div>
        </div>

        <div class="col-md-8 gallery">
            @foreach($flyer->photos->chunk(4) as $set)
                <div class="row">
                    @foreach($set as $photo)
                        <div class="col-md-3 gallery__image">

                            {!! link_to('Delete', "/photos/{$photo->id}", 'DELETE')  !!}

                            {{--<form action="/photos/{{ $photo->id }}" method="POST">--}}
                                {{--{!! csrf_field() !!}--}}

                                {{--<input type="hidden" name="_method" value="DELETE">--}}

                                {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                            {{--</form>--}}

                            <a href="/{!! $photo->path !!}" data-lity>
                                <img src="/{!! $photo->thumbnail_path !!}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach

            @if($user and $user->owns($flyer))

                <form id="addPhotosForm"
                      action="{!! route('store_photo_path', [$flyer->zip, $flyer->street]) !!}"
                      method="POST"
                      class="dropzone"
                      enctype="multipart/form-data"
                        >
                    {!! csrf_field() !!}
                </form>
            @endif
        </div>
    </div>

@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>

    <script>
        Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFileSize: 3,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        };
    </script>
@stop