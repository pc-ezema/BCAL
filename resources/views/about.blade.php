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
                    About Us
                </h1>
            </div>
        </div>
    </section>
    <section class="bg-patten-03 bg-gray-01 pb-5">
        <div class="container">
            <div class="card border-0 mt-n13 z-index-3 mb-12">
                <div class="card-body p-6 px-lg-14">
                    <p
                        class="letter-spacing-263 text-uppercase text-primary mb-6 font-weight-500 text-center">
                        welcome to BONUM CONSILIUM AFRICA LIMITED (B-CAL)
                    </p>
                    <h2 class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-6">
                        B-CAL is a Property Development Company committed to providing elegant homes to individuals, institutions and corporate entities.
                    </h2>
                    <p class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-6">
                        Our vision is to bridge the huge gap in housing deficit in Nigeria using modern technology with sophisticated designs to achieve functional homes.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-6 mb-lg-0">
                        <div class="card shadow-2 px-7 pb-6 pt-4 h-100 border-0">
                            <div class="card-body px-0 pt-6 pb-0 text-center">
                                <p class="card-text px-2 fs-18 fs-md-18">
                                    Collaboration and partnership with key stakeholders in the real sector is of necessity for us in achieving our mandate, we work with established finance institutions to access funding in executing real estate projects thereby making dreams of prospective home owners become a reality.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-6 mb-lg-0">
                        <div class="card shadow-2 px-7 pb-6 pt-4 h-100 border-0">
                            <div class="card-body px-0 pt-6 pb-0 text-center">
                                <p class="card-text px-2 fs-18 fs-md-18">
                                    Our designs are unique and we ensure that our projects are delivered within the stipulated period to give you a desired fulfillment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-single-image-02 bg-accent py-lg-13 py-11" data-animated-id="8">
        <div class="container">
            <div class="row">
                <div class="col-ld-6 col-sm-6 fadeInLeft animated" data-animate="fadeInLeft">
                    <div class="pl-6 border-4x border-left border-primary">
                        <h4 class="card-title fs-18 lh-17 text-dark mb-2">
                            Our Vision
                        </h4>
                        <p class="card-text px-2 fs-18 fs-md-18">
                            We have a vision to be the forerunner in developing serene, cosy, and elegant housing units for people of different classes.
                        </p>
                    </div>
                </div>
                <div class="col-ld-6 col-sm-6 fadeInLeft animated" data-animate="fadeInRight">
                    <div class="pl-6 border-4x border-left border-primary">
                        <h4 class="card-title fs-18 lh-17 text-dark mb-2">
                            Our Mission
                        </h4>
                        <p class="card-text px-2 fs-18 fs-md-18">
                            Redefining the real estate narrative with the infusion of smart tech and futuristic design.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
