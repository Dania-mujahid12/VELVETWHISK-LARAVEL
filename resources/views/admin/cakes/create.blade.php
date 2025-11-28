@extends('layouts.app')

@section('title', 'Add New Cake')

@section('content')
<div class="container" style="margin-top: 100px;">
    <h2>Add New Cake</h2>
    <form action="{{ route('admin.cakes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
       <div class="mb-3">
    <label>Category:</label>
    <select name="category" class="form-control">
        <option value="">Select a Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->name }}">{{ ucfirst($category->name) }}</option>
        @endforeach
    </select>
</div>
        <div class="mb-3">
            <label>Price:</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection