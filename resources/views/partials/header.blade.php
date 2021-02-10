<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(195,196,72,1) 32%, rgba(208,148,84,0.8828665255164566) 78%);">>
        <a class="navbar-brand" href="{{route('homepage')}}">Ricchi & Poveri Beer Shop</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                {{-- Rotta Home --}}
              <a class="nav-link" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item active">
                {{-- Rotta About --}}
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            {{-- <li class="nav-item active">
              
            <a class="nav-link" href="{{route('beers.index')}}">Shop</a>
          </li> rotta shop- area riservata --}}
          <li class="nav-item active">
            {{-- Rotta Area riservata --}}
            <a class="nav-link" href="{{route('beers.create')}}">Area riservata</a>
        </li>
</header>
