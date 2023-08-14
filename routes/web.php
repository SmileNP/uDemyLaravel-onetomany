<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;

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

Route::get('/create', function (){
    $user = User::findOrFail(1);
    $post = new Post(['title'=>'First post with Edwin', 'body'=>'Laravel LOVe']);
    $user->posts()->save($post);
});
