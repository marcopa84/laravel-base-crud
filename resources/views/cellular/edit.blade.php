@extends('layouts.layout')


@section('content')
    <div class="col-6">
        <form action="{{route('cellulars.update', $cellular)}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" class="form-control" name="marca" value="{{$cellular->marca}}">
        </div>
        <div class="form-group">
        <label for="modello">Modello:</label>
        <input type="text" class="form-control" name="modello" value="{{$cellular->modello}}">
        </div>
        <div class="form-group">
        <label for="peso">peso:</label>
        <input type="number" min="1" max="300" class="form-control" name="peso" value="{{$cellular->peso}}">
        </div>
        <div class="form-group">
        <label for="prezzo">prezzo:</label>
        <input type="number"  min="1" max="2999" class="form-control" name="prezzo" value="{{$cellular->prezzo}}">
        </div>
        <div class="form-group">
        <label for="imgurl">Indirizzo dell'immagine:</label>
        <input type="text" class="form-control" name="imgurl" value="{{$cellular->imgurl}}">
        <input type="hidden" name="id" value="{{$cellular->id}}">
        </div>
        <button type="submit" class="btn btn-success ">Aggiorna</button>
        </form>
    </div>
@endsection
