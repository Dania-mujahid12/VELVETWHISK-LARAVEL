@extends('layouts.app')

@section('title', 'Admin - Manage Cakes')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Cakes</h2>
        <a href="{{ route('admin.cakes.create') }}" class="btn btn-success">Add New Cake</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered" style="background: white;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cakes as $cake)
            <tr>
                <td><img src="{{ $cake->image }}" width="50"></td>
                <td>{{ $cake->name }}</td>
                <td>{{ ucfirst($cake->category) }}</td>
                <td>{{ $cake->price }}</td>
                <td>
                    <form action="{{ route('admin.cakes.destroy', $cake->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.cakes.edit', $cake->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection