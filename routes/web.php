<?php

use Illuminate\Support\Facades\Route;
use App\Models\Template;
use App\Http\Controllers\PageController;
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

Route::get('/dashboard', function () {
    $data = Template::all();
    return view('dashboard',['template'=>$data]);
})->middleware(['auth'])->name('dashboard');

Route::get('/detail_template/{id}', [PageController::class, 'detail_template'])->name('detail_template');
Route::get('/edit_sub_template/{id}', [PageController::class, 'edit_sub_template'])->name('edit_sub_template');


require __DIR__.'/auth.php';
