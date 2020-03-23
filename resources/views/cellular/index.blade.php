@extends('layouts.layout')


@section('content')
 <div class="col-12">
    <div class="card-deck">
    @foreach ($collection as $item)
    <div class="card">
    <img src="{{$item->imgurl}}" class="card-img-top" style="width: 10rem;" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$item->marca}}</h5>
            <h4 class="card-title">{{$item->modello}}</h4>
            <p class="card-text">Peso:{{$item->peso}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Euro: {{$item->prezzo}} </small>
        </div>
    </div> 
    @endforeach
    </div>
</div>
    
@endsection