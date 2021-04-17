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
          <h3 class="section-title">Services</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="box serviceBox">
               <div class="service-content">
                <div class="service-icon">1</div>
                <h4 class="title pt-3">Make an order</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box serviceBox">
               <div class="service-content">
                <div class="service-icon">2</div>
                <h4 class="title pt-3">Track your order</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box serviceBox">
               <div class="service-content">
                <div class="service-icon">3</div>
                <h4 class="title pt-3">Give feedback</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection