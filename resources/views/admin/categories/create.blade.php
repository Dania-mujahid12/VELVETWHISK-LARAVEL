@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="container" style="margin-top: 100px;">
    <h2>Add New Category</h2>
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Category Name:</label>
            <input type="text" name="name" class="form-control" required placeholder="e.g., Birthday Cakes">
        </div>
        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control" required placeholder="Description of this category..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection