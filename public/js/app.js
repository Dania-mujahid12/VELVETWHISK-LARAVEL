const cakes = [
    // --- Original 6 Cakes (Categories Corrected) ---
    {
        id: 1,
        name: "Birthday Cake",
        price: 3000,
        category: "birthday",
        description: "Celebrate every milestone with fresh, flavorful cakes in fun or elegant designs. Each one is baked with love to make birthdays extra special and memorable.",
        image: "/images/birth2.jpg",
        reviews: [
            { author: "Aisha", rating: 5, text: "Amazing cake! So moist and delicious." },
            { author: "Bilal", rating: 4, text: "Good cake, but a bit too sweet for me." }
        ]
    },
    {
        id: 2,
        name: "Wedding Cake",
        price: 4500,
        category: "wedding",
        description: "A beautiful symbol of love and new beginnings, crafted with elegance and detail. Our wedding cakes perfectly complement your unforgettable day.",
        image: "/images/bridal.jpg",
        reviews: [
            { author: "Sara", rating: 5, text: "Made our wedding day perfect. Absolutely stunning and tasted divine." }
        ]
    },
    {
        id: 3,
         name: "Bridal Shower Cake",
        price: 5600, 
        category: "bridal shower",
        description: "Soft, romantic, and delicately styled for the bride-to-be. These cakes add sweetness and charm to pre-wedding celebrations.",
        image: "/images/bride.jpg",
        reviews: [
            { author: "Hassan", rating: 4, text: "Very fresh and light. Great for summer." }
        ]
        
    },
    {
        id: 4,
        name: "Party Cake",
        price: 1800,
        category: "party",
        image: "/images/party.jpg",
        description: "Vibrant, colorful, and full of life perfect for any joyful occasion. Customize flavors and themes to match your celebration’s unique spirit.",
        reviews: [
            { author: "Usman", rating: 5, text: "Best chocolate cake I've ever had." },
            { author: "Fatima", rating: 5, text: "A must-buy for chocolate lovers." }
        ]
    },
    {
        id: 5,
        name: "Graduation Cake",
        price: 3500, 
        category: "graduation",
        description: "Celebrate achievements and new beginnings with pride. Our graduation cakes honor success with creative designs and delicious flavor.",
        image: "/images/grad6.jpg",
        reviews: [] 
    },
    {
        id: 6,
        name: "Gender Reveal Cake",
        price: 3000,
        category: "gender reveal",
        description: "Beautifully decorated and filled with excitement, our blue gender reveal cake adds joy to your special moment.",
        image: "/images/BS6.jpg",
        reviews: [
            { author: "Ali", rating: 5, text: "My son was so happy! Looked and tasted great." }
        ]
    },

    // --- NEW CAKES ---

    // --- 5 New Birthday Cakes ---
    {
        id: 7,
        name: "Rainbow Theme Birthday",
        price: 2800,
        category: "birthday",
        description: "A rich, decadent chocolate cake that is a must-have for any birthday celebration. Pure indulgence.",
        image: "/images/birth1.jpg",
        reviews: [
            { author: "Zainab", rating: 5, text: "Perfect chocolate cake." }
        ]
    },
    {
        id: 8,
        name: "Vanilla Sprinkle Blast",
        price: 2500,
        category: "birthday",
        description: "A fun and festive vanilla cake loaded with colorful sprinkles inside and out. A hit with the kids!",
        image: "/images/birth3.jpg",
        reviews: []
    },
    {
        id: 9,
        name: "Pink Delight (Birthday)",
        price: 3200,
        category: "birthday",
        description: "Our signature red velvet cake with cream cheese frosting, decorated for a special birthday.",
        image: "/images/birth4.jpg",
        reviews: [
            { author: "Omer", rating: 5, text: "Best red velvet in town." }
        ]
    },
    {
        id: 10,
        name: "Unicorn Fantasy Cake",
        price: 4000,
        category: "birthday",
        description: "A magical unicorn-themed cake with pastel swirls and a golden horn. Perfect for a fantasy party.",
        image: "/images/birth5.jpg",
        reviews: []
    },
    {
        id: 11,
        name: "Barbie Theme Cake",
        price: 3800,
        category: "birthday",
        description: "A custom cake featuring your favorite barbie. Pow! Bam! Yum!",
        image: "/images/birth6.jpg",
        reviews: []
    },

    // --- 5 New Wedding Cakes ---
    {
        id: 12,
        name: "Grand Tiered Wedding Cake",
        price: 3500,
        category: "wedding",
        description: "A breathtaking four-tiered masterpiece, customizable with your choice of flavors and floral designs.",
        image: "/images/wed1.jpg",
        reviews: []
    },
    {
        id: 13,
        name: "Rustic Wedding Cake",
        price: 5000,
        category: "wedding",
        description: "A trendy cake with minimal frosting, adorned with fresh berries and flowers. Perfect for a rustic theme.",
        image: "/images/wed2.jpg",
        reviews: [
            { author: "Mariam", rating: 5, text: "Looked so natural and tasted amazing." }
        ]
    },
    {
        id: 14,
        name: "Elegant Floral Wedding",
        price: 4000,
        category: "wedding",
        description: "A classic white wedding cake featuring delicate, handcrafted sugar flowers and intricate piping.",
        image: "/images/wed3.jpg",
        reviews: []
    },
    {
        id: 15,
        name: "Modern Geometric Wedding",
        price: 7000,
        category: "wedding",
        description: "A chic, contemporary cake with sharp edges, metallic accents, and a modern geometric pattern.",
        image: "/images/wed44.jpg",
        reviews: []
    },
    {
        id: 16,
        name: "Vintage Lace Wedding Cake",
        price: 3000,
        category: "wedding",
        description: "A romantic cake design inspired by vintage lace, with edible pearls and soft buttercream.",
        image: "/images/wed5.jpg",
        reviews: []
    },

    // --- 5 New Bridal Shower Cakes ---
    {
        id: 17,
        name: "Blush & Gold Bridal Shower",
        price: 4800,
        category: "bridal shower",
        description: "An elegant cake in blush pink, featuring gold drip and fresh macarons. Perfect for a chic bride.",
        image: "/images/bri1.jpg",
        reviews: []
    },
    {
        id: 18,
        name: "Bride Themed Cake",
        price: 4500,
        category: "bridal shower",
        description: "A whimsical cake designed to look like a stack of teacups or a floral teapot. So charming!",
        image: "/images/bri2.jpg",
        reviews: [
            { author: "Fariha", rating: 5, text: "The cutest cake ever for our tea party!" }
        ]
    },
    {
        id: 19,
        name: "'She Said Yes!' Cake",
        price: 4200,
        category: "bridal shower",
        description: "Celebrate the big 'YES' with this beautiful cake, often topped with a diamond ring design.",
        image: "/images/bri3.jpg",
        reviews: []
    },
    {
        id: 20,
        name: "Floral Wreath Cake",
        price: 5000,
        category: "bridal shower",
        description: "A simple, elegant cake encircled by a beautiful wreath of fresh or buttercream flowers.",
        image: "/images/bri4.jpg",
        reviews: []
    },
    {
        id: 21,
        name: "Lingerie-Themed Cake",
        price: 4600,
        category: "bridal shower",
        description: "A fun and cheeky cake for a bachelorette party or lingerie shower, often in a corset design.",
        image: "/images/bri5.jpg",
        reviews: []
    },

    // --- 5 New Party Cakes ---
    {
        id: 22,
        name: "Confetti Pop Party Cake",
        price: 2200,
        category: "party",
        description: "A party in a cake! Vanilla buttercream covered in edible confetti and bright colors.",
        image: "/images/part1.jpg",
        reviews: []
    },
    {
        id: 23,
        name: "Cookies & Cream Party Cake",
        price: 2900,
        category: "party",
        description: "A crowd-pleaser! Layers of chocolate cake and cookies & cream frosting, topped with Oreos.",
        image: "/images/part2.jpg",
        reviews: [
            { author: "Imran", rating: 5, text: "Everyone loved this cake." }
        ]
    },
    {
        id: 24,
        name: "Tropical Luau Cake",
        price: 3400,
        category: "party",
        description: "A taste of the tropics with coconut and pineapple flavors, decorated with hibiscus flowers.",
        image: "/images/part3.jpg",
        reviews: []
    },
    {
        id: 25,
        name: "Casino Night Theme",
        price: 3700,
        category: "party",
        description: "Perfect for a casino-themed party, decorated with poker chips, dice, and playing cards.",
        image: "/images/part6.jpg",
        reviews: []
    },
    {
        id: 26,
        name: "Midnight Chocolate Fudge",
        price: 3000,
        category: "party",
        description: "For the ultimate chocolate lover. A dark, moist fudge cake that's perfect for any adult gathering.",
        image: "/images/part5.jpg",
        reviews: []
    },

    // --- 5 New Graduation Cakes ---
    {
        id: 27,
        name: "Cap & Diploma Cake",
        price: 3800,
        category: "graduation",
        description: "The classic graduation cake, topped with an edible mortarboard cap and a diploma scroll.",
        image: "/images/grad1.jpg",
        reviews: [
            { author: "Mr. Ahmed", rating: 5, text: "Perfect for my son's graduation." }
        ]
    },
    {
        id: 28,
        name: "School Colors Graduation",
        price: 4000,
        category: "graduation",
        description: "Show your school spirit! A beautiful cake customized with your university or school colors.",
        image: "/images/grad2.jpg",
        reviews: []
    },
    {
        id: 29,
        name: "'The Future is Bright' Cake",
        price: 3600,
        category: "graduation",
        description: "An inspiring cake, often decorated with stars, a lightbulb, or an uplifting message.",
        image: "/images/grad3.jpg",
        reviews: []
    },
    {
        id: 30,
        name: "Book Stack Graduation",
        price: 4500,
        category: "graduation",
        description: "A creatively designed cake that looks like a stack of textbooks, honoring all that hard work.",
        image: "/images/grad4.jpg",
        reviews: []
    },
    {
        id: 31,
        name: "Class of 2025 Cake",
        price: 3300,
        category: "graduation",
        description: "A sleek and simple cake proudly announcing the graduating year. 'Class of 2025'.",
        image: "/images/grad5.jpg",
        reviews: []
    },

    // --- 5 New Gender Reveal Cakes ---
    {
        id: 32,
        name: "Pink or Blue? Cake",
        price: 3200,
        category: "gender reveal",
        description: "A beautiful white cake decorated with pink and blue, hiding the secret color inside.",
        image: "/images/BS3.jpg",
        reviews: []
    },
    {
        id: 33,
        name: "'Twinkle Twinkle' Reveal",
        price: 3500,
        category: "gender reveal",
        description: "A lovely theme cake with gold stars and a moon. 'Twinkle Twinkle Little Star, How We Wonder What You Are'.",
        image: "/images/BS2.jpg",
        reviews: [
            { author: "Sana", rating: 5, text: "So beautiful and the reveal was perfect!" }
        ]
    },
    {
        id: 34,
        name: "He or She? Drip Cake",
        price: 3700,
        category: "gender reveal",
        description: "A modern cake with pink and blue drips, topped with 'He or She?' - color inside.",
        image: "/images/BS5.jpg",
        reviews: []
    },
    {
        id: 35,
        name: "Baby Shoes Gender Reveal",
        price: 4000,
        category: "gender reveal",
        description: "An adorable cake topped with tiny, handcrafted pink and blue baby shoes.",
        image: "/images/BS4.jpg",
        reviews: []
    },
    {
        id: 36,
        name: "Question Mark Surprise",
        price: 3000,
        category: "gender reveal",
        description: "A fun cake covered in colorful question marks, building the anticipation for the slice!",
        image: "/images/BS1.jpg",
        reviews: []
    }
];

