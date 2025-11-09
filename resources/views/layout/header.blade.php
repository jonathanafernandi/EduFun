<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid ms-4 me-5">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo/EduFunLogo.png') }}" alt="" width="75" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold justify-content-end gap-5">
                        <li class="nav-item">
                            <a class="nav-link @yield('nav-link-home')" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @yield('nav-link-category-toggle')" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Data Science</a></li>
                                <li><a class="dropdown-item" href="#">Network Security</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('nav-link-writers')" href="#">Writers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('nav-link-about-us')" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('nav-link-popular')" href="#">Popular</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>