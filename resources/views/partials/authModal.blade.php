<!-- Modal Login & Sign Up -->
<div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="border-radius: 15px; overflow: hidden;">
      <div class="d-flex flex-row">
        <!-- Left: Form Area -->
        <div class="col-md-6 p-5">
          <div class="modal-header border-0 p-0 mb-3">
            <h5 class="modal-title fw-bold text-success" id="authModalLabel">Login to your account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <button class="btn btn-outline-secondary w-100 mb-3">
            <i class="bi bi-google me-2"></i> Login with Google
          </button>

          <div class="text-center my-2 text-muted">— or —</div>

          <!-- Form Sign Up -->
          <form id="form-signup" action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
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
          <form id="form-login" action="{{ route('login') }}" method="POST" class="d-none">
            @csrf
            <div class="mb-3">
              <label for="login-email" class="form-label">Email</label>
              <input type="email" class="form-control" id="login-email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="login-password" class="form-label">Password</label>
              <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>
          </form>

          <div class="text-center mt-3">
            <small id="toggle-text">Don't have an account? <a href="#" id="toggleLoginForm">Sign up</a></small>
          </div>
        </div>

        <!-- Right: Image or Promo Area -->
        <div class="col-md-6 d-none d-md-block p-0">
          <img src="{{ asset('images/auth-side.jpg') }}" alt="Auth Image" class="img-fluid h-100 w-100" style="object-fit: cover;">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script toggle login/signup form -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const toggleLink = document.getElementById('toggleLoginForm');
  const signupForm = document.getElementById('form-signup');
  const loginForm = document.getElementById('form-login');
  const toggleText = document.getElementById('toggle-text');

  toggleLink.addEventListener('click', function(e) {
    e.preventDefault();
    if (signupForm.classList.contains('d-none')) {
      signupForm.classList.remove('d-none');
      loginForm.classList.add('d-none');
      toggleText.innerHTML = "Don't have an account? <a href='#' id='toggleLoginForm'>Sign up</a>";
      toggleLink.textContent = 'Sign up';
    } else {
      signupForm.classList.add('d-none');
      loginForm.classList.remove('d-none');
      toggleText.innerHTML = "Already have an account? <a href='#' id='toggleLoginForm'>Login</a>";
      toggleLink.textContent = 'Login';
    }
  });
});
</script>