// LOCALSTORAGE CART FUNCTIONS

function loadCartFromLocalStorage() {
    return JSON.parse(localStorage.getItem('velvetWhiskCart')) || []; 
}

function saveCartToLocalStorage() {
    localStorage.setItem('velvetWhiskCart', JSON.stringify(cart)); 
}

// LOCALSTORAGE REVIEW FUNCTIONS

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

// GLOBAL VARIABLES & ELEMENTS

let cart = loadCartFromLocalStorage();

// Cart Elements
const cartCount = document.querySelector('.cart-count');
const cartItemsContainer = document.getElementById('cartItems');
const cartTotalElement = document.getElementById('cartTotal');
const cartBtn = document.getElementById('cartBtn');
const closeCartBtn = document.getElementById('closeCart');
const cartModal = document.getElementById('cartModal');

// Single Overlay
const modalOverlay = document.getElementById('modal-overlay');

// PAGE LOAD & ROUTING

document.addEventListener('DOMContentLoaded', function() {
    // --- Global Logic (runs on all pages) --

    // Cart Listeners
    if (cartBtn && closeCartBtn && cartModal) { 
        cartBtn.addEventListener('click', toggleCart);
        closeCartBtn.addEventListener('click', toggleCart);
    }
    updateCartDisplay();


    // Global Overlay Listener
    if (modalOverlay) {
        modalOverlay.addEventListener('click', () => {
            if (cartModal && cartModal.classList.contains('open')) {
                toggleCart();
            }
        });
    }

    // Contact form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    }

    // --- Page-Specific Logic ---

    // 1. Listing Page (variety.html)
    if (document.getElementById('cakesContainer')) {
        renderCakes(); // Initial render (shows all)

        const filterButtons = document.querySelectorAll('.cake-filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                const category = this.getAttribute('data-category');
                renderCakes(category);
            });
        });
    }

    // 2. Product Details Page (product.html)
    if (document.getElementById('product-details')) {
        loadProductDetails();
    }

    // 3. Checkout Page (checkout.html)
    if (document.getElementById('checkout-form')) {
        loadCheckoutSummary();
        document.getElementById('checkout-form').addEventListener('submit', handleCheckout);

        // Payment Method Listeners
        const cardDetailsForm = document.getElementById('card-details-form');
        const paymentCod = document.getElementById('paymentCod');
        const paymentCard = document.getElementById('paymentCard');

        if(paymentCod && cardDetailsForm) {
            paymentCod.addEventListener('change', () => {
                if (paymentCod.checked) {
                    cardDetailsForm.style.display = 'none';
                }
            });
        }

        if(paymentCard && cardDetailsForm) {
            paymentCard.addEventListener('change', () => {
                if (paymentCard.checked) {
                    cardDetailsForm.style.display = 'block';
                }
            });
        }
    }
});

