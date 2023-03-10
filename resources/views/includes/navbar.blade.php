<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('FrontEnd/images/logo.png') }}" alt="logo retech">
            </a>
            <button 
                class="navbar-toggler" 
                type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#PopularContent">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" 
                            id="navbarDropdown" 
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Link</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Link</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Link</a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">testimonial</a>
                    </li>
                </ul>

                {{-- @guest
                <form >
                    <button type="button" class="btn btn-login" >Masuk</button>
                </form>
                @endguest --}}

                @guest
                    {{-- Mobile Button --}}
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0" type="button"
                            onClick="event.preventDefault(); window.location = '{{ url('login') }}';">Masuk</button>
                    </form>
                    {{-- dekstop button --}}
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button  class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                             onClick="event.preventDefault(); window.location = '{{ url('login') }}';">Masuk</button>
                    </form>
                @endguest

                @auth
                    {{-- Mobile Button --}}
                    <form class="form-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
                    </form>
                    {{-- dekstop button --}}
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Keluar</button>
                    </form>
                @endauth

            </div>
        </div>
    </nav>
</div>
<!-- Akhir Navbar -->