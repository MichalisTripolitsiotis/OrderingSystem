@extends('layouts.app')
@section('title', 'Cart')
@section('content')
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0; ?>
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity']; ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100"
                                        height="100" class="img-responsive" /></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm remove-from-cart"
                                data-id="{{ $id }}">Remove</button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                        Shopping</a>
                </td>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
            </tr>
        </tfoot>
    </table>
    <form action="{{ route('order.store') }}" method="POST" id="payment-form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="address" class="col-12 col-md-4 col-form-label">Address</label>
            <div class="col-12 col-md-6 col-lg-4">
                <input type="text" name="address" id="address"
                    class="form-control {{ $errors->first('address') ? ' is-invalid' : '' }}"
                    value="{{ old('address') }}">
                <div class="invalid-feedback">{{ $errors->first('address') }}</div>
            </div>
        </div>


        <div class="form-group">
            <label for="city" class="col-12 col-md-4 col-lg-4 col-form-label">City</label>
            <div class="col-12 col-md-6 col-lg-4">
                <input type="text" id="city" name="city"
                    class="form-control {{ $errors->first('city') ? ' is-invalid' : '' }}" value="{{ old('city') }}">
                <div class="invalid-feedback">{{ $errors->first('city') }}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="postcode" class="col-12 col-md-4 col-lg-4 col-form-label">Postcode</label>
            <div class="col-12 col-md-6 col-lg-4">
                <input type="text" id="postcode" name="postcode"
                    class="form-control {{ $errors->first('postcode') ? ' is-invalid' : '' }}"
                    value="{{ old('postcode') }}">
                <div class="invalid-feedback">{{ $errors->first('postcode') }}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="phone" class="col-12 col-md-4 col-lg-4 col-form-label">Phone</label>
            <div class="col-12 col-md-6 col-lg-4">
                <input type="text" id="phone" name="phone"
                    class="form-control {{ $errors->first('phone') ? ' is-invalid' : '' }}"
                    value="{{ old('phone') }}">
                <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-12 col-md-6 col-lg-4">
                <input type="hidden" id="total" name="total"
                    class="form-control {{ $errors->first('total') ? ' is-invalid' : '' }}" value="{{ $total }}">
                <div class="invalid-feedback">{{ $errors->first('total') }}</div>
            </div>
        </div>
        <button type="submit" id="complete-order" class="btn btn-primary full-width">Complete Order</button>
    </form>
@endsection