// 1. LISTING PAGE FUNCTIONS (variety.html)

function renderCakes(filterCategory = 'all') {
    const container = document.getElementById('cakesContainer');
    if (!container) return;
    container.innerHTML = '';

    const filteredCakes = (filterCategory === 'all')
        ? cakes
        : cakes.filter(cake => cake.category === filterCategory);

    if (filteredCakes.length === 0) {
        container.innerHTML = `<div class="col-12 text-center"><p style="color: var(--dark); font-size: 1.2rem;">No cakes found in this category.</p></div>`;
        return;
    }

    filteredCakes.forEach(cake => {
        const cakeCard = document.createElement('div');
        cakeCard.className = 'col-lg-4 col-md-6';
        cakeCard.innerHTML = `
            <div class="cake-card">
                <a href="product.html?id=${cake.id}">
                    <img src="${cake.image}" class="cake-img" alt="${cake.name}">
                </a>
                <div class="cake-body">
                    <h3 class="cake-title">
                        <a href="product.html?id=${cake.id}" class="text-decoration-none" style="color: var(--dark);">${cake.name}</a>
                    </h3>
                    <p class="cake-desc">${cake.description}</p>
                    <p class="cake-price">${cake.price.toFixed(0)}</p>
                    <button class="btn btn-add-cart" data-id="${cake.id}">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        `;
        container.appendChild(cakeCard);
    });

    document.querySelectorAll('.btn-add-cart').forEach(button => {
        button.addEventListener('click', function() {
            const cakeId = parseInt(this.getAttribute('data-id'));
            addToCart(cakeId, 1);
        });
    });
}

