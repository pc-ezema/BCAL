@extends('layouts.frontend')

@section('page-content')
<main id="content">
    <section>
        <div
            class="slick-slider custom-slider-3 custom-dots mx-0"
            data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":true,"arrows":false}'>
            <div class="box px-0 d-flex flex-column">
                <div
                    class="bg-cover bg-overlay d-flex align-items-center custom-vh-02"
                    style="background-image: url(images/page/bg.jpg)">
                    <div class="container pt-lg-15 py-8" data-animate="zoomIn">
                        <p class="text-white fs-md-22 fs-18 font-weight-500 letter-spacing-367 mb-6 text-center text-uppercase">Bonum Consilium Africa Limited</p>
                        <h2 class="text-white display-2 text-center mb-sm-13 mb-8">Building elegant homes across Africa</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-lg-12 my-lg-1 py-11 mb-6" data-animated-id="5">
        <div class="container">
            <div class="media d-flex flex-column flex-md-row align-items-md-center py-lg-8 position-relative cusstom-bg-slider-gray no-gutters">
                <div class="mr-lg-10 mr-md-6 card border-0 col-md-6">
                    <img src="{{URL::asset('images/page/bg2.jpeg')}}" class="card-img" alt="B-CAL">
                    <div class="card-img-overlay p-2">
                        <span class="badge mr-2 badge-orange">Featured</span>
                    </div>
                </div>
                <div class="media-body mt-lg-0 pr-lg-9">
                    <h2 class="my-0"><a href="{{route('about')}}" class="fs-26 lh-2 text-dark hover-primary" tabindex="0">BONUM CONSILIUM AFRICA LIMITED</a></h2>
                    <p class="mb-2 ml-0 pr-lg-3">B-CAL is a Property Development Company committed to providing elegant homes to individuals, institutions and corporate entities.</p>
                    <p class="mb-2 ml-0 pr-lg-3">Our vision is to bridge the huge gap in housing deficit in Nigeria using modern technology with sophisticated designs to achieve functional homes.</p>
                </div>
            </div>
        </div>
    </section>
    <section data-animated-id="5" class="mb-6">
        <div class="bg-single-image pt-lg-13 pb-lg-12 py-11 bg-secondary">
            <div class="container container-xxl">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-6 pl-xl-8 fadeInRight animated" data-animate="fadeInRight">
                        <h2 class="text-white lh-1625">Our designs are unique and we ensure that our projects are delivered within the stipulated period to give you a desired fulfillment.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="mb-6" data-animated-id="4">
        <div class="container">
            <h2 class="text-dark text-center lh-1625">
                Our Gallery
            </h2>
            <span class="heading-divider mx-auto mb-7"></span>
            <div class="row">
                <div class="col-md-4 mb-6">
                    <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                        <img src="{{URL::asset('images/1.jpg')}}" class="card-img" alt="Lilycourt">
                    </div>
                </div>
                <div class="col-md-4 mb-6">
                    <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                        <img src="{{URL::asset('images/2.jpg')}}" class="card-img" alt="Lilycourt">
                    </div>
                </div>
                <div class="col-md-4 mb-6">
                    <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                        <img src="{{URL::asset('images/3.jpg')}}" class="card-img" alt="Lilycourt">
                    </div>
                </div>
                <div class="col-md-4 mb-6">
                    <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                        <img src="{{URL::asset('images/4.jpg')}}" class="card-img" alt="Lilycourt">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</main>
<style>

</style>
@endsection
