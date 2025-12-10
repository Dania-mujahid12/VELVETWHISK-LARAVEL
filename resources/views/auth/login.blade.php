@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container" style="margin-top: 120px; max-width: 500px;">
    <div class="card p-4" style="background: var(--content-bg); border: 1px solid var(--border-color);">
        <h2 class="text-center mb-4" style="color: var(--primary);">Login</h2>
        
        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label style="color:white;">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label style="color:white;">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="text-center mt-3" style="color: #d5d5d5;">Don't have an account? <a href="{{ route('register') }}" style="color: var(--primary);">Sign Up</a></p>
    </div>
</div>
@endsection