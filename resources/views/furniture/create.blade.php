@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Furniture</h1>
    
    <form action="{{ route('furniture.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection