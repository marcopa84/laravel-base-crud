@extends('layouts.layout')


@section('content')
 <div class="col-4">
    <div class="card-deck">
    <div class="card">
    <img src="{{$cellular->imgurl}}" Style="max-width: 50%;" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{$cellular->marca}}</h3>
            <h3 class="card-title">{{$cellular->modello}}</h3>
            <h3 class="card-text">Peso:{{$cellular->peso}}</h3>
            <h3 class="card-text">Euro:{{$cellular->prezzo}}</h3>
        </div>
        <div class="card-footer">
          <form action="{{route('cellulars.destroy', $cellular)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
          </form>
        </div>
    </div>
    </div>
  </div>
@endsection
