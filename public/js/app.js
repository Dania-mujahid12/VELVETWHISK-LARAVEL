// No hardcoded cakes needed, data comes from the database now
const cakes = []; 

// --- LOCALSTORAGE HELPER FUNCTIONS ---

function loadCartFromLocalStorage() {
    return JSON.parse(localStorage.getItem('velvetWhiskCart')) || []; 
}

function saveCartToLocalStorage() {
    localStorage.setItem('velvetWhiskCart', JSON.stringify(cart)); 
}

function loadReviewsFromLocalStorage(productId) {
    const allReviews = JSON.parse(localStorage.getItem('velvetWhiskReviews')) || {}; 
    return allReviews[productId] || [];
}

function saveReviewToLocalStorage(productId, newReview) {
    const allReviews = JSON.parse(localStorage.getItem('velvetWhiskReviews')) || {}; 
    const productReviews = allReviews[productId] || [];
    productReviews.push(newReview);
    allReviews[productId] = productReviews;
    localStorage.setItem('velvetWhiskReviews', JSON.stringify(allReviews)); 
}

// --- GLOBAL VARIABLES ---
let cart = loadCartFromLocalStorage();

// --- MAIN LOGIC (RUNS ON PAGE LOAD) ---
document.addEventListener('DOMContentLoaded', function() {
    
    const cartCount = document.querySelector('.cart-count');
    const cartItemsContainer = document.getElementById('cartItems');
    const cartTotalElement = document.getElementById('cartTotal');

    // 1. Initial Display Update
    updateCartDisplay();

    // 2. SETUP CART LISTENERS (The Fix: Attach Once using Delegation)
    // We attach the listener to the container, not the individual buttons.
    if (cartItemsContainer) {
        cartItemsContainer.addEventListener('click', function(event) {
            const target = event.target;
            // Find the closest element with a data-id (handles icons inside buttons)
            const btn = target.closest('[data-id]');
            if (!btn) return;

            const id = parseInt(btn.getAttribute('data-id'));
            if (!id) return;

            if (btn.classList.contains('minus')) {
                updateQuantity(id, -1);
            } else if (btn.classList.contains('plus')) {
                updateQuantity(id, 1);
            } else if (btn.classList.contains('remove-item')) { 
                removeFromCart(id);
            }
        });

        // Handle manual input changes
        cartItemsContainer.addEventListener('change', function(event) {
            if (event.target.classList.contains('quantity-input')) {
                const id = parseInt(event.target.getAttribute('data-id'));
                const newQuantity = parseInt(event.target.value);
                if (id && newQuantity > 0) {
                    const item = cart.find(item => item.id === id);
                    if (item) {
                        item.quantity = newQuantity;
                        saveCartToLocalStorage();
                        updateCartDisplay();
                    }
                } else {
                    removeFromCart(id);
                }
            }
        });
    }

    // 3. Product Details Page Logic
    const addToCartBtn = document.getElementById('add-to-cart-btn');
    if (addToCartBtn) {
        const productId = parseInt(addToCartBtn.getAttribute('data-id'));
        const productData = {
            id: productId,
            name: addToCartBtn.getAttribute('data-name'),
            price: parseFloat(addToCartBtn.getAttribute('data-price')),
            image: addToCartBtn.getAttribute('data-image')
        };

        const qtyInput = document.getElementById('quantity-input');
        const minusBtn = document.getElementById('quantity-minus');
        const plusBtn = document.getElementById('quantity-plus');

        if (minusBtn && qtyInput) {
            minusBtn.addEventListener('click', () => {
                let currentVal = parseInt(qtyInput.value);
                if (currentVal > 1) qtyInput.value = currentVal - 1;
            });
        }
        if (plusBtn && qtyInput) {
            plusBtn.addEventListener('click', () => {
                let currentVal = parseInt(qtyInput.value);
                qtyInput.value = currentVal + 1;
            });
        }

        addToCartBtn.addEventListener('click', () => {
            const quantity = parseInt(qtyInput.value);
            addToCartDynamic(productData, quantity);
        });
        
        // Reviews Logic
        const reviewsContainer = document.getElementById('reviews-list');
        if(reviewsContainer) renderReviews(productData, reviewsContainer);

        const reviewFormWrapper = document.querySelector('.add-review-section');
        const purchaseHistory = JSON.parse(localStorage.getItem('velvetWhiskPurchaseHistory')) || [];
        const hasPurchased = purchaseHistory.includes(productId);

        if (reviewFormWrapper) {
            if (hasPurchased) {
                reviewFormWrapper.style.display = 'block';
                const reviewForm = document.getElementById('add-review-form');
                if (reviewForm) {
                    reviewForm.addEventListener('submit', (e) => handleReviewSubmit(e, productId, reviewsContainer));
                }
            } else {
                reviewFormWrapper.style.display = 'none';
                // Append message only if it doesn't exist
                if (!document.getElementById('review-permission-msg')) {
                    let permMsg = document.createElement('div');
                    permMsg.id = 'review-permission-msg';
                    permMsg.className = 'mt-4 text-center';
                    permMsg.innerHTML = '<p style="color: #d5d5d5; font-style: italic;">You must purchase this product to leave a review.</p>';
                    if(reviewsContainer && reviewsContainer.parentNode) reviewsContainer.parentNode.appendChild(permMsg);
                }
            }
        }
    }

    const listButtons = document.querySelectorAll('.btn-add-cart');
    listButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productData = {
                id: parseInt(this.getAttribute('data-id')),
                name: this.getAttribute('data-name'),
                price: parseFloat(this.getAttribute('data-price')),
                image: this.getAttribute('data-image')
            };
            addToCartDynamic(productData, 1);
        });
    });

    // 5. Contact Form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    }

    // 6. Checkout Page
    if (document.getElementById('checkout-form')) {
        loadCheckoutSummary();
        document.getElementById('checkout-form').addEventListener('submit', handleCheckout);

        const cardDetailsForm = document.getElementById('card-details-form');
        const paymentCod = document.getElementById('paymentCod');
        const paymentCard = document.getElementById('paymentCard');

        if(paymentCod && cardDetailsForm) {
            paymentCod.addEventListener('change', () => {
                if (paymentCod.checked) cardDetailsForm.style.display = 'none';
            });
        }
        if(paymentCard && cardDetailsForm) {
            paymentCard.addEventListener('change', () => {
                if (paymentCard.checked) cardDetailsForm.style.display = 'block';
            });
        }
    }
});

