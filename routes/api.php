<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('users', UserController::class);

Route::apiResource('posts', PostsController::class);

Route::get('products', [ProductController::class, 'index']);
 
Route::delete('products/{id}', [ProductController::class, 'softDelete']);

Route::get('products/only-trashed', [ProductController::class, 'productsWithSoftDeleted']);

Route::get('/user/{user_id}/posts', [UserController::class, 'getUserPosts']);

// Route::get('/user/{user_id}/posts/{post_id}', [PostsController::class, 'getUserPostByPostId' ]);