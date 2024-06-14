<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\PouleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StandingsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/players', [PlayersController::class, 'index'])->name('players');
    Route::get('/players/create', [PlayersController::class, 'create'])->name('players.create');
    Route::post('/players/store', [PlayersController::class, 'store'])->name('players.store');
    Route::get('/players/{player}', [PlayersController::class, 'show'])->name('players.show');
    Route::get('/players/{player}/edit', [PlayersController::class, 'edit'])->name('players.edit');
    Route::put('/players/{player}', [PlayersController::class, 'update'])->name('players.update');
    Route::delete('/players/{player}', [PlayersController::class, 'destroy'])->name('players.destroy');


    Route::get('/poule', [PouleController::class, 'index'])->name('poule');
    Route::get('/poule/create', [PouleController::class, 'create'])->name('Poule.create');
    Route::post('/poule/store', [PouleController::class, 'store'])->name('poule.store');
    Route::get('/poule/{poule}', [PouleController::class, 'show'])->name('poule.show');
    Route::get('/poule/{poule}/edit', [PouleController::class, 'edit'])->name('poule.edit');
    Route::put('/poule/{poule}', [PouleController::class, 'update'])->name('poules.update');
    Route::delete('/poule/{poule}', [PouleController::class, 'destroy'])->name('poule.destroy');
    

    Route::get('/Teams', [TeamController::class, 'index'])->name('Teams');
    Route::get('/Teams/create', [TeamController::class, 'create'])->name('Teams.create');
    Route::post('/Teams/store', [TeamController::class, 'store'])->name('Teams.store');
    Route::get('/Teams/{team}', [TeamController::class, 'show'])->name('Teams.show');


    Route::get('/tag', [TagController::class, 'index'])->name('tag');
    Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store');
    Route::get('/tag/{tag}', [TagController::class, 'show'])->name('tag.show');
    Route::get('/tag/{tag}/edit', [TagController::class, 'edit'])->name('tag.edit');
    Route::put('/tag/{tag}', [TagController::class, 'update'])->name('tag.update');
    Route::delete('/tag/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');

    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{new}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
    

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

});

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/games', [GameController::class, 'index'])->name('games.index');


Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/edit/{game}', [GameController::class, 'update'])->name('games.update');

route::get('/standings/index', [StandingsController::class, 'index'])->name('standings.index');



require __DIR__ . '/auth.php';
