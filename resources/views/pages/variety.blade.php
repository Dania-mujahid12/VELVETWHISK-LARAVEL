@extends('layouts.app')

@section('title', 'Our Cake Variety')

@section('content')

<div class="container" style="margin-top: 120px;">

    <div class="section-title">
        <h2>Our Cake Collection</h2>
    </div>

    <nav class="cake-filter-nav d-flex justify-content-center flex-wrap mb-5">
        <a href="{{ route('variety', ['category' => 'all']) }}" 
           class="nav-link cake-filter-btn {{ request('category') == 'all' || !request('category') ? 'active' : '' }}">
           All
        </a>
        
        <a href="{{ route('variety', ['category' => 'birthday']) }}" 
           class="nav-link cake-filter-btn {{ request('category') == 'birthday' ? 'active' : '' }}">
           Birthday
        </a>

        <a href="{{ route('variety', ['category' => 'wedding']) }}" 
           class="nav-link cake-filter-btn {{ request('category') == 'wedding' ? 'active' : '' }}">
           Wedding
        </a>

        <a href="{{ route('variety', ['category' => 'party']) }}" 
           class="nav-link cake-filter-btn {{ request('category') == 'party' ? 'active' : '' }}">
           Party
        </a>

        <a href="{{ route('variety', ['category' => 'bridal shower']) }}" 
           class="nav-link cake-filter-btn {{ request('category') == 'bridal shower' ? 'active' : '' }}">
           Bridal Shower
        </a>

        <a href="{{ route('variety', ['category' => 'graduation']) }}" 
           class="nav-link cake-filter-btn {{ request('category') == 'graduation' ? 'active' : '' }}">
           Graduation
        </a>

        <a href="{{ route('variety', ['category' => 'gender reveal']) }}" 
           class="nav-link cake-filter-btn {{ request('category') == 'gender reveal' ? 'active' : '' }}">
           Gender Reveal
        </a>
    </nav>

    <div class="row gy-4">
        @if($cakes->count() > 0)
            @foreach($cakes as $cake)
            <div class="col-lg-4 col-md-6">
                <div class="cake-card">
                    <a href="{{ route('product', ['id' => $cake->id]) }}">
                        <img src="{{ $cake->image }}" class="cake-img" alt="{{ $cake->name }}">
                    </a>
                    <div class="cake-body">
                        <h3 class="cake-title">
                            <a href="{{ route('product', ['id' => $cake->id]) }}" class="text-decoration-none" style="color: var(--dark);">
                                {{ $cake->name }}
                            </a>
                        </h3>
                        <p class="cake-desc">{{ Str::limit($cake->description, 80) }}</p>
                        <p class="cake-price">{{ number_format($cake->price, 0) }}</p>
                        
                        <button class="btn btn-add-cart" 
                            data-id="{{ $cake->id }}"
                            data-name="{{ $cake->name }}"
                            data-price="{{ $cake->price }}"
                            data-image="{{ $cake->image }}">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-12 text-center py-5">
                <h3>No cakes found in this category.</h3>
                <a href="{{ route('variety') }}" class="btn btn-outline-primary mt-3">View All Cakes</a>
            </div>
        @endif
    </div>

</div>

@endsection