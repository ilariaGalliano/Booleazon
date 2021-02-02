@extends('layouts.main')

@section('content')

<div class="container text-center">

    <h1 class="pt-4">{{ $beer->title }}</h1>

    @if (!empty($beer->path_img))
        <img class="mb-3" width="400" src="{{asset('storage/' . $beer->path_img)}}" alt="{{$beer->title}}">
    @else
        <img class="mb-3" width="400" src="{{asset('img/no-img.png')}}" alt="{{$beer->title}}">
    @endif

    <p>Descrizione: {{ $beer->description}}</p>
    <p>Tipologia: {{ $beer->type}}</p>
    <p>Origine: {{ $beer->origin}}</p>
    <p>Prezzo: {{ $beer->price}}€</p>
    

  {{--   <div class="form-group">
        <a  href="{{route('beers.edit', $beer->slug)}}"></a>
        <input class="btn btn-secondary" type="submit" value="Update">
    </div> --}}

    {{-- <form  action="{{route('beers.destroy', $beer->id)}}" method="POST">
        @csrf
        @method("DELETE")
        
        <input class="btn btn-secondary" type="submit" value="Delete" >
    </form> --}}


</div>


@endsection