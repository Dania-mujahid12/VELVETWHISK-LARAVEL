@extends('layouts.app')

@section('title', 'Edit Cake')

@section('content')
<div class="container" style="margin-top: 100px;">
    <h2>Edit Cake</h2>
    <form action="{{ route('admin.cakes.update', $cake->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $cake->name }}" class="form-control" required>
        </div>
       <div class="mb-3">
    <label>Category:</label>
    <select name="category" class="form-control">
        @foreach($categories as $category)
            <option value="{{ $category->name }}" {{ $cake->category == $category->name ? 'selected' : '' }}>
                {{ ucfirst($category->name) }}
            </option>
        @endforeach
    </select>
</div>>
        <div class="mb-3">
            <label>Price:</label>
            <input type="number" name="price" value="{{ $cake->price }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control" required>{{ $cake->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Image:</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ $cake->image }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection