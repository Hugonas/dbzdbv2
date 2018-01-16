@extends('layout')
@section('content')

  <div class="row">
       <div class="col-xs-12 ">
         <div class="thumbnail">
           @if ($character->featured_photo !== NULL)
             <img src="{{$character->featured_photo->url}}" alt="...">
           @endif

           <div class="caption">
             <h3 class="vidurys">{{ $character->name }}</h3>
             <p>{{ $character->description}}</p>
             <p>Power_level: {{ $character->power_level}}</p>
             <p><a href="{{ route('edit', $character->id) }}" class="btn btn-primary" role="button">Edit</a>
               <a href="{{ route('destroy', $character->id) }}" class="btn btn-default" role="button">Trinti</a>
               <a href="{{ route('create-photo', $character->id) }}" class="btn btn-default" role="button">Add photo</a></p>
               <a href="{{ route('index')}}" class="btn btn-default" role="button">Back to home</a></p>
           </div>
         </div>
       </div>
   </div>
   <div class="row">
     @foreach($character->photos as $photo)
     <div class="col-xs-3">
       <img class="img-responsive" src="{{$photo->url}}" alt="">
       <a href="{{ route('destroy-photo', $photo->id)}}" class="btn btn-danger">Delete photo</a>
     </div>
    @endforeach

   </div>




@endsection
