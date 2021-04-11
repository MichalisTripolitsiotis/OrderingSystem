@extends('layouts.app')
@section('content')
    @include('partials._admin-nav')
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="page-header col-12 col-md-6">
                    <h3 class="md-spacer-down">Products</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-8">
                    <div class="text-center">
                    <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#add-product-modal">Add product</a>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @if ($products->isNotEmpty())
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <h2>{{ $product->name }}</h2>
                                            <div class="pi-pic">
                                                <img class="img img-product"
                                                    src="{{ $product->image ? Storage::url($product->image) : asset('images/default.jpg') }}"
                                                    alt="product avatar">
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                            </div>
                                            <div class="pi-text mt-2">
                                                <div class="product-button">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <button type="submit" class="btn btn-success mr-2" data-toggle="modal"  
                                                        data-target-id="{{ $product->id }}" 
                                                        data-name="{{ $product->name }}"
                                                        data-target="#edit-product-modal"><i class="fa fa-edit"></i> Edit</button>
                                                        {{-- <form action="{{ route('products.destroy', $product ) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                                        </form> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @include('admin/products/_edit-product-modal')
                            @else
                                <p class="zero-result-message">No Products found</p>
                            @endif
                            @include('admin/products/_add-product-modal')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
