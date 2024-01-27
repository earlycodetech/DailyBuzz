<?php

use App\Http\Controllers\CatagoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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


Route::get('/', [PagesController::class, 'index'])->name('homepages');


Route::get('about', function(){
    return view('about');
})->name('about.page');

Route::get('products', [PagesController::class, "get_products"]);
Route::get('products/{name}', [PagesController::class, 'show_product']);

Route::get('products/{name}/{model}', [PagesController::class, 'show_product'])->where([
    'name' => "samsung|iphone",
    'model' => "[a-zA-Z0-9]+"
]);


Route::get('library/{book}/{chapter}', [PagesController::class, 'library'])->where([
    'book' => "[a-zA-Z]+",
    'chapter' => "[0-9]+"
]);
Route::get('view', [PagesController::class, 'view'])->where([
    
]);

/*
    1. get
    2. post
    3. put
    4. patch
    5. delete
*/ 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('contact', [PagesController::class, 'contact'])->name('contact.page');

Route::resource('categories', CatagoriesController::class);
