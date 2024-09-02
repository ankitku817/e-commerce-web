// routes/api.php

use App\Http\Controllers\ProductController;

Route::get('/search', [ProductController::class, 'search']);
