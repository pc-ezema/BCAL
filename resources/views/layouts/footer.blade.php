<footer class="bg-dark pt-8 pb-6 footer text-muted">
    <div class="container container-xxl">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                <a class="d-block mb-2" href="#">
                    <img src="{{URL::asset('images/page/logo-white.png')}}" alt="{{config('app.name')}}" width="200">
                </a>
                <div class="lh-26 font-weight-500">
                    <p class="mb-0">18 Udi Street, Wema terrace, Osborne Foreshore, Ikoyi, Lagos State.</p>
                    <a class="d-block text-muted hover-white" href="mailto:info@bcal.ng">info@bcal.ng</a>
                    <a class="d-block text-lighter font-weight-bold fs-15 hover-white" href="tel:+2349080829417">+234 908 082 9417</a>
                    <a class="d-block text-lighter font-weight-bold fs-15 hover-white" href="tel:+2348080266051">+234 808 026 6051</a>
                    <a class="d-block text-muted hover-white" href="www.homeid.com">www.bcal.ng</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 mb-6 mb-md-0">
                <h4 class="text-white fs-16 my-4 font-weight-500">Our Project</h4>
                <ul class="list-group list-group-flush list-group-no-border">
                    <li class="list-group-item bg-transparent p-0">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Lily Court</a>
                    </li>
                    <li class="list-group-item bg-transparent p-0">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Food Industrial Park, Abeokuta</a>
                    </li>
                    <li class="list-group-item bg-transparent p-0">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Tede Agri Industrial Park</a>
                    </li>
                    <li class="list-group-item bg-transparent p-0">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Cliffland Estate, Abuja</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 mb-6 mb-md-0">
                <h4 class="text-white fs-16 my-4 font-weight-500">Quick links</h4>
                <ul class="list-group list-group-flush list-group-no-border">
                    <li class="list-group-item bg-transparent p-0">
                        <a href="{{route('index')}}" class="text-muted lh-26 font-weight-500 hover-white">Home</a>
                    </li>
                    <li class="list-group-item bg-transparent p-0">
                        <a href="{{route('about')}}" class="text-muted lh-26 font-weight-500 hover-white">About Us</a>
                    </li>
                    <li class="list-group-item bg-transparent p-0">
                        <a href="{{route('gallery')}}" class="text-muted lh-26 font-weight-500 hover-white">Our Gallery</a>
                    </li>
                    <li class="list-group-item bg-transparent p-0">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">FAQs</a>
                    </li>
                    <li class="list-group-item bg-transparent p-0">
                        <a href="{{route('contact')}}" class="text-muted lh-26 font-weight-500 hover-white">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                <h4 class="text-white fs-16 my-4 font-weight-500">Sign Up for Our Newsletter</h4>
                <p class="font-weight-500 text-muted lh-184">Join our list of active users who subscribe to our newsletter and be first to know when we post an update or an upgrade in the system.</p>
                <form>
                    <div class="input-group input-group-lg mb-6">
                        <input type="email" name="email" class="form-control bg-white shadow-none border-0 z-index-1" placeholder="Your email">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-0 mt-md-10 row">
            <ul class="list-inline mb-0 col-md-6 mr-auto">
            </ul>
            <p class="col-md-auto mb-0 text-muted">
                © <script>
                document.write(new Date().getFullYear())
            </script> {{config('app.name')}}. All Rights Reserved
            </p>
        </div>
    </div>
</footer>
