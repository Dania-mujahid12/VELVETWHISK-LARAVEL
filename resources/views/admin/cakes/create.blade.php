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
    <label class="form-label">Cake Image:</label>
    
    <input type="file" name="image" id="cake-image-input" class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif">
    
    <small id="image-error" class="text-danger mt-2" style="display: none;"></small>

    <div class="mt-3">
        <img id="image-preview" src="#" alt="Image Preview" style="max-width: 200px; border-radius: 10px; display: none; border: 2px solid var(--primary);">
    </div>
</div>

<script>
    document.getElementById('cake-image-input').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image-preview');
        const errorMsg = document.getElementById('image-error');
        const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        const maxSize = 2 * 1024 * 1024; // 2MB in bytes

        // Reset
        preview.style.display = 'none';
        errorMsg.style.display = 'none';

        if (file) {
            // 1. Validate File Type
            if (!validTypes.includes(file.type)) {
                errorMsg.innerText = "Invalid file type. Please upload JPG, PNG, or GIF.";
                errorMsg.style.display = 'block';
                this.value = ''; // Clear input
                return;
            }

            // 2. Validate File Size
            if (file.size > maxSize) {
                errorMsg.innerText = "File is too large. Maximum size is 2MB.";
                errorMsg.style.display = 'block';
                this.value = ''; // Clear input
                return;
            }

            // 3. Show Preview
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection