@extends('layouts.app')

@section('title', 'Your Cart - VelvetWhisk')

@section('content')

<section class.="cart-page-section" style="padding-top: 120px; background-color: var(--light); min-height: 80vh;">
    <div class="container">

        <div class="section-title">
            <h2>Your Cart</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">

                {{-- 
                  This is the main container for cart items.
                  Your app.js will find this ID and populate it.
                --}}
                <div class="cart-items-container" style="background: var(--content-bg); border: 1px solid var(--border-color); border-radius: 12px; padding: 20px;">
                    <div id="cartItems">
                        <p class="text-center">Loading your cart...</p>
                    </div>
                </div>

                {{-- 
                  This section shows the total and checkout button.
                  Your app.js will find the 'cartTotal' ID and update it.
                --}}
                <div class="cart-summary-footer" style="background: var(--content-bg); border: 1px solid var(--border-color); border-radius: 12px; padding: 30px; margin-top: 30px; text-align: right;">
                    
                    <div class="cart-total" style="font-size: 1.8rem; font-weight: 700; color: var(--dark); margin-bottom: 25px;">
                        Total: <span id="cartTotal" style="color: var(--secondary); margin-left: 15px;">0</span>
                    </div>

                    {{-- Link to your existing checkout page --}}
                    <a href="{{ route('checkout') }}" class="btn btn-primary" style="padding: 14px 40px;">
                        Proceed to Checkout
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection