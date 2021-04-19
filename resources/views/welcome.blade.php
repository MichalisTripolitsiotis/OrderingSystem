@extends('layouts.guest')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light fixed-top ordering-nav">
    <div class="container">
    <a class="navbar-brand" href="#">ORDERATOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#hero">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <a href="{{ route('login') }}"><button class="btn btn-login ml-md-5 mr-2" type="submit">Login</button></a>
        <a href="{{ route('register') }}"><button class="btn btn-signup" type="submit">Sign up</button></a>
        </ul>
      </div>
    </div>
  </nav>
  <section id="hero">
    <div class="hero-container">
      <h1>Orderator</h1>
      <h2>Order your pizzas and track them in real time</h2>
      <a href="#services" class="btn-get-started">Get Started</a>
    </div>
  </section>

  <main id="main">

    <section id="services">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">How it works</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="box serviceBox">
               <div class="service-content">
                <div class="service-icon">1</div>
                <h4 class="title pt-3">Make an order</h4>
                <div class="image-box"><img src="images/dev/bag.jpg"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box serviceBox">
               <div class="service-content">
                <div class="service-icon">2</div>
                <h4 class="title pt-3">Track your order</h4>
                <div class="image-box"><img src="images/dev/radar.jpg"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box serviceBox">
               <div class="service-content">
                <div class="service-icon">3</div>
                <h4 class="title pt-3">Delivered</h4>
                <div class="image-box"><img src="images/dev/check.jpg"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Order now!</h3>
            <p class="cta-text">Create a free account and start making your orders.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="btn cta-btn align-middle" href="#">Order</a>
          </div>
        </div>
      </div>
    </section>
  </main>
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Orderator</strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="">Michalis Tripolitsiotis</a>
        </div>
      </div>
  </footer>
@endsection