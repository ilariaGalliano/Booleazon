@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Insert new beer</h1>
        
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
                <label for="path_img">Inserisci img</label>
                <input class="form-control" type="file" name="path_img" id="path_img"  accept="image/*">
            </div>

            <div class="form-group">
                <input class="btn btn-dark" type="submit" value="Add">
            </div>




        </form>






       
    
        
</div>


@endsection