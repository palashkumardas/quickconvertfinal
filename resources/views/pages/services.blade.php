@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp


    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 style="color:#00aeef">Services</h2>
                    <ol>
                        <li><a href="#">Home</a></li>
                        <li style="color:#00aeef">Services</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('fontend/assets/img/bank-deposit-image.png') }}" class="img-fluid"
                                     alt="" style="height: 313px; object-fit:cover">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bank"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Bank Deposit</h3>
                                </a>
                                <p>Transfer money abroad instantly
                                    to bank accounts in over 90 countries</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('fontend/assets/img/cash-pickup-image.png') }}" class="img-fluid" alt=""
                                     style="height: 313px; object-fit:cover">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-cash"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Cash Pickup</h3>
                                </a>
                                <p>Send money to over 250,000
                                    pick-up locations???</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('fontend/assets/img/money.jpeg') }}" class="img-fluid"
                                     alt="" style="height: 313px; object-fit:cover">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-wallet2"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Mobile Wallet</h3>
                                </a>
                                <p>Send money directly to a mobile money account</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section>

        <!-- End Services Section -->

    </main><!-- End #main -->

@endsection
