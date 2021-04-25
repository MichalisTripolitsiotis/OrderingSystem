@extends('layouts.guest')
@section('content')
@if (Auth::guest())
  <nav id="guest-nav" class="navbar navbar-expand-lg navbar-light fixed-top ordering-nav">
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
        <li class="nav-item">
          <a class="nav-link" href="#customers">Feedback</a>
        </li>
        <a  style="cursor: pointer" data-toggle="modal" data-target="#loginModal"><button class="btn btn-login ml-md-5 mr-2" type="submit">{{ __('Login') }}</button></a>
        <a style="cursor: pointer" data-toggle="modal" data-target="#registerModal"><button class="btn btn-signup" type="submit">Sign up</button></a>
        </ul>
      </div>
    </div>
  </nav>
  @elseif (Auth::user()->isAdmin())
    @include('partials._admin-nav')
  @else
    @include('partials._navbar-top')
  @endif
  <section id="hero">
    <div class="hero-container">
      <h1>Orderator</h1>
      <h2>Order your pizzas and track them in real time</h2>
      <a href="#services" class="btn-get-started">Get Started</a>
    </div>
  </section>

  <main id="main">

    <section id="services">
      <div class="container">
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
        <div class="row">
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

    <section id="customers">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">What are customers say</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="box serviceBox">
              <div class="service-content pt-4">
                <h4 class="customer-title">John Wilson</h4>
                <hr>
                <div class="text-box">"Orderator is great. I would like to say thank you to all. App has got everything I need."</div>
                <span class="stars">
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="box serviceBox">
              <div class="service-content pt-4">
                <h4 class="customer-title">Peter Smith</h4>
                <hr>
                <div class="text-box">"Very easy to use. Thank you so much for your help. Order is the real deal!"</div>
                <span class="stars">
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="box serviceBox">
              <div class="service-content pt-4">
                <h4 class="customer-title">Jason Andrew</h4>
                <hr>
                <div class="text-box">"Wow what great service, I love it! I was amazed at the quality of food."</div>
                <span class="stars">
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o checked" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="box serviceBox">
              <div class="service-content pt-4">
                <h4 class="customer-title">Lisa Edwards</h4>
                <hr>
                <div class="text-box">"It's exactly what I've been looking for. If you aren't sure, always go for Orderator."</div>
                <span class="stars">
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                  <i class="fa fa-star checked" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    <footer id="footer">

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Orderator</strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://github.com/MichalisTripolitsiotis">Michalis Tripolitsiotis</a>
        </div>
      </div>
  </footer>
  @include('partials._login-modal')
  @include('partials._register-modal')
@endsection