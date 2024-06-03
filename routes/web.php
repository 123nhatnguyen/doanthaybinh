    <?php

    use App\Http\Controllers\CardController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\CheckoutController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\OrderItemController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;
    use App\Helper\Cart; 

   
        // Route::resource('users',UserController::class);
        Route::resource('categories',CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('order',OrderController::class); 
        Route::resource('orderitems',OrderItemController::class); 
// home
        Route::get('/search', [HomeController::class, 'search'])->name('search-home');
        Route::get('products',[ProductController::class,'index'])->name('products');
        Route::resource('/', HomeController::class, ['name'=> 'home']);
        Route::get('/login',[UserController::class,'login'])->name('login');
        Route::post('/login',[UserController::class,'postLogin']);
        Route::get('/logout',[UserController::class,'logout'])->name('logout');
        Route::get('/register',[UserController::class,'register'])->name('register');
        Route::post('/register',[UserController::class,'postRegister']);
        Route::get('/page-show/{id}', [HomeController::class, 'show'])->name('home-show-page');
        Route::get('/page-categories/{slug}', [CategoryController::class, 'show'])->name('home-category-page');

// admin

        Route::group(['prefix' => 'admin'], function () {
            Route::resource('users', App\Http\Controllers\Admin\UserController::class, ['names' => 'admin.users']);
            Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ['names' => 'admin.products']);

        });
       

//card        
Route::post('/add-to-card/{id}', [CardController::class, 'addToCard'])->name('add-to-card');
Route::get('/page-card', [CardController::class, 'showCard'])->name('page-card');
Route::delete('/delete-card/{id}', [CardController::class, 'deleteCard'])->name('delete-card');
Route::put('/update-card/{id}', [CardController::class, 'updateCard'])->name('update-card');
// checkout 
 Route::get('/checkout-page',[CardController::class,'showCardCheckout'])->name('checkout-page');
 Route::post('/checkout', [CheckoutController::class, 'handleCheckout'])->name('checkout');
