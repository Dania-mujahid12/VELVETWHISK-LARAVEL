@extends('layouts.app')

@section('title', 'VelvetWhisk - Home')

@section('content')
<section id="home" class="hero-carousel-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/background1.jpg') }}" class="d-block w-100" alt="Chocolate Cake">
                <div class="carousel-caption-overlay"></div>
                <div class="carousel-caption">
                    <h1>"A party without cake is just a meeting."</h1>
                    <p>Explore our collection of handcrafted celebration cakes.</p>
                    <a href="{{ route('variety') }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/background2.jpg') }}" class="d-block w-100" alt="Fruit Cake">
                <div class="carousel-caption-overlay"></div>
                <div class="carousel-caption">
                    <h1>Freshness in Every Bite</h1>
                    <p>Made with the finest ingredients and seasonal fruits.</p>
                    <a href="{{ route('variety') }}" class="btn btn-primary">Discover More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/background3.jpg') }}" class="d-block w-100" alt="Wedding Cake">
                <div class="carousel-caption-overlay"></div>
                <div class="carousel-caption">
                    <h1>Make Your Moments Unforgettable</h1>
                    <p>Elegant designs for weddings, anniversaries, and special events.</p>
                    <a href="{{ route('variety') }}" class="btn btn-primary">Custom Orders</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="py-5" style="background-color: var(--light);">
    <div class="container">
        
        <div class="section-title">
            <h2>Our Cakes</h2>
        </div>

        <ul class="nav nav-pills justify-content-center mb-5 cake-filter-nav" id="cake-filters">
            <li class="nav-item">
                <button class="nav-link cake-filter-btn active" data-category="all">All</button>
            </li>
            <li class="nav-item">
                <button class="nav-link cake-filter-btn" data-category="birthday">Birthday</button>
            </li>
            <li class="nav-item">
                <button class="nav-link cake-filter-btn" data-category="wedding">Wedding</button>
            </li>
            <li class="nav-item">
                <button class="nav-link cake-filter-btn" data-category="bridal shower">Bridal Shower</button>
            </li>
            <li class="nav-item">
                <button class="nav-link cake-filter-btn" data-category="party">Party</button>
            </li>
            <li class="nav-item">
                <button class="nav-link cake-filter-btn" data-category="graduation">Graduation</button>
            </li>
            <li class="nav-item">
                <button class="nav-link cake-filter-btn" data-category="gender reveal">Gender Reveal</button>
            </li>
        </ul>

        <div id="cakesContainer" class="row gy-4">
            </div>

    </div>
</section>


@endsection



