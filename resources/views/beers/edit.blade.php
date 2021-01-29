@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Edit: {{$beer->title}}</h1>
        
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



        <form action="{{ route('beers.update', $beer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $beer->title) }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"> {{ old('description', $beer->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ old('price', $beer->price) }}">
            </div>

            <div class="form-group">
                <label for="origin">Origin</label>
                <input class="form-control" type="text" name="origin" id="origin" value="{{ old('origin', $beer->origin) }}">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type" value="{{ old('type', $beer->type) }}">
            </div>
            <div class="form-group">
                <label for="path_img">Beer image</label>
                @isset($beer->path_img)
                    <div class="wrap-image">
                    <img width="200" src="{{asset('storage/' . $beer->path_img)}}" alt="{{$beer->title}}">
                    </div>
                    <h6>Change:</h6>
                @endisset
                <input class="form-control"  type="file" name="path_img" id="path_img" accept="image/*">
            </div>

            <div class="form-group">
                <input class="btn btn-dark" type="submit" value="Update">
            </div>

        </form>
    
        
</div>


@endsection