<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\PostIndex;
use Illuminate\Auth\Events\Logout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sewa', App\Http\Livewire\LvRelasiSewa::class)->name('lv.sewa.index');

Route::middleware(['admin:admin'])->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'])->group(function ()
{
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('auth:admin', 'role:admin');

    Route::group(['namespace' => 'App\Http\Controllers'], function () {
        //User Routes
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UsersController::class, 'index'])->name('users.index');
            Route::get('/create', [UsersController::class, 'create'])->name('users.create');
            Route::post('/create', [UsersController::class, 'store'])->name('users.store');
            Route::get('/{user}/show', [UsersController::class, 'show'])->name('users.show');
            Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
            Route::patch('/{user}/update', [UsersController::class, 'update'])->name('users.update');
            Route::delete('/{user}/delete', [UsersController::class, 'destroy'])->name('users.destroy');
        });

        //User Routes
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/', [PostsController::class, 'index'])->name('posts.index');
            Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
            Route::post('/create', [PostsController::class, 'store'])->name('posts.store');
            Route::get('/{post}/show', [PostsController::class, 'show'])->name('posts.show');
            Route::get('/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
            Route::patch('/{post}/update', [PostsController::class, 'update'])->name('posts.update');
            Route::delete('/{post}/delete', [PostsController::class, 'destroy'])->name('posts.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['namespace' => 'App\Http\Controllers'], function () {
        // User Routes
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        // User Routes
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout.perform');

// Route::get('/posts', PostIndex::class)->name('posts.index');
