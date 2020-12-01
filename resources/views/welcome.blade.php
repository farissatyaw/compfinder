@extends('layouts.app')

@section('content')
<header data-aos="slide-up" data-aos-duration="950" class="masthead text-center text-white d-flex" style="height: 2076px;width: 1911px;background-image: url('assets/img/bg.jpg');">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase"></h1>
                <hr>
            </div>
        </div>
    </header>
<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                        <h3 class="mb-3">lorem ips</h3>
                        <p class="text-muted mb-0">lorem</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                        <h3 class="mb-3">lorem ips</h3>
                        <p class="text-muted mb-0">lorem</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                        <h3 class="mb-3">lorem ips</h3>
                        <p class="text-muted mb-0">lorem</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                        <h3 class="mb-3">lorem ips</h3>
                        <p class="text-muted mb-0">lorem</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="p-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters popup-gallery">
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/1.jpg"></a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/2.jpg"></a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/3.jpg"></a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/4.jpg"></a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/5.jpg"></a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/6.jpg"></a></div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 mr-auto text-center"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a href="mailto:your-email@your-domain.com">email@example.com</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection