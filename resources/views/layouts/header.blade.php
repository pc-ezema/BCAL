<header
    class="main-header navbar-light header-sticky header-sticky-smart header-mobile-xl">
    <div class="sticky-area">
        <div class="container container-xxl">
            <nav class="navbar navbar-expand-xl px-0 w-100">
                <a class="navbar-brand mr-7" href="{{route('index')}}">
                    <img
                        src="{{URL::asset('images/page/logo.png')}}" width="200"
                        alt="{{config('app.name')}}"
                        class="d-none d-xl-inline-block" />
                    <img
                        src="{{URL::asset('images/page/logo-white.png')}}" width="200"
                        alt="{{config('app.name')}}"
                        class="d-inline-block d-xl-none" />
                </a>
                <div class="d-flex d-xl-none ml-auto">
                    <button
                        class="navbar-toggler border-0 px-0 ml-0"
                        type="button"
                        data-toggle="collapse"
                        data-target="#primaryMenu05"
                        aria-controls="primaryMenu05"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
                    </button>
                </div>
                <div
                    class="collapse navbar-collapse mt-3 mt-xl-0 flex-grow-0"
                    id="primaryMenu05">
                    <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                        <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4 {{ (request()->is('/')) ? 'active' : '' }}">
                            <a class="nav-link p-0" href="{{route('index')}}">
                                Home
                                <span class="caret"></span>
                            </a>
                        </li>
                        <li id="navbar-item-listing" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4 {{ (request()->is('about')) ? 'active' : '' }}">
                            <a class="nav-link p-0" href="{{route('about')}}">
                                About Us
                                <span class="caret"></span>
                            </a>
                        </li>
                        <li id="navbar-item-listing" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" dropdown-toggle href="#" data-toggle="dropdown">
                                Our Projects
                                <span class="caret"></span>
                            </a>
                            <ul
                                class="dropdown-menu pt-3 pb-0 pb-lg-3"
                                aria-labelledby="navbar-item-home">
                                <li class="dropdown-item">
                                    <a
                                        id="navbar-link-home-01"
                                        class="dropdown-link"
                                        href="#">
                                        Lily Court
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a
                                        id="navbar-link-home-02"
                                        class="dropdown-link"
                                        href="#">
                                        Food Industrial Park, Abeokuta
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a
                                        id="navbar-link-home-03"
                                        class="dropdown-link"
                                        href="#">
                                        Tede Agri Industrial Park
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a
                                        id="navbar-link-home-04"
                                        class="dropdown-link"
                                        href="#">
                                        Cliffland Estate, Abuja
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="navbar-item-pages" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4 {{ (request()->is('gallery')) ? 'active' : '' }}">
                            <a class="nav-link p-0" href="{{route('gallery')}}">
                                Our Gallery
                                <span class="caret"></span>
                            </a>
                        </li>
                        <li id="navbar-item-pages" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" href="#">
                                FAQs
                                <span class="caret"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="d-block d-xl-none">
                        <ul
                            class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                            <li class="nav-item">
                                <a class="btn btn-outline-light btn-lg text-white rounded-lg bg-hover-primary border-hover-primary hover-white d-none d-lg-block" href="{{route('contact')}}">
                                    Contact Us
                                </a>
                                <a class="btn btn-primary btn-lg d-block d-lg-none" href="#">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ml-auto d-none d-xl-block">
                    <ul
                        class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                        <li class="nav-item">
                            <a
                                class="btn btn-lg text-heading border bg-hover-primary border-hover-primary hover-white d-none d-lg-block"
                                href="{{route('contact')}}">
                                Contact Us
                            </a>
                            <a
                                class="btn btn-primary btn-lg d-block d-lg-none"
                                href="{{route('contact')}}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
