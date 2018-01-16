@extends('layout')
@section('content')
    <h2>Upload photos</h2>
    <form class="form-horizontal" action="{{ route('upload', $id)}} " method="post" enctype="multipart/form-data">
        {!! csrf_field() !!} {{-- let it be apsauga nuo spammeriu--}}

        <p>Select image to upload for {{$character->name}}:</p>
        <input type="file" name="upload">
        @if ($errors->has('upload'))
          <i class="has-error ">{{ $errors->first('upload') }}</i></br>
        @endif
        <br>
        <input type="submit" value="Upload Image" name="submit">
        <br>

    </form>
    <br>
    <a href="{{ route('index') }}" class="btn btn-primary">Back to main page</a>
@endsection
