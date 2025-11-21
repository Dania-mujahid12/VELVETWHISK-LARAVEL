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
                <option value="birthday" {{ $cake->category == 'birthday' ? 'selected' : '' }}>Birthday</option>
                <option value="wedding" {{ $cake->category == 'wedding' ? 'selected' : '' }}>Wedding</option>
                <option value="bridal shower" {{ $cake->category == 'bridal shower' ? 'selected' : '' }}>Bridal Shower</option>
                <option value="party" {{ $cake->category == 'party' ? 'selected' : '' }}>Party</option>
                <option value="graduation" {{ $cake->category == 'graduation' ? 'selected' : '' }}>Graduation</option>
                <option value="gender reveal" {{ $cake->category == 'gender reveal' ? 'selected' : '' }}>Gender Reveal</option>
            </select>
        </div>
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