@extends('layouts.app')
@section('content')
    @include('partials._admin-nav')
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="page-header col-12 col-md-6">
                    <h3 class="md-spacer-down">Categories</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-8">
                    <div class="text-center">
                    <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Add Category</a>
                    </div>
                    <div class="category-list">
                        <div class="row">
                            @if ($categories->isNotEmpty())
                                @foreach ($categories as $category)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="category-item">
                                            <div class="pi-pic">
                                                <img class="img img-category"
                                                    src="{{ $category->image ? Storage::url($category->image) : asset('images/default.jpg') }}"
                                                    alt="Category avatar">
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name">{{ $category->name }}</div>
                                                <div class="catagory-name">
                                                    {{ $category->isAvailable ? 'Available' : 'Not Available' }}</div>
                                                <div class="category-button">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="zero-result-message">No categories found
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                @include('admin/categories/_add-category-modal')
            </div>
        </div>
    </div>
@endsection
