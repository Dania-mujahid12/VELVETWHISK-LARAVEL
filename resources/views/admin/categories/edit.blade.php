@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="container" style="margin-top: 100px;">
    <h2>Edit Category</h2>
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Category Name:</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control" required>{{ $category->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection