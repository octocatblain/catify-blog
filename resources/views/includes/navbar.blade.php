<div class="sticky  bg-primary">
    <nav class="navbar navbar-expand-lg navbar-dark mx-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01 ">
            <a class="navbar-brand" href="/">{{ config('app.name', 'Catify') }}</a>
            <ul class="nav mr-auto mt-2 mt-lg-0 d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home
                        {{-- <span class="sr-only">(current)</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/products') }}">Products</a>
                </li>

            </ul>

            {{-- navbar right side --}}
            <ul class="navbar-nav navbar-right mr-3">
                <li class="nav-item"><a class="nav-link" href="/posts/create">Create Post</a></li>
            </ul>



            {{-- search form --}}
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

</div>
