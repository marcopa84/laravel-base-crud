@include('layouts.partials._header')


<header >

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
            {{-- <img src="https://images-eu.ssl-images-amazon.com/images/G/29/amazonlaunchpad/it/Launch/Subnav/1045272_EU_22_6_17_Launchpad_Store_Pages_Subnav_Logo_237x50._CB485945317_.png" alt="Amazon"></a> --}}
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/320px-Amazon_logo.svg.png" alt="Amazon"></a>
            <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav justify-content-around" style="width:50%;">
                    <li class="nav-item {{(Route::currentRouteName() == 'home') ? "active":""}}">
                        <a class="btn btn-outline-primary" href="{{route('home')}}">Home</a>
                    </li>

                    <li class="nav-item">
                      <a class="btn btn-primary" href="{{route('cellulars.create')}}">Aggiungi cellulare</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

</header>

<main class="margin-top-90">
    <div class="contaner">
        <div class="row">
            <div class="col-12">
             @yield('content')
            </div>
        </div>
    </div>
</main>

<footer>

</footer>
 @yield('script')


@include('layouts.partials._footer')
