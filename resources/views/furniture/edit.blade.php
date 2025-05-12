@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Furniture</h1>
    <form action="{{ route('furniture.update', $furniture->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $furniture->name }}" class="form-control" required>
        <input type="number" name="price" value="{{ $furniture->price }}" class="form-control mt-2" required>
        <textarea name="description" class="form-control mt-2" required>{{ $furniture->description }}</textarea>
        <button type="submit" class="btn btn-success mt-2">Update</button>
    </form>
</div>
@endsection
