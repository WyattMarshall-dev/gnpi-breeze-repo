<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\PostController;;

Route::get('/about', function () {
    return view('about');
});


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{post:id}', [PostController::class, 'show'])->name('show');
Route::post('create/post', [PostController::class, 'store']);
Route::get('/dashboard/create', [PostController::class, 'create'])->middleware(['auth'])->name('dashboard/create');
Route::get('/dashboard/{post:id}/edit', [PostController::class, 'edit'])->middleware(['auth']);
Route::get('/dashboard/{post:id}/delete', [PostController::class, 'destroy'])->middleware(['auth']);
Route::patch('/dashboard/{post:id}/update', [PostController::class, 'update'])->middleware(['auth']);

Route::get('/dashboard', function () {
    // return view('dashboard');
    // return view('dashboard', [
    //     'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
    // ]);

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard', [
            'posts' => $user->posts,
        ]);

})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
