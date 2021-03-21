@extends('layouts.app')
@section('content')
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                @include('partials._client-product-nav')
                <div class="col-12 col-lg-9 order-lg-2 d-flex">
                    <div class="product-list">
                        <div class="row">
                            @if ($products->isNotEmpty())
                                @foreach ($products as $product)
                                    <div class="card">
                                        <input type="hidden" value="{{ $product->id }}">
                                        <div class="card-img-top">
                                            <div class="card-img-top">
                                                <img class="img img-category"
                                                    src="{{ $product->image ? Storage::url($product->image) : asset('images/default.jpg') }}"
                                                    alt="Category avatar">
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title">{{ $product->name }}</div>
                                                <a href="#">
                                                    <h5>{{ $product->dexcription }}</h5>
                                                </a>
                                                <div class="card-text">
                                                    <span>{{ $product->price }} $</span>
                                                </div>
                                                <div class="product-button">
                                                    <a href="{{ route('cart.store', $product->id) }}"
                                                        class="add-to-cart-btn">
                                                        ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="zero-result-message">No products found
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
