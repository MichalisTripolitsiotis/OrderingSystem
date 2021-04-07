@extends('layouts.app')
@section('content')
    @include('partials._admin-nav')
    <div class="profile">
        <div class="container">
            <div class="box">
                <div class="page-header col-s12 col-md-6">
                    <h3 class="md-spacer-down">My Profile</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="text-center m-b-20">Orders Received:</h6>
                            <h2 class="text-center"><i
                                    class="fa fa-cart-plus f-left"></i><span>{{ $receivedOrders }}</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-green order-card">
                        <div class="card-block">
                            <h6 class="text-center m-b-20">Orders Preparing:</h6>
                            <h2 class="text-center"><i
                                    class="fa fa-rocket f-left"></i><span>{{ $preparingOrders }}</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-block">
                            <h6 class="text-center m-b-20">Orders Ready to Deliver:</h6>
                            <h2 class="text-center"><i
                                    class="fa fa-check f-left"></i><span>{{ $readyOrders }}</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-pink order-card">
                        <div class="card-block">
                            <h6 class="text-center m-b-20">Orders Delivering:</h6>
                            <h2 class="text-center"><i
                                    class="fa fa-motorcycle f-left"></i><span>{{ $deliveringOrders }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
