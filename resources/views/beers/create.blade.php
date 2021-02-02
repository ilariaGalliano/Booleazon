@extends('layouts.main')

@section('content')

<div class="container">
    <h1 class="pt-3 pb-3 text-center">Insert new beer</h1>
        
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif



        <form action="{{ route('beers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"> {{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
            </div>

            <div class="form-group">
                <label for="origin">Origin</label>
                <input class="form-control" type="text" name="origin" id="origin" value="{{ old('origin') }}">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type" value="{{ old('type') }}">
            </div>

            <div class="form-group">
                <label for="path_img">Inserisci img</label>
                <input class="form-control" type="file" name="path_img" id="path_img"  accept="image/*">
            </div>

            <div class="form-group d-flex justify-content-center pt-3 ">
                <input class="btn btn-warning" type="submit" value="Add">
            </div>


            <a href="{{route('beers.index')}}">Shop area riservata</a>


        </form>






       
    
        
</div>


@endsection