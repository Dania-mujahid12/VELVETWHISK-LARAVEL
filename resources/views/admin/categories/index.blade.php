@extends('layouts.app')

@section('title', 'Manage Categories')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Categories</h2>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Add New Category</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered" style="background: white;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
      <tbody>
    @foreach ($categories as $category)
    <tr>
        <td style="vertical-align: middle;">{{ $category->id }}</td>
        <td style="vertical-align: middle;">{{ $category->name }}</td>
        <td style="vertical-align: middle;">{{ $category->description }}</td>
        <td style="vertical-align: middle;">
            <div class="d-flex gap-2">
                <a href="{{ route('admin.categories.edit', $category->id) }}" 
                   class="btn btn-primary btn-sm" 
                   style="padding: 6px 15px; border-radius: 6px; font-size: 0.9rem; background-color: var(--primary); border: none;">
                   <i class="fas fa-edit"></i> Edit
                </a>

                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="btn btn-danger btn-sm" 
                            onclick="return confirm('Are you sure?')"
                            style="padding: 6px 15px; border-radius: 6px; font-size: 0.9rem;">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>
    </table>
</div>
@endsection