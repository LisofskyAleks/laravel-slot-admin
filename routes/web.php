<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\PageController;

// Главная
Route::get('/', [SlotController::class, 'index'])->name('home');

// CRUD слотов
Route::post('/slots', [SlotController::class, 'store'])->name('slots.store');
Route::delete('/slots/{slot}', [SlotController::class, 'destroy'])->name('slots.destroy');

Route::get('/promotions', function () {
    return view('page', ['title' => 'Promotions']);
})->name('promotions.index');

Route::get('/casino', function () {
    return view('page', ['title' => 'Casino']);
})->name('casino.index');

Route::get('/live-casino', function () {
    return view('page', ['title' => 'Live Casino']);
})->name('casino.live');

Route::get('/jackpots', function () {
    return view('page', ['title' => 'Jackpots']);
})->name('jackpots.index');

Route::get('/paris-sportifs', function () {
    return view('page', ['title' => 'Paris Sportifs']);
})->name('sports.index');

Route::get('/paris-live', function () {
    return view('page', ['title' => 'Paris Live']);
})->name('sports.live');

Route::get('/sports-virtuels', function () {
    return view('page', ['title' => 'Sports virtuels']);
})->name('sports.virtual');

Route::get('/defis', function () {
    return view('page', ['title' => 'Défis']);
})->name('challenges.index');

Route::get('/tournois', function () {
    return view('page', ['title' => 'Tournois']);
})->name('tournaments.index');

Route::get('/bonus-crab', function () {
    return view('page', ['title' => 'Bonus Crab']);
})->name('bonus.crab');

Route::get('/boutique', function () {
    return view('page', ['title' => 'Boutique']);
})->name('shop.index');

Route::get('/niveaux-vip', function () {
    return view('page', ['title' => 'Niveaux VIP']);
})->name('vip.levels');

Route::get('/aide', function () {
    return view('page', ['title' => "Centre d'aide"]);
})->name('help');

Route::get('/{slug}', [PageController::class, 'show'])
    ->where('slug', '[a-z0-9\\-]+')
    ->name('page.show');
