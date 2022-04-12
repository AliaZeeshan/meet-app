<?php
use App\Enum\UserRoles;
use Illuminate\Support\Facades\Route;
use App\Models\user;
use App\Models\Post;
use App\Http\Controllers\PostController;

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
//implicit route binding with enums
//Route::get('/users/{role}/role', function (UserRoles $role){
  //  return User::where('role',$role->value)->get();
//});
//forced scoping of route binding
Route::scopeBindings()->group(function (){
Route::get('/users/{user}/posts/{post}', function (User $user, posts $posts){
    return $posts;
});
});
//Route::resource('posts',[PostController::class]);
//controlor route grouping
//in laravel 9 using controllor method
Route::controller(PostController::class)->group(function(){
    Route::get('/posts','index');
    Route::post('/posts','store');
    Route::put('/posts/{post}','update');
    Route::get('/posts/{post}/edit','edit');
    Route::delete('posts/{post}/delete','destroy');
});