// --- CORE FUNCTIONS ---

function addToCartDynamic(product, quantityToAdd) {
    const existingItem = cart.find(item => item.id === product.id);
    if (existingItem) {
        existingItem.quantity += quantityToAdd;
    } else {
        cart.push({ 
            id: product.id,
            name: product.name,
            price: product.price,
            image: product.image,
            quantity: quantityToAdd 
        }); 
    }
    saveCartToLocalStorage();
    updateCartDisplay();
    showAddedToCartMessage(product.name);
}

function updateCartDisplay() {
    const cartCount = document.querySelector('.cart-count');
    const cartItemsContainer = document.getElementById('cartItems');
    const cartTotalElement = document.getElementById('cartTotal');

    // Update Badge
    const totalCount = cart.reduce((total, item) => total + item.quantity, 0);
    if (cartCount) cartCount.textContent = totalCount;

    // Update Cart Page List (If we are on the cart page)
    if (cartItemsContainer && cartTotalElement) {
        cartItemsContainer.innerHTML = '';
        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p class="text-center">Your cart is empty</p>';
            cartTotalElement.textContent = '0'; 
            return;
        }

        let total = 0;
        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;
            const cartItem = document.createElement('div');
            cartItem.className = 'cart-item';
            cartItem.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div class="cart-item-details">
                    <div class="cart-item-title">${item.name}</div>
                    <div class="cart-item-price">${item.price.toFixed(0)}</div>
                </div>
                <div class="cart-actions">
                    <button class="quantity-btn minus" data-id="${item.id}">-</button>
                    <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-id="${item.id}">
                    <button class="quantity-btn plus" data-id="${item.id}">+</button>
                    <button class="remove-item" data-id="${item.id}"><i class="fas fa-trash"></i></button>
                </div>`;
            cartItemsContainer.appendChild(cartItem);
        });
        cartTotalElement.textContent = `${total.toFixed(0)}`; 
    }
}

function updateQuantity(cakeId, change) {
    const itemIndex = cart.findIndex(item => item.id === cakeId); 
    if (itemIndex === -1) return;
    
    const item = cart[itemIndex];
    const newQuantity = item.quantity + change;
    
    if (newQuantity <= 0) {
        cart.splice(itemIndex, 1); 
    } else {
        item.quantity = newQuantity;
    }
    saveCartToLocalStorage();
    updateCartDisplay();
}

function removeFromCart(cakeId) {
    cart = cart.filter(item => item.id !== cakeId);
    saveCartToLocalStorage();
    updateCartDisplay();
}

function loadCheckoutSummary() {
    const itemsListContainer = document.getElementById('checkout-items-list');
    const totalElement = document.getElementById('checkout-total');
    if (!itemsListContainer || !totalElement) return;

    itemsListContainer.innerHTML = '';
    let total = 0;

    if (cart.length === 0) {
        itemsListContainer.innerHTML = '<p>Your cart is empty.</p>';
        totalElement.textContent = '0'; 
        return;
    }

    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;
        itemsListContainer.innerHTML += `
            <div class="order-summary-item" style="display:flex; justify-content:space-between; margin-bottom:10px; border-bottom:1px solid #4a373f; padding-bottom:10px;">
                <div class="order-summary-item-name" style="color: var(--dark); font-weight:600;">
                    ${item.name} <span style="color:#d5d5d5; font-size:0.9em;">(x${item.quantity})</span>
                </div>
                <div class="order-summary-item-price" style="color: var(--secondary); font-weight:700;">${itemTotal.toFixed(0)}</div>
            </div>`;
    });
    totalElement.textContent = `${total.toFixed(0)}`; 
}

function handleCheckout(e) {
    e.preventDefault();
    if (cart.length === 0) {
        alert("Your cart is empty.");
        return;
    }
    const paymentMethodInput = document.querySelector('input[name="paymentMethod"]:checked');
    const msg = paymentMethodInput && paymentMethodInput.value === 'card' ? "Processed via Card." : "Processed via Cash on Delivery.";
    
    const purchaseHistory = JSON.parse(localStorage.getItem('velvetWhiskPurchaseHistory')) || [];
    const newPurchases = cart.map(item => item.id);
    const updatedHistory = [...new Set([...purchaseHistory, ...newPurchases])];
    localStorage.setItem('velvetWhiskPurchaseHistory', JSON.stringify(updatedHistory));

    alert(`Order Placed!\n${msg}`);
    cart = [];
    saveCartToLocalStorage();
    window.location.href = "index.html";
}

function renderReviews(product, container) {
    if (!container) return;
    container.innerHTML = '';
    
    const originalReviews = [
        { author: "Aisha", rating: 5, text: "Amazing taste!" },
        { author: "Ali", rating: 4, text: "Really good service." }
    ]; 
    
    const newReviews = loadReviewsFromLocalStorage(product.id);
    const allReviews = originalReviews.concat(newReviews);

    if (allReviews.length > 0) {
        allReviews.forEach(review => {
            let stars = '';
            for (let i = 0; i < 5; i++) {
                stars += `<i class="fa${i < review.rating ? 's' : 'r'} fa-star"></i>`;
            }
            container.innerHTML += `
                <div class="review-item" style="border-bottom: 1px solid #4a373f; padding: 15px 0;">
                    <div class="review-stars" style="color: #e9c46a;">${stars}</div>
                    <h5 style="margin-top:5px; color: var(--dark); font-weight: 600;">${review.author || 'Anonymous'}</h5>
                    <p class="review-text" style="color:#d5d5d5;">${review.text || ''}</p>
                </div>`;
        });
    } else {
        container.innerHTML = '<p>No reviews yet.</p>';
    }
}

function handleReviewSubmit(event, productId, reviewsContainer) {
    event.preventDefault();
    const authorInput = document.getElementById('review-author');
    const ratingInput = document.getElementById('review-rating');
    const textInput = document.getElementById('review-text');
    const reviewForm = document.getElementById('add-review-form');

    if (!authorInput.value || !ratingInput.value || !textInput.value) { 
        alert("Please fill out all fields.");
        return;
    }

    const newReview = { author: authorInput.value, rating: parseInt(ratingInput.value), text: textInput.value };
    saveReviewToLocalStorage(productId, newReview);
    
    if (reviewsContainer) renderReviews({ id: productId }, reviewsContainer);
    if (reviewForm) reviewForm.reset();
    alert("Thank you for your review!");
}

function showAddedToCartMessage(cakeName) {
    const existingMessage = document.querySelector('.added-to-cart-message');
    if (existingMessage) existingMessage.remove(); 
    const message = document.createElement('div');
    message.className = 'position-fixed bottom-0 end-0 m-3 p-3 bg-success text-white rounded shadow added-to-cart-message';
    message.style.zIndex = '1060';
    message.innerHTML = `<i class="fas fa-check-circle me-2"></i>${cakeName} added to cart!`;
    document.body.appendChild(message);
    setTimeout(() => message.remove(), 3000); 
}