@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1>Welcome to Furnistyle</h1>
    <p>Please login or register to continue.</p>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#authModal">
        Login / Sign Up
    </button>
</div>
@endsection
