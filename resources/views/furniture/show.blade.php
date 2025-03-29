@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
<div class="container">
    <h1>Detail Furniture</h1>
    
    <p><strong>Nama:</strong> {{ $furniture->name }}</p>
    <p><strong>Harga:</strong> Rp {{ number_format($furniture->price, 0, ',', '.') }}</p>
    <p><strong>Deskripsi:</strong> {{ $furniture->description }}</p>

    <a href="{{ route('furniture.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
