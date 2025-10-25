<div class="overlay" id="modal-overlay"></div>

<div class="cart-modal" id="cartModal">
    <div class="cart-header">
        <h3>Your Cart</h3>
        <button class="btn" id="closeCart">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="cart-items" id="cartItems">
    </div>
    <div class="cart-total">
        Total: <span id="cartTotal">0</span>
    </div>
    <a href="{{ route('checkout') }}" class="checkout-btn">Proceed to Checkout</a>
</div>