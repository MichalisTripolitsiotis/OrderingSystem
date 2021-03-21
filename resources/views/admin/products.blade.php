@extends('layouts.app')
@section('content')
    @include('partials._admin-nav')
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="page-header col-12 col-md-6">
                    <h3 class="md-spacer-down">Products</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-8">
                    <div class="category-list">
                        <div class="row">
                            @if ($products->isNotEmpty())
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="category-item">
                                            <div class="pi-pic">
                                                <img class="img img-category"
                                                    src="{{ $product->image ? Storage::url($product->image) : asset('images/default.jpg') }}"
                                                    alt="Category avatar">
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name">{{ $product->name }}</div>
                                                <div class="catagory-name">
                                                    {{ $product->isAvailable ? 'Available' : 'Not Available' }}</div>
                                                <div class="category-button">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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
    </div>
@endsection
