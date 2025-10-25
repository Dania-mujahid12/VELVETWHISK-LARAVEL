@extends('layouts.app')

@section('title', 'VelvetWhisk - Cake Details')

@section('content')
<section class="py-5" id="product-details" style="margin-top: 80px;">
    <div class="container">
        <div class="row g-5" id="product-content">
            <div class="col-12 text-center">
                <h2>Loading Product...</h2>
                </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="reviews-section">
                    <h3 class="section-title">
                        <h2>Reviews</h2>
                    </h3>
                    <div id="reviews-list">
                        </div>

                    <div class="add-review-section mt-5" style="display: none;">
                        <h4 class="mb-3">Leave a Review</h4>
                        <form id="add-review-form">
                            <div class="mb-3">
                                <input type="text" id="review-author" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <select id="review-rating" class="form-control" required>
                                    <option value="">Select Rating...</option>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea id="review-text" class="form-control" rows="4" placeholder="Write your review..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
                    </div>
                    <div id="review-permission-message" class="add-review-section mt-5" style="display: none;">
                        <p class="text-center text-muted">You must purchase this cake to leave a review.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-5 border-top related-cakes-section">
            <div class="col-12">
                <div class="section-title"><h2>You Might Also Like</h2></div>
                <div class="row gy-4" id="related-cakes-container">
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection