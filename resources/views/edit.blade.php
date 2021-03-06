@extends('layout')
@section('content')

<form class="form-horizontal" action="{{ route('update', $character->id)}}" method="post">
  @include('form',[
'name' => $character->name,
'race' => $character->race,
'power_level' => $character->power_level,
'description' => $character->desciption

  ])

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
@endsection
