@extends('layouts.app')

@section('title', 'VelvetWhisk - Checkout')

@section('content')
<section class="py-5" id="checkout" style="margin-top: 80px;">
    <div class="container">
        <div class="section-title">
            <h2>Checkout</h2>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="checkout-form contact-container">
                    <h4 class="mb-4">Billing Information</h4>
                    <form id="checkout-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                        <input type="email" class="form-control" placeholder="Your Email" required>
                        <input type="text" class="form-control" placeholder="Address" required>
                        <input type="text" class="form-control" placeholder="City" required>

                        <input
                            type="tel"
                            class="form-control"
                            placeholder="Phone Number"
                            required
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        >

                        <textarea class="form-control" placeholder="Order Notes (optional)"></textarea>

                        <h5 class="mt-4 mb-3">Payment Method</h5>
                        <div class="payment-options">
                            <div class="form-check p-3 border rounded mb-2">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentCod" value="cod" checked>
                                <label class="form-check-label" for="paymentCod">
                                    <i class="fas fa-money-bill-wave me-2"></i> Cash on Delivery (COD)
                                </label>
                            </div>
                            <div class="form-check p-3 border rounded">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentCard" value="card">
                                <label class="form-check-label" for="paymentCard">
                                    <i class="fas fa-credit-card me-2"></i> Credit/Debit Card
                                </label>
                            </div>
                        </div>

                        <div id="card-details-form" class="mt-3" style="display: none;">
                            <input type="text" class="form-control" placeholder="Card Number (e.g., 4111...)" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="16">
                            <div class="row">
                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="MM / YY" oninput="this.value = this.value.replace(/[^0-9\/]/g, '')" maxlength="5">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="CVC" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="3">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4">Place Order</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="order-summary contact-container">
                    <h4 class="mb-4">Your Order</h4>
                    <div id="checkout-items-list">
                        </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Total</h5>
                        <h5 class="mb-0" id="checkout-total">0</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection