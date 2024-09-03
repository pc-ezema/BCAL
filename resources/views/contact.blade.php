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
                    Contact Us
                </h1>
            </div>
        </div>
    </section>
    <section class="pt-8 pb-9" data-animated-id="2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-bottom pb-7">
                        <h2 class="text-heading mb-2 fs-22 lh-15 pr-6">Get In Touch With Us</h2>
                        <p class="mb-6">
                            Ready to connect? Getting in touch with us is simple!
                        </p>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" placeholder="First Name" class="form-control form-control-lg border-0" name="first-name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" placeholder="Last Name" name="last-name" class="form-control form-control-lg border-0">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input placeholder="Your Email" class="form-control form-control-lg border-0" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 px-2">
                                    <div class="form-group mb-4">
                                        <input type="text" placeholder="Your Phone" name="phone" class="form-control form-control-lg border-0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <textarea class="form-control border-0" placeholder="Message" name="message" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary px-9">Submit</button>
                        </form>
                    </div>
                    <div class="pt-7">
                        <h2 class="text-heading mb-2 fs-22 lh-15 pr-6">Visit our office</h2>
                        <div class="mb-6">
                            <span><i class="fal fa-map-marker-alt"></i></span>
                            <span class="d-inline-block ml-2">18 Udi Street, Wema terrace, Osborne Foreshore, Ikoyi, Lagos State.</span>
                        </div>
                        <div id="map" class="mapbox-gl map-point-animate mapboxgl-map" style="height: 430px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4570202353902!2d3.420690385893159!3d6.4636397768403455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4b692a44e93%3A0xb2946936f110a64e!2s18%20Udi%20St%2C%20Ikoyi%2C%20Lagos%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1725398770814!5m2!1sen!2sng" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="row mt-8">
                            <div class="col-md-6 mb-6">
                                <div class="media">
                                    <span class="fs-32 text-primary mr-4"><i class="fal fa-phone"></i></span>
                                    <div class="media-body mt-3">
                                        <h4 class="fs-16 lh-2 mb-1 text-dark">Contact</h4>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <span>Office</span>
                                            </div>
                                            <div class="col-9">
                                                <a href="tel:+2349080829417" class="text-heading font-weight-500">+2349080829417</a>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <span>Mobile</span>
                                            </div>
                                            <div class="col-9">
                                                <a href="tel:+2348080266051" class="text-heading font-weight-500">+2348080266051</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="media">
                                    <span class="fs-32 text-primary mr-4"><i class="fa fa-envelope"></i></span>
                                    <div class="media-body mt-3">
                                        <h4 class="fs-16 lh-2 mb-1 text-dark">Email</h4>
                                        <div class="row mb-1">
                                            <div class="col-6">
                                                <span>info@bcal.ng</span>
                                            </div>
                                        </div>
                                    </div>
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
