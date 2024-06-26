<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
    'footers' => ["Characters","Comics","Movies","TV","Games","Videos","News"],
    'socials' => ["facebook", "periscope", "pinterest", "twitter", "youtube"]

    ];
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    // dd($comicsArray);

    $data = [
        'comics' => $comics,
        'icons' => [
            [
                'src' => "comics-digital-comics.png",
                'text' => "digital comics"
            ],
            [
                'src' => "comics-merchandise.png",
                'text' => "dc merchandise"
            ],
            [
                'src' => "comics-subscriptions.png",
                'text' => "subscription"
            ],
            [
                'src' => "comics-shop-locator.png",
                'text' => "comic shop locator"
            ],
            [
                'src' => "dc-power-visa.svg",
                'text' => "dc power visa"
            ]
            ],
        'footers' => ["Characters","Comics","Movies","TV","Games","Videos","News"],
        'socials' => ["facebook", "periscope", "pinterest", "twitter", "youtube"]
        
    ];
   
    return view('comics', $data);
})->name('comics');

