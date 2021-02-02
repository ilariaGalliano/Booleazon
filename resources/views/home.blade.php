@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1>
            Birra Ricchi & Poveri HOME
        </h1>
        

        <img class="mt-3 mb-4" width="1410" style="height: 800px;" src="https://www.foodweb.it/wp-content/uploads/2020/02/Heallo.jpg" alt="">

    <div class="container">

        <div class="hero">
            @foreach ($beers as $beer)
                 <h1 class="text-center">{{ $beer->title }}</h1>
                 <img width="400" src="{{ asset('storage/' . $beer->path_img) }}" alt="{{ $beer->title }}">
    
            @endforeach
        </div>
        
    </div>

    </div>
@endsection
