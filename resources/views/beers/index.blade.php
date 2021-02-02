@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Le nostre birre</h1>
    <ul>
        @foreach ($beers as $beer)
            <li class="list-unstyled">
               <h2 class="mt-3">{{$beer->title}}</h2> 
               <p> {{$beer->description}}</p>
               <h3>Price: {{$beer->price}}€</h3>
               <h3>{{$beer->origin}}</h3>
               <h6>Available: {{$beer->created_at}}</h6>
               <a href="{{route('beers.show', $beer->slug)}}">Show more</a>
            </li>
        @endforeach
    </ul>
        
</div>


@endsection