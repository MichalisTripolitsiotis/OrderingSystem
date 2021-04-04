@extends('layouts.app')
@section('title', 'Cart')
@section('content')
    <form action="{{ route('order.store') }}" method="POST" id="payment-form">
        {{ csrf_field() }}
        <table id="cart" class="table table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th class="text-center">Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                $count = 0;
                ?>
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity']; ?>
                        <tr class="product">
                            <input hidden name="orders[{{ $count }}][id]" value="{{ $details['id'] }}">
                            <td>
                                <div class="row">
                                    <div class="col-sm-3"><img src="{{ $details['photo'] }}" width="100" height="100"
                                            class="img-responsive" /></div>
                                    <div class="col-sm-9">
                                        <h4 class="m-0">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6 class="price"> ${{ $details['price'] }} </h6>
                                <input type="number" hidden value="{{ $details['price'] }}"
                                    class="form-control priceInput" name="orders[{{ $count }}][price]" />
                            </td>
                            <td>
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity"
                                    name="orders[{{ $count }}][quantity]" />
                            </td>
                            <td class="text-center">
                                <h6 class="subtotal">${{ $details['price'] * $details['quantity'] }}</h6>
                            </td>
                            <td class="actions">
                                <button class="btn btn-danger btn-sm remove-from-cart"
                                    data-id="{{ $id }}">Remove</button>
                            </td>
                        </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <a href="{{ url('/') }}" class="btn btn-success"><i class="fa fa-angle-left"></i> Continue
                            Shopping</a>
                    </td>
                    <td colspan="2" class=""></td>
                    <td class="text-center final-price"><strong>Total ${{ $total }}</strong></td>
                </tr>
            </tfoot>
        </table>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address</label>
                        <input type="text" name="address" id="address"
                            class="form-control {{ $errors->first('address') ? ' is-invalid' : '' }}"
                            value="{{ old('address') }}">
                        <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-12 col-md-4 col-lg-4 col-form-label">City</label>
                        <input type="text" id="city" name="city"
                            class="form-control {{ $errors->first('city') ? ' is-invalid' : '' }}"
                            value="{{ old('city') }}">
                        <div class="invalid-feedback">{{ $errors->first('city') }}</div>
                    </div>

                    <div class="form-group">
                        <label for="postcode" class="col-12 col-md-4 col-lg-4 col-form-label">Postcode</label>
                        <input type="text" id="postcode" name="postcode"
                            class="form-control {{ $errors->first('postcode') ? ' is-invalid' : '' }}"
                            value="{{ old('postcode') }}">
                        <div class="invalid-feedback">{{ $errors->first('postcode') }}</div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-12 col-md-4 col-lg-4 col-form-label">Phone</label>
                        <input type="text" id="phone" name="phone"
                            class="form-control {{ $errors->first('phone') ? ' is-invalid' : '' }}"
                            value="{{ old('phone') }}">
                        <div class="invalid-feedback">{{ $errors->first('phone') }}</div>

                    </div>

                    <div class="form-group">
                        <input type="hidden" id="total" name="total"
                            class="form-control total {{ $errors->first('total') ? ' is-invalid' : '' }}"
                            value="{{ $total }}">
                        <div class="invalid-feedback">{{ $errors->first('total') }}</div>
                    </div>
                    <button type="submit" id="complete-order" class="btn btn-primary full-width">Complete Order</button>
    </form>
    </div>
    </div>
    </div>
@endsection
