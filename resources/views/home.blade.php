@extends('layouts.main')

@section('content')
    <div class="text-center">

       <img class="mb-3" src="{{ asset('img/logo.jpg') }}" alt="birra">

        
    <div class="container" style="background-image: url('/docs/4.0/assets/brand/bootstrap-solid.svg')";>

        <div class="hero row">
            @foreach ($beers as $beer)

            <div class="col-sm mb-4">
                
                <a class="text-decoration-none" href="{{route('beers.show', $beer->slug)}}">
                    <img class="mb-2 mt-2" width="300" height="430" src="{{ asset('storage/' . $beer->path_img) }}" alt="{{ $beer->title }}">
                    <h3 style="color: #343a40;" class="text-center mb-2">{{ $beer->title }}</h3>
                    Visualizza prodotti
                </a>
            </div>
                
            @endforeach
        </div>
        
    </div>

    </div>
@endsection
