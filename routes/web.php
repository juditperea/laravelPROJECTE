<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SerieCommentController;
use App\Http\Controllers\PeliculaCommentController;
use App\Http\Controllers\PaginasController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//GOOGLE

Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();

    $user = User::updateOrCreate([
        'google_id' => $user_google->id,
    ],[
        'name' => $user_google->name,
        'email' => $user_google->email,
    ]);
    Auth::login($user);
    
    return redirect('/');

});

//GET

Route::get('/peliculas', [MovieController::class, 'index']);
Route::get('/series', [SerieController::class, 'index']);
Route::get('/listas', [ListaController::class, 'index'])->name('listas.index');
Route::get('/series/create', [SerieController::class, 'create'])->name('series.create');
Route::get('/peliculas/create', [MovieController::class, 'create'])->name('peliculas.create');
Route::get('/paginasanime', [PaginasController::class, 'show'])->name('paginasanime');

Route::post('/series/agregar-lista', [SerieController::class, 'agregarLista'])->name('series.agregarLista');

Route::get('/series/{id}', [SerieController::class, 'show'])->name('series.show');
Route::get('/peliculas/{id}', [MovieController::class, 'show'])->name('peliculas.show');

//DELETE

Route::delete('/peliculas/{id}', [MovieController::class, 'delete'])->name('peliculas.delete');
Route::delete('/series/{id}', [SerieController::class, 'delete'])->name('series.delete');

//CREATE
Route::post('/peliculas', [MovieController::class, 'store'])->name('peliculas.store');
Route::post('/series/{id}', [SerieController::class, 'store'])->name('series.store');

//UPDATE
Route::get('/peliculasUpdate/{id}', [MovieController::class, 'updateForm'])->name('peliculas.edit');
Route::put('/peliculas/{id}', [MovieController::class, 'update'])->name('peliculas.update');
Route::get('/seriesUpdate/{id}', [SerieController::class, 'updateForm'])->name('series.edit');
Route::put('/series/{id}', [SerieController::class, 'update'])->name('series.update');



//Formulario de registro
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']); 


//Comentarios

Route::post('/series/{id}/comment', [SerieCommentController::class, 'store'])->name('series.comment.store');
Route::post('/peliculas/{id}/comment', [PeliculaCommentController::class, 'store'])->name('peliculas.comment.store');
Route::delete('/series/{id}/comment', [SerieCommentController::class, 'delete'])->name('series.comment.delete');
Route::delete('/peliculas/{id}/comment', [PeliculaCommentController::class, 'delete'])->name('peliculas.comment.delete');
Route::delete('/series/{id}/comment', [SerieCommentController::class, 'delete'])->name('series.comment.delete');
Route::put('/series/comments/{id}', [SerieCommentController::class, 'update'])->name('series.comment.edit');
Route::put('/peliculas/comments/{id}', [PeliculaCommentController::class, 'update'])->name('peliculas.comment.edit');

//Mis listas
Route::get('/mis-listas', [InicioController::class, 'misListas'])->name('mis.listas');


Route::post('/peliculas/agregar-lista', [MovieController::class, 'agregarLista'])->name('peliculas.agregarLista');
Route::get('/listas', [MovieController::class, 'mostrarListas'])->name('listas.mostrar');
Route::get('/listasSerie', [SerieController::class, 'mostrarListas'])->name('listas.series.mostrar');

require __DIR__.'/auth.php';
