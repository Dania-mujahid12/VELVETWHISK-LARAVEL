@extends('layouts.app')

@section('title', 'VelvetWhisk - Our Cakes')

@section('content')
<section class="py-5" id="variety" style="margin-top: 80px;">
    <div class="container">
        <div class="section-title">
            <h2>Our Cake Collection</h2>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-11">
                <ul class="nav nav-pills cake-filter-nav justify-content-center">
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
                        <button class="nav-link cake-filter-btn" data-category="party">Party</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link cake-filter-btn" data-category="bridal shower">Bridal Shower</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link cake-filter-btn" data-category="graduation">Graduation</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link cake-filter-btn" data-category="gender reveal">Gender Reveal</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row gy-4" id="cakesContainer">
            </div>
    </div>
</section>
@endsection