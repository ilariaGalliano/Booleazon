@extends('layouts.main')

@section('content')

<div class="container">
    <h1>{{ $beer->title }}</h1>
    <p>{{ $beer->description}}</p>
    
        
</div>


@endsection