    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AuthController;

    Route::get('/', function () {
        return view('home');
    });

    // Signup form langsung ke view
    Route::get('/signup', function () {
        return view('LOGIN.signup'); 
    })->name('signup.form');

    // Login form langsung ke view
    Route::get('/login', function () {
        return view('LOGIN.login');
    })->name('login');

    // Proses signup dan login
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/shop', function () {
    return view('shop');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/cart', function () {
    return view('cart');
    });
