@extends('layouts.app')
@section('content')
    <div class="container">    
        <div class="row">
            @if ($categories->isNotEmpty())
                @foreach ($categories as $category)
                <div class="col-md-6">
                    <div class="wrapper">
                        <div class="container">
                            <h1>{{$category->name}}</h1>
                        </div>
                        <div class="rectangle">
                            <div class="corner"></div>
                        </div>
                        <div class="details">
                                <div class="image">
                                    <img class="img img-category"
                                            src="{{ $category->image ? Storage::url($category->image) : asset('images/default.jpg') }}"
                                            alt="Category avatar">
                            </div>
                            <div class="action-div">
                                <button class="btn btn-lg btn-block"><a href="{{ route('client.show', $category) }}">Go to category</a></button>
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
@endsection
