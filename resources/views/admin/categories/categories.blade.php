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
                    <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#add-category-modal">Add Category</a>
                    </div>
                    <div class="category-list">
                        <div class="row">
                            @if ($categories->isNotEmpty())
                                @foreach ($categories as $category)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="category-item">
                                            <h2>{{ $category->name }}</h2>
                                            <div class="pi-pic">
                                                <img class="img img-category"
                                                    src="{{ $category->image ? Storage::url($category->image) : asset('images/default.jpg') }}"
                                                    alt="Category avatar">
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                            </div>
                                            <div class="pi-text mt-2">
                                                <div class="category-button">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <button type="submit" class="btn btn-success mr-2" data-toggle="modal"  
                                                        data-target-id="{{ $category->id }}" 
                                                        data-name="{{ $category->name }}"
                                                        data-target="#edit-category-modal"><i class="fa fa-edit"></i> Edit</button>
                                                        <form action="{{ route('categories.destroy', $category ) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @include('admin/categories/_edit-category-modal')
                            @else
                                <p class="zero-result-message">No categories found
                                </p>
                            @endif
                            @include('admin/categories/_add-category-modal')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
