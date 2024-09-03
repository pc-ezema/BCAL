@extends('layouts.frontend')

@section('page-content')
<main id="content">
    <section
        style="background-image: url('images/page/breadcrumb.png')"
        class="bg-img-cover-center py-10 pt-md-16 pb-md-17 bg-overlay">
        <div class="container position-relative z-index-2 text-center">
            <div class="mxw-751">
                <h1
                    class="text-white fs-30 fs-md-42 lh-15 font-weight-normal mt-4 mb-10"
                    data-animate="fadeInRight">
                    Our Gallery
                </h1>
            </div>
        </div>
    </section>
    <section class="pt-8 pb-9" data-animated-id="2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-bottom pb-7">
                        <h2 class="text-heading mb-2 fs-22 lh-15 pr-6 text-center mb-2">Our Gallery</h2>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                                    <img src="{{URL::asset('images/1.jpg')}}" class="card-img" alt="Lilycourt">
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                                    <img src="{{URL::asset('images/2.jpg')}}" class="card-img" alt="Lilycourt">
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                                    <img src="{{URL::asset('images/3.jpg')}}" class="card-img" alt="Lilycourt">
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="card border-0 text-white bg-overlay hover-zoom-in zoomIn animated" data-animate="zoomIn">
                                    <img src="{{URL::asset('images/4.jpg')}}" class="card-img" alt="Lilycourt">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
