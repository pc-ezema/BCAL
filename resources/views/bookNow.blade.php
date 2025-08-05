@extends('layouts.frontend')

@section('page-content')
<main id="content">
    <section
        style="background-image: url('images/page/inquiry.png')"
        class="bg-img-cover-center py-10 pt-md-16 pb-md-17 bg-overlay">
        <div class="container position-relative z-index-2 text-center">
            <div class="mxw-751">
                <h1
                    class="text-white fs-30 fs-md-42 lh-15 font-weight-normal mt-4 mb-10"
                    data-animate="fadeInRight">
                    Book Now
                </h1>
            </div>
        </div>
    </section>

    <section class="pt-8 pb-9" data-animated-id="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center mb-4">
                        <h2>Bonum Homes</h2>
                        <p>Bonum Homes is a Property Development Company committed to providing elegant homes to individuals, institutions, and corporate entities.</p>
                    </div>

                    <div id="formAlert" class="alert mt-3 d-none"></div>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form id="applicantForm">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">What type of property are you interested in buying? *</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="property_type" value="2 Bedroom Apartment" id="type1">
                                        <label class="form-check-label" for="type1">2 Bedroom Apartment</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="property_type" value="3 Bedroom Apartment" id="type2">
                                        <label class="form-check-label" for="type2">3 Bedroom Apartment</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">What is your budget range? *</label><br>
                                    @foreach(['₦1,000,000 - 9,000,000', '₦10,000,000 - 49,000,000', '₦50,000,000 - 99,000,000', '₦100,000,000 - 150,000,000'] as $index => $range)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="budget" value="{{ $range }}" id="budget{{ $index }}" required>
                                        <label class="form-check-label" for="budget{{ $index }}">{{ $range }}</label>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="mb-3">
                                    <label for="mreif" class="form-label">Do you know anything about MREIF? If yes, what do you know *</label>
                                    <input type="text" class="form-control" id="mreif" name="mreif" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Which do you prefer? *</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_preference" value="Mortgage" id="mortgage" required>
                                        <label class="form-check-label" for="mortgage">Mortgage</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_preference" value="Outright payment" id="out" required>
                                        <label class="form-check-label" for="out">Outright payment</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Would you like to schedule a free private inspection? *</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="schedule" value="Yes" id="yes" required>
                                        <label class="form-check-label" for="yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="schedule" value="No" id="no" required>
                                        <label class="form-check-label" for="no">No</label>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#applicantForm').on('submit', function (e) {

        e.preventDefault();

        let $btn = $(this).find('button[type="submit"]');
        let originalBtnText = $btn.html();

        // Disable the button and show spinner
        $btn.prop('disabled', true).html(`<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Submitting...`);

        $.ajax({
            url: "{{ route('applicants.store') }}",
            type: 'POST',
            data: $(this).serialize(),
            success: function (res) {
                // Scroll to top
                $('html, body').animate({ scrollTop: 0 }, 'slow');

                $('#formAlert')
                    .removeClass('d-none alert-danger')
                    .addClass('alert alert-success')
                    .text(res.message);
                $('#applicantForm')[0].reset();
            },
            error: function (err) {
                let msg = err.responseJSON?.message || 'Something went wrong.';
                $('#formAlert')
                    .removeClass('d-none alert-success')
                    .addClass('alert alert-danger')
                    .text(msg);
            },
            complete: function () {
                // Re-enable the button and restore original text
                $btn.prop('disabled', false).html(originalBtnText);
            }
        });
    });
</script>
@endsection