<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('homepage')}}">Beer Shop</a>

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
            <li class="nav-item active">
              {{-- Rotta About --}}
            <a class="nav-link" href="{{route('beers.index')}}">Info</a>
          </li>
          <li class="nav-item active">
            {{-- Rotta About --}}
          <a class="nav-link" href="{{route('beers.create')}}">Area riservata</a>
        </li>
</header>
