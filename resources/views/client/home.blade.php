@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="category-list">
                <div class="row">
                    @if ($categories->isNotEmpty())
                        @foreach ($categories as $category)
                        <div class="col-5">
                            <div class="wrapper mr-2 mt-4">
                                <div class="container">
                                    <div class="image">
                                        <img src="images/default.jpg">
                                    </div>
                                </div>
                                <div class="rectangle">
                                    <div class="corner"></div>
                                </div>
                                <div class="details">
                                    <h1>{{$category->name}}</h1>
                                    <button class="btn btn-danger"><a href="{{ route('client.show', $category) }}">Go to category</a></button>
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
    </div>
@endsection
