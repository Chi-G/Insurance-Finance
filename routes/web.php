<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminSubscriptionController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Investment;

// Authentication and Email Verification Route
Auth::routes(['verify' => true]);

// Public Routes
Route::get('/', function () {
    $deposits = \App\Models\Deposit::latest()->paginate(6);
    $withdrawals = \App\Models\Withdrawal::latest()->paginate(6);
    $investments = \App\Models\Investment::all();
    return view('welcome', compact('deposits', 'withdrawals', 'investments'));
});

Route::view('/about', 'about');
Route::view('/faq', 'faq');
Route::view('/blogs', 'blog');
Route::view('/contact', 'contact');
Route::view('/team', 'team');
Route::view('/reviews', 'review');
Route::get('/investment', function () {
    $deposits = \App\Models\Deposit::latest()->paginate(6);
    $withdrawals = \App\Models\Withdrawal::latest()->paginate(6);
    $investments = \App\Models\Investment::all();
    return view('investment', compact('deposits', 'withdrawals', 'investments'));
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // User Dashboard Routes
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    // User Portfolio Routes
    Route::get('/user/portfolio', [\App\Http\Controllers\SubscriptionController::class, 'index'])->name('user.portfolio');
    Route::post('/user/portfolio', [\App\Http\Controllers\SubscriptionController::class, 'store'])->name('user.portfolio.store');
    Route::get('/user/portfolio/show', [\App\Http\Controllers\SubscriptionController::class, 'show'])->name('user.portfolio.show');

    // Profile Routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Admin Routes
    Route::middleware('role:admin,superadmin')->prefix('admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
        Route::resource('deposits', \App\Http\Controllers\DepositController::class);
        Route::resource('slider', \App\Http\Controllers\Admin\SliderController::class);
        Route::resource('about', \App\Http\Controllers\Admin\AboutUsController::class);
        Route::resource('investment', \App\Http\Controllers\Admin\InvestmentController::class);
        Route::resource('team', \App\Http\Controllers\Admin\TeamController::class);
        Route::resource('faq', \App\Http\Controllers\Admin\FaqController::class);
        Route::resource('review', \App\Http\Controllers\Admin\ReviewController::class);
        Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);

        Route::get('/subscriptions', [\App\Http\Controllers\Admin\AdminSubscriptionController::class, 'index'])->name('admin.subscriptions');
        Route::get('/subscriptions/{subscription}/edit', [\App\Http\Controllers\Admin\AdminSubscriptionController::class, 'edit'])->name('admin.subscriptions.edit');
        Route::patch('/subscriptions/{subscription}', [\App\Http\Controllers\Admin\AdminSubscriptionController::class, 'update'])->name('admin.subscriptions.update');
        Route::delete('/subscriptions/{subscription}', [\App\Http\Controllers\Admin\AdminSubscriptionController::class, 'destroy'])->name('admin.subscriptions.destroy');
    });
});

// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__.'/auth.php';