// 2. PRODUCT DETAILS PAGE FUNCTIONS

function loadProductDetails() {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = parseInt(urlParams.get('id'));
    const product = cakes.find(c => c.id === productId);

    const container = document.getElementById('product-content');
    const reviewsContainer = document.getElementById('reviews-list');
    
    // ======== NEW: Get related cakes section ========
    const relatedSection = document.querySelector('.related-cakes-section');

    if (!container || !relatedSection) return;

    if (!product) {
        container.innerHTML = '<div class="col-12 text-center"><h2>Product not found!</h2><a href="index.html" class="btn btn-primary">Back to Home</a></div>';
        relatedSection.style.display = 'none'; // Hide related section if product not found
        return;
    }

    container.innerHTML = `
        <div class="col-md-6 product-image">
            <img src="${product.image}" alt="${product.name}" class="img-fluid">
        </div>
        <div class="col-md-6 product-info">
            <h1>${product.name}</h1>
            <div class="price">${product.price.toFixed(0)}</div>
            <p class="description">${product.description}</p>

            <div class="quantity-selector">
                <label for="quantity-input">Quantity:</label>
                <button class="quantity-btn minus" id="quantity-minus">-</button>
                <input type="number" class="quantity-input" value="1" min="1" id="quantity-input">
                <button class="quantity-btn plus" id="quantity-plus">+</button>
            </div>

            <button class="btn btn-add-to-cart-page" id="add-to-cart-btn">
                <i class="fas fa-cart-plus"></i> Add to Cart
            </button>
        </div>
    `;

    if (reviewsContainer) {
        renderReviews(product, reviewsContainer);
    }

    const reviewFormWrapper = document.querySelector('.add-review-section');
    const reviewPermissionMessage = document.getElementById('review-permission-message');

    if (reviewFormWrapper && reviewPermissionMessage) {
        const purchaseHistory = JSON.parse(localStorage.getItem('velvetWhiskPurchaseHistory')) || [];
        const hasPurchased = purchaseHistory.includes(productId);

        if (hasPurchased) {
            reviewFormWrapper.style.display = 'block';
            reviewPermissionMessage.style.display = 'none';
            const reviewForm = document.getElementById('add-review-form');
            if (reviewForm) {
                reviewForm.addEventListener('submit', (e) => handleReviewSubmit(e, product, reviewsContainer));
            }
        } else {
            reviewFormWrapper.style.display = 'none';
            reviewPermissionMessage.style.display = 'block';
        }
    }

    const qtyInput = document.getElementById('quantity-input');
    const minusBtn = document.getElementById('quantity-minus');
    const plusBtn = document.getElementById('quantity-plus');
    const addToCartBtn = document.getElementById('add-to-cart-btn');

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
    if (addToCartBtn && qtyInput) {
        addToCartBtn.addEventListener('click', () => {
            const quantity = parseInt(qtyInput.value);
            addToCart(product.id, quantity);
        });
    }

    // ======== NEW: Call the renderRelatedCakes function ========
    renderRelatedCakes(product);
}

