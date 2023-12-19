<?php

use App\Http\Controllers\Admin\Dashboardcontroller;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Usercontroller;

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




Auth::routes();
Route::get('/',[LogController::class,'index'])->name('welcome');
//Route::get('/home',[LogController::class,'index'])->name('welcome');
Route::get('/post/show/{postID}',[Postcontroller::class,'show'])->name('posts.show');


//user routes
// Route::group(['middleware'=>'auth'],function(){
//     Route::get('/newpost', [UserController::class, 'index'])->name('newpost');
//     Route::post('/post/save',[Postcontroller::class,'store'])->name('posts.save');
//     Route::get('/post/showall',[Postcontroller::class,'showall'])->name('posts.showall');
//     Route::get('/post/edit/{postID}',[Postcontroller::class,'edit'])->name('posts.edit');
//     Route::post('/post/update',[Postcontroller::class,'update'])->name('posts.update');
//     Route::get('/post/delete/{postID}',[Postcontroller::class,'delete'])->name('posts.delete');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/newpost', [UserController::class, 'index'])->name('newpost');
    Route::post('/post/save',[Postcontroller::class,'store'])->name('posts.save');
    Route::get('/post/myposts',[Postcontroller::class,'myposts'])->name('posts.myposts');
    Route::get('/post/edit/{postID}',[Postcontroller::class,'edit'])->name('posts.edit');
    Route::post('/post/update',[Postcontroller::class,'update'])->name('posts.update');
    Route::get('/post/delete/{postID}',[Postcontroller::class,'delete'])->name('posts.delete');
    Route::post('/post/editimage/{postID}',[Postcontroller::class,'updateimage'])->name('posts.editimage');
});



//admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Admin routes here
    Route::get('/',[Dashboardcontroller::class,'index'])->middleware('admin')->name('admin.dashboard');
    Route::get('/allpost',[Dashboardcontroller::class,'allpost'])->middleware('admin')->name('admin.allpost');
});