<?php
use App\Enum\UserRoles;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UploadController;
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

Route::get('/',function (){
    return view('welcome');
});
//static informarion about view pass krny sy
//Route::view('/about','about',['message'=>'this is message about view'])->name('about');
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact',[PagesController::class,'contact']);
Route::get('services',[PagesController::class,'services']);
Route::get('/gallery',[PagesController::class,'gallery']);
//simple controller
//Route::Controller(PagesController::class)->name('page.')->group(function () {
    /*Route::get('/about', [PagesController::class, 'contact'])->name('pages.contact');
    Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
    Route::get('/gallery', [PagesController::class, 'gallery'])->name('pages.gallery');
    Route::get('/services', [PagesController::class, 'services'])->name('pages.services');*/

//singleton controller
Route::match(['get','post'],'/upload',UploadController::class)->name('page.upload');

Route::get('/posts/filter',[PostController::class,'filter'])->name('posts.filter');
Route::resource('/posts',PostController::class);
Route::get('/posts',[PostController::class,'posts'])->name('posts.posts');



//names route
/*Route::get('/bye',function () {
    echo "<a href=" . ('country') . ">welcome to welcome link</a>";
    $countries = ['456565'=>'pakistan','456565' =>'india ', '456565'=>'china', '456565'=>'rouse'];
    echo "<ul>";
    foreach ($countries as $population=> $country){
    echo "<li><a href='"('about.country', ['country'=>$country, 'population'=>456565]) ."'>$country</li>";
    }
    echo "</ul>";
})->name(' bye');


Route::get('/welcome',function () {
    echo "<a href=" . ('bye') . ">welcome to bye link</a>";
})->name('welcome');*/

  /*  Route::get('/count', function () {
        return [24, 33, 55, 66, 565];
    });
    Route::get('/about', function () {
        return view('about');
    });
//dynamic route / Route with required patameter
    Route::get('/about/{country}', function ($country) {
        return "welcome to {$country}, our population is " .request('population');
    })->name('about.country');
    Route::get('/about/{fruits}', function ($fruits) {
        return "yummy{$fruits}";
    });
    Route::get('/about/{cloth}', function ($cloth) {
        return "this is new {$cloth}";
    });*/
//Route with optional parameter
    /*Route::get('/user/{name?}', function ($name="guest"){
        return "welcome {$name} to our website";
    });
    Route::get('/user/{name}/edit',function ($name="guest"){
        return "welcome{$name} to our new websites";
        });*/
    //Route with multiple query string / parameter
/*Route::get('/search', function (Request $request) {
    print_r($request->all());
});*/




/*//Route::get();  //this method is used to get the current url in brpwser
//Route::post(); //this method is used to submit a form or data to the browser
Route::put();  //this method is used to update the record in the database
Route::patch();// this method is used to update the record in the database
Route::delete();// this method is used to delete a record in the database
Route::match(); //this method is used to match the multiple method
Route::any();// this method is used to match any method
Route::options();
Route::redirect();// this method is used to redirect to another url
Route::resource();// this method is used to create the source route
Route::fallback();// this is a fallback method
*/
//Route attribute for collection of route can be , middleware,controller,name,prefix,domain


/*Route::prefix('/user')->group(function (){
    Route::get('/dashboard');
    Route::get('/profile');
    Route::get('/settings');
    Route::get('/login');
    Route::get('/logout');
    Route::get('/register');
});
Route::name('user.')->prefix('/user')->group(function (){
    Route::get('/dashboard')->name('dashboard');
    Route::get('/profile')->name('profile');
    Route::get('/settings')->name('settings');
    Route::get('/login')->name('login');
    Route::get('/logout')->name('logout');
    Route::get('/register')->name('register');
});
Route::name('admin.')->prefix('admin')->group(function (){
    Route::get('/dashboard')->name('dashboard');
    Route::get('/profile')->name('profile');
    Route::get('/settings')->name('settings');
    Route::get('/login')->name('login');
    Route::get('/logout')->name('logout');
    Route::get('/register')->name('register');
});

*/





//implicit route binding with enums
//Route::get('/users/{role}/role', function (UserRoles $role){
  //  return User::where('role',$role->value)->get();
//});
//forced scoping of route binding
//Route::scopeBindings()->group(function (){
//Route::get('/users/{user}/posts/{post}', function (User $user, posts $posts){
   // return $posts;
//});
//});
//Route::resource('posts',[PostController::class]);
//controlor route grouping
//in laravel 9 using controllor method
//Route::controller(PostController::class)->group(function(){
    //Route::get('/posts','index');
   // Route::post('/posts','store');
    //Route::put('/posts/{post}','update');
   // Route::get('/posts/{post}/edit','edit');
   // Route::delete('posts/{post}/delete','destroy');
//});