// ======== NEW: Function to render related cakes ========
function renderRelatedCakes(currentProduct) {
    const container = document.getElementById('related-cakes-container');
    const section = document.querySelector('.related-cakes-section');

    if (!container || !section) return; // Exit if elements don't exist

    // 1. Filter for cakes in the same category, but exclude the current cake
    const relatedCakes = cakes.filter(cake => 
        cake.category === currentProduct.category && cake.id !== currentProduct.id
    );

    // 2. Check if we found any
    if (relatedCakes.length === 0) {
        section.style.display = 'none'; // Hide the whole section
        return;
    }

    // 3. If we have related cakes, show the section and clear it
    section.style.display = 'block';
    container.innerHTML = '';

    // 4. Loop through (max 3) and display them
    // .slice(0, 3) ensures we only show a maximum of 3 related cakes
    relatedCakes.slice(0, 3).forEach(cake => {
        const cakeCard = document.createElement('div');
        cakeCard.className = 'col-lg-4 col-md-6';
        
        // Using simplified cake-card HTML. 
        // The specific CSS for .related-cakes-section will hide the description.
        cakeCard.innerHTML = `
            <div class="cake-card">
                <a href="product.html?id=${cake.id}">
                    <img src="${cake.image}" class="cake-img" alt="${cake.name}">
                </a>
                <div class="cake-body text-center">
                    <h3 class="cake-title">
                        <a href="product.html?id=${cake.id}" class="text-decoration-none" style="color: var(--dark);">${cake.name}</a>
                    </h3>
                    <p class="cake-price">${cake.price.toFixed(0)}</p>
                    <p class="cake-desc">${cake.description}</p> 
                    <a href="product.html?id=${cake.id}" class="btn btn-outline-primary">View Details</a>
                </div>
            </div>
        `;
        container.appendChild(cakeCard);
    });
}


function renderReviews(product, container) {
    if (!container) return;
    container.innerHTML = '';
    const originalReviews = product.reviews || [];
    const newReviews = loadReviewsFromLocalStorage(product.id);
    const allReviews = originalReviews.concat(newReviews);

    if (allReviews.length > 0) {
        allReviews.forEach(review => {
            let stars = '';
            for (let i = 0; i < 5; i++) {
                stars += `<i class="fa${i < review.rating ? 's' : 'r'} fa-star"></i>`;
            }
            container.innerHTML += `
                <div class="review-item">
                    <div class="review-stars">${stars}</div>
                    <h5>${review.author || 'Anonymous'}</h5>
                    <p class="review-text">${review.text || ''}</p>
                </div>`;
        });
    } else {
        container.innerHTML = '<p>No reviews for this product yet.</p>';
    }
}

function handleReviewSubmit(event, product, reviewsContainer) {
    event.preventDefault();
    const authorInput = document.getElementById('review-author');
    const ratingInput = document.getElementById('review-rating');
    const textInput = document.getElementById('review-text');
    const reviewForm = document.getElementById('add-review-form');

    const author = authorInput ? authorInput.value.trim() : 'Anonymous'; 
    const rating = ratingInput ? parseInt(ratingInput.value) : 0;
    const text = textInput ? textInput.value.trim() : ''; 

    if (!author || !rating || !text) { 
        alert("Please fill out all fields in the review form.");
        return;
    }

    const newReview = { author, rating, text };
    saveReviewToLocalStorage(product.id, newReview);
    if (reviewsContainer) renderReviews(product, reviewsContainer);
    if (reviewForm) reviewForm.reset();
}

