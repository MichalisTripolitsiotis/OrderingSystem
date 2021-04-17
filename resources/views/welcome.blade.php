@extends('layouts.guest')
{{-- @extends('layouts.app') --}}
@section('content')
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