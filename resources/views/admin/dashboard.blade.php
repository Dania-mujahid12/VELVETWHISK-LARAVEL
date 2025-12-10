@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container" style="margin-top: 120px;">
    
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 style="font-family: 'Playfair Display', serif; color: var(--dark);">Admin Dashboard</h1>
        <span class="badge bg-secondary">Welcome, {{ Auth::user()->name }}</span>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card p-4 border-0 shadow-sm" style="background: #2d2420; color: white; border-radius: 15px;">
                <div class="card-body text-center">
                    <i class="fas fa-birthday-cake fa-3x mb-3" style="color: var(--primary);"></i>
                    <h3 class="card-title">Products (Cakes)</h3>
                    <p class="card-text text-white-50">Manage your cake inventory, prices, and images.</p>
                    <h2 class="display-4 fw-bold my-3">{{ $cakeCount }}</h2>
                    <a href="{{ route('admin.cakes.index') }}" class="btn btn-primary w-100 py-2" style="border-radius: 50px;">
                        Manage Cakes
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-4 border-0 shadow-sm" style="background: #2d2420; color: white; border-radius: 15px;">
                <div class="card-body text-center">
                    <i class="fas fa-tags fa-3x mb-3" style="color: var(--secondary);"></i>
                    <h3 class="card-title">Categories</h3>
                    <p class="card-text text-white-50">Organize your products into groups (Wedding, Party, etc).</p>
                    <h2 class="display-4 fw-bold my-3">{{ $categoryCount }}</h2>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-light w-100 py-2" style="border-radius: 50px;">
                        Manage Categories
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection