@extends('layouts.app')

@section('title', $cake->name)

@section('content')

<div class="container" style="margin-top: 120px;">

    <section id="product-details" class="mb-5">
        <div class="product-info" style="background: var(--content-bg); padding: 30px; border-radius: 12px; border: 1px solid var(--border-color);">
            <div class="row g-5">
                <div class="col-md-6 product-image">
                    <img src="{{ $cake->image }}" alt="{{ $cake->name }}" class="img-fluid rounded shadow" style="width: 100%; height: auto; object-fit: cover;">
                </div>
                
                <div class="col-md-6">
                    <h1 style="font-family: 'Playfair Display', serif; font-weight: 700;">{{ $cake->name }}</h1>
                    <div class="price" style="font-size: 2.2rem; color: var(--secondary); font-weight: 600; margin-bottom: 20px;">
                        PKR {{ number_format($cake->price, 0) }}
                    </div>
                    <p class="description" style="color: #d5d5d5; font-size: 1.1rem; line-height: 1.7;">
                        {{ $cake->description }}
                    </p>

                    <div class="quantity-selector mb-4 mt-4">
                        <label for="quantity-input" style="font-weight: 600; margin-right: 10px;">Quantity:</label>
                        <button class="quantity-btn minus" id="quantity-minus" style="width: 30px; height: 30px;">-</button>
                        <input type="number" class="quantity-input" value="1" min="1" id="quantity-input" style="width: 50px; text-align: center;">
                        <button class="quantity-btn plus" id="quantity-plus" style="width: 30px; height: 30px;">+</button>
                    </div>

                    <button class="btn btn-add-to-cart-page btn-primary" id="add-to-cart-btn"
                        style="padding: 12px 30px; border-radius: 50px; text-transform: uppercase; font-weight: 600;"
                        data-id="{{ $cake->id }}"
                        data-name="{{ $cake->name }}"
                        data-price="{{ $cake->price }}"
                        data-image="{{ $cake->image }}">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="my-5">
        <div class="reviews-section" style="background: var(--content-bg); padding: 40px; border-radius: 12px; border: 1px solid var(--border-color);">
            <h3 class="mb-4" style="font-family: 'Playfair Display', serif;">Customer Reviews</h3>
            
            <div id="reviews-list">
                <div class="review-item" style="border-bottom: 1px solid var(--border-color); padding-bottom: 15px; margin-bottom: 15px;">
                    <div class="review-stars" style="color: var(--accent); margin-bottom: 5px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h5 style="color: var(--dark); font-weight: 600;">Aisha Khan</h5>
                    <p class="review-text" style="color: #d5d5d5;">Absolutely delicious! The design was exactly what I wanted.</p>
                </div>
                <div class="review-item">
                    <div class="review-stars" style="color: var(--accent); margin-bottom: 5px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </div>
                    <h5 style="color: var(--dark); font-weight: 600;">Bilal Ahmed</h5>
                    <p class="review-text" style="color: #d5d5d5;">Great taste and very fresh. Highly recommended.</p>
                </div>
            </div>

            <div class="add-review-section mt-5" style="border-top: 1px solid var(--border-color); padding-top: 20px;">
                <h4 style="font-family: 'Playfair Display', serif;">Add Your Review</h4>
                <form id="add-review-form">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="review-author" placeholder="Your Name" required style="background: #2d2420; color: white; border: 1px solid var(--border-color);">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="review-rating" required style="background: #2d2420; color: white; border: 1px solid var(--border-color);">
                            <option value="5">5 Stars (Excellent)</option>
                            <option value="4">4 Stars (Good)</option>
                            <option value="3">3 Stars (Average)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="review-text" rows="3" placeholder="Your Review" required style="background: #2d2420; color: white; border: 1px solid var(--border-color);"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="border-radius: 50px;">Submit Review</button>
                </form>
            </div>
        </div>
    </section>

    <section class="related-cakes-section border-top pt-5 mt-5" style="border-top-color: var(--border-color) !important;">
        <div class="section-title text-center mb-5">
            <h2>You Might Also Like</h2>
        </div>
        
        <div id="related-cakes-container" class="row gy-4">
            @if($relatedCakes->count() > 0)
                @foreach($relatedCakes as $related)
                <div class="col-lg-4 col-md-6">
                    <div class="cake-card" style="height: 100%;">
                        <a href="{{ route('product', ['id' => $related->id]) }}">
                            <img src="{{ $related->image }}" class="cake-img" alt="{{ $related->name }}" style="height: 250px; object-fit: cover; width: 100%;">
                        </a>
                        <div class="cake-body text-center" style="padding: 20px;">
                            <h3 class="cake-title" style="font-size: 1.3rem;">
                                <a href="{{ route('product', ['id' => $related->id]) }}" class="text-decoration-none" style="color: var(--dark);">
                                    {{ $related->name }}
                                </a>
                            </h3>
                            <p class="cake-price" style="font-size: 1.2rem; color: var(--secondary); font-weight: 600;">
                                {{ number_format($related->price, 0) }}
                            </p>
                            <a href="{{ route('product', ['id' => $related->id]) }}" class="btn btn-outline-primary" style="border-radius: 50px;">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p class="text-center text-muted">No related cakes found.</p>
            @endif
        </div>
    </section>

</div>
@endsection