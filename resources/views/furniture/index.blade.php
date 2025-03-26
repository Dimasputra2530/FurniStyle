@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Furniture</h1>
    
    <a href="{{ route('furniture.create') }}" class="btn btn-primary">Tambah Furniture</a>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($furnitures as $furniture)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $furniture->name }}</td>
                    <td>Rp{{ number_format($furniture->price, 0, ',', '.') }}</td>
                    <td>{{ $furniture->description }}</td>
                    <td>
                        <a href="{{ route('furniture.edit', $furniture->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('furniture.destroy', $furniture->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
