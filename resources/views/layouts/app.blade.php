<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Furnistyle</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}" />
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    
    <!-- CSRF token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Furnistyle</a>
            <!-- Bisa tambahkan tombol untuk membuka modal -->
            <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#authModal">
            Login / Sign Up
            </button>

        </div>

        
    </nav>

    <div class="container mt-3">
        @yield('content')
    </div>

    <!-- Modal Login/SignUp -->
    @include('partials.auth-modal') {{-- simpan modal di resources/views/partials/auth-modal.blade.php --}}

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Toggle Login/Signup Script -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const formLogin = document.getElementById('form-login');
        const formSignup = document.getElementById('form-signup');
        const toggleLoginForm = document.getElementById('toggleLoginForm');
        const toggleText = document.getElementById('toggle-text');
        const modalTitle = document.getElementById('authModalLabel');

        toggleLoginForm.addEventListener('click', function(e) {
            e.preventDefault();
            if (formSignup.classList.contains('d-none')) {
                formSignup.classList.remove('d-none');
                formLogin.classList.add('d-none');
                modalTitle.textContent = 'Create your account';
                toggleText.textContent = "Already have an account? ";
                toggleLoginForm.textContent = 'Sign in';
            } else {
                formLogin.classList.remove('d-none');
                formSignup.classList.add('d-none');
                modalTitle.textContent = 'Login to your account';
                toggleText.textContent = " Don't have an account";
                toggleLoginForm.textContent = 'Sign up';
            }
        });
    });
    </script>

@include('partials.auth-modal')

</body>
</html>