// 3. CHECKOUT PAGE FUNCTIONS

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
            <div class="order-summary-item">
                <div class="order-summary-item-name">
                    ${item.name} <span>(x${item.quantity})</span>
                </div>
                <div class="order-summary-item-price">${itemTotal.toFixed(0)}</div>
            </div>`;
    });
    totalElement.textContent = `${total.toFixed(0)}`; 
}

function handleCheckout(e) {
    e.preventDefault();
    if (cart.length === 0) {
        alert("Your cart is empty. Please add items before checking out.");
        return;
    }

    const paymentMethodInput = document.querySelector('input[name="paymentMethod"]:checked');
    const paymentMethod = paymentMethodInput ? paymentMethodInput.value : 'cod';
    let paymentMessage = "Your order will be processed as Cash on Delivery.";

    if (paymentMethod === 'card') {
        const cardNumber = document.querySelector('#card-details-form input[placeholder^="Card Number"]');
        const expiry = document.querySelector('#card-details-form input[placeholder="MM / YY"]');
        const cvc = document.querySelector('#card-details-form input[placeholder="CVC"]');
        if (!cardNumber?.value || !expiry?.value || !cvc?.value) { 
            alert("Please fill in all card details.");
            return;
        }
        paymentMessage = "Your order will be processed with your Credit/Debit Card (DEMO).";
    }

    const purchaseHistory = JSON.parse(localStorage.getItem('velvetWhiskPurchaseHistory')) || [];
    const newPurchases = cart.map(item => item.id);
    const updatedHistory = [...new Set([...purchaseHistory, ...newPurchases])];
    localStorage.setItem('velvetWhiskPurchaseHistory', JSON.stringify(updatedHistory));

    alert(`Thank you for your order!\n${paymentMessage}\n`);

    cart = [];
    saveCartToLocalStorage();
    window.location.href = "index.html";
}

// GLOBAL CART & MODAL FUNCTIONS

function addToCart(cakeId, quantityToAdd) {
    const cake = cakes.find(c => c.id === cakeId);
    if (!cake) return;

    const existingItem = cart.find(item => item.id === cakeId);
    if (existingItem) {
        existingItem.quantity += quantityToAdd;
    } else {
        cart.push({ ...cake, quantity: quantityToAdd }); 
    }
    saveCartToLocalStorage();
    updateCartDisplay();
    showAddedToCartMessage(cake.name);
}

function updateCartDisplay() {
    const totalCount = cart.reduce((total, item) => total + item.quantity, 0);
    if (cartCount) cartCount.textContent = totalCount;

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
        addCartControlsListeners();
    }
}

function addCartControlsListeners() {
    if (!cartItemsContainer) return;

    cartItemsContainer.removeEventListener('click', handleCartAction);
    cartItemsContainer.removeEventListener('change', handleCartAction); 
    cartItemsContainer.removeEventListener('input', handleCartInput);  

    cartItemsContainer.addEventListener('click', handleCartAction);
    cartItemsContainer.addEventListener('change', handleCartAction);
    cartItemsContainer.addEventListener('input', handleCartInput);
}

function handleCartAction(event) {
    const target = event.target;
    const id = parseInt(target.closest('[data-id]')?.getAttribute('data-id')); 

    if (!id) return; 

    if (target.classList.contains('quantity-btn') && target.classList.contains('minus')) {
        updateQuantity(id, -1);
    } else if (target.classList.contains('quantity-btn') && target.classList.contains('plus')) {
        updateQuantity(id, 1);
    } else if (target.classList.contains('remove-item') || target.closest('.remove-item')) { 
        removeFromCart(id);
    } else if (target.classList.contains('quantity-input') && event.type === 'change') {
        const newQuantity = parseInt(target.value);
        const item = cart.find(item => item.id === id);
        if (item && newQuantity > 0) {
            item.quantity = newQuantity;
            saveCartToLocalStorage();
            updateCartDisplay();
        } else if (item && newQuantity <= 0) {
            removeFromCart(id);
        } else {
            target.value = item ? item.quantity : 1; 
        }
    }
}

function handleCartInput(event) {
    const target = event.target;
    if (target.classList.contains('quantity-input')) {
        if (target.value !== '' && target.value < 1) {
             target.value = 1; 
        }
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

function toggleCart() {
    if (cartModal && modalOverlay) {
        cartModal.classList.toggle('open');
        modalOverlay.classList.toggle('active');
    }
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