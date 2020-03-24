@extends('layouts.layout')


@section('content')

 <div class="col-12">
    @if(!empty($id))
      <div class="alert alert-danger  " role="alert">Hai cancellato il record {{$id}}</div>
    @endif
    <div class="card-deck">
    @foreach ($cellulars as $cellular)
    <div class="card">
    <img src="{{$cellular->imgurl}}" Style="max-width: 50%;" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$cellular->marca}}</h5>
            <h4 class="card-title">{{$cellular->modello}}</h4>
            <p class="card-text">Peso:{{$cellular->peso}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Euro: {{$cellular->prezzo}} </small>
            <div class="d-flex justify-content-around">
              <a href="{{route('cellulars.show', $cellular)}}" class="btn btn-primary">Show</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection
