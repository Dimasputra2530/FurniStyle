<!-- resources/views/partials/auth-modal.blade.php -->
<div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true" aria-labelledby="authModalLabel" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 15px; overflow: hidden;">
      <div class="row g-0">
        <!-- Left: Form Area -->
        <div class="col-md-6 p-5 bg-white">
          <div class="modal-header border-0 p-0 mb-4">
            <h5 class="modal-title fw-bold text-success" id="authModalLabel">Login to your account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- Google Button -->
          <button class="btn btn-outline-secondary w-100 mb-3" type="button">
            <i class="bi bi-google me-2"></i> Continue with Google
          </button>

          <div class="text-center my-2 text-muted">— or —</div>

          <!-- Form Sign Up -->
          <form id="form-signup" action="{{ route('signup') }}" method="POST" novalidate>
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="email-signup" class="form-label">Email</label>
              <input type="email" class="form-control" id="email-signup" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="password-signup" class="form-label">Password</label>
              <input type="password" class="form-control" id="password-signup" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
              <label class="form-check-label" for="terms">
                I agree to all Terms, Privacy Policy and Fees
              </label>
            </div>
            <button type="submit" class="btn btn-success w-100">Sign Up</button>
          </form>

          <!-- Form Login -->
          <form id="form-login" action="{{ route('login') }}" method="POST" class="d-none" novalidate>
            @csrf
            <div class="mb-3">
              <label for="email-login" class="form-label">Email</label>
              <input type="email" class="form-control" id="email-login" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="password-login" class="form-label">Password</label>
              <input type="password" class="form-control" id="password-login" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>
          </form>

          <div class="text-center mt-3">
            <small>
              <span id="toggle-text">Already have an account? </span>
              <a href="#" id="toggleLoginForm">Login</a>
            </small>
          </div>
        </div>

        <!-- Right: Image Area -->
        <div class="col-md-6 d-none d-md-block" style="background: url('{{ asset('image/Rectangle 9 (1).png') }}') center center / cover no-repeat;">
          <div class="h-100 d-flex align-items-center justify-content-center text-white p-4" style="background-color: rgba(0,0,0,0.4);">
            <h4 class="text-center fw-bold">Discovering the Best Furniture for Your Home</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleLink = document.getElementById('toggleLoginForm');
    const signupForm = document.getElementById('form-signup');
    const loginForm = document.getElementById('form-login');
    const toggleText = document.getElementById('toggle-text');

    toggleLink.addEventListener('click', function (e) {
      e.preventDefault();
      signupForm.classList.toggle('d-none');
      loginForm.classList.toggle('d-none');

      if (signupForm.classList.contains('d-none')) {
        toggleText.textContent = "Don't have an account? ";
        toggleLink.textContent = "Sign up";
      } else {
        toggleText.textContent = "Already have an account? ";
        toggleLink.textContent = "Login";
      }
    });
  });
</script>
