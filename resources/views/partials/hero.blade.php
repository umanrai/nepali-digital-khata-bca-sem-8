<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                <div>
                    <h1>{{ config('app.name') }}</h1>
                    <h2>Files To Bytes: Finance Simplified</h2>
                    <a href="{{ route('register') }}" class="download-btn">Register</a>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="{{ asset('assets/frontend/img/hero-img.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>
