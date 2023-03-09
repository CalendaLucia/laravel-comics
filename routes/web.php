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
    $menu = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'VIDEOS',
        'NEWS',
        'SHOP',
    ];
    $other_list_1 = [
        'SHOP',
        'Shop DE',
        'Shop DC Collectibles',
    ];
    $other_list_2 = [
        'DC',
        'Terms Of Use',
        'Privacy policy (New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings', 
        'Shop Help',
        'Contact Us'
    ];
    $other_list_3 = [
        'SITES',
        'DC',
        'MAD Magazine',
        'DC Kids',
        'DC Universe',
        'DC Power Visa'
    ];
    $socialIcons = [
        'boolean/laravel-comics/resources/img/footer',
        'resources/img/footer-periscope.png',
        'resources/img/footer-pinterest.png',
        'resources/img/footer-twitter.png',
        'resources/img/footer-youtube.png',
    ];
    $all_lists = [
        $menu,
        $other_list_1,
        $other_list_2,
        $other_list_3
    
    ];
    return view('home', [
        'menu' => $menu,
        'all_lists' => $all_lists,
        'socialIcons' => $socialIcons,
        'comics'=> config('comics'),

       
    ]);
});

