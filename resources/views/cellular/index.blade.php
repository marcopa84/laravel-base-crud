@extends('layouts.layout')


@section('content')

 <div class="col-12">

  @if (session('delete'))
    <div class="alert alert-danger" role="alert">Hai cancellato il record {{session('delete')->id}}</div>
  @endif

  @if (session('insert'))
    <div class="alert alert-primary" role="alert">Hai inserito un nuovo record id:{{session('insert')->id}} della: {{session('insert')->marca}} Modello: {{session('insert')->modello}} </div>
  @endif

  @if (session('update'))
    <div class="alert alert-success" role="alert">Hai aggiornato il record {{session('update')->id}} della: {{session('update')->marca}} Modello: {{session('update')->modello}} </div>
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
            <h2 class="text-muted">Euro: {{$cellular->prezzo}} </h2>
            <div class="d-flex justify-content-around">
              <a href="{{route('cellulars.show', $cellular)}}" class="btn btn-primary">Show</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection
