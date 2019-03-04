<?php
use App\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//
//    return view('welcome');
//
//});
/*
Route::get('/about', function () {

    return "This is the about page";

});

Route::get('/contact', function () {

    return "This is the contact page";

});

Route::get('/post/{id}/{name}', function ($id, $name) {

    return "This is the post number " . $id . $name;

});

Route::get('admin/posts/example', array('as' =>'admin.home', function () {

    $url = route('admin.home');

    return "this url is " . $url;

}));
*/



//Route::get('/post/{id}/{name}/{email}', 'PostsController@index');

//Route::resource('posts', 'PostsController');

//Route::get('/contact', 'PostsController@contact');
//
//Route::get('post/{id}/{name}/{age}', 'PostsController@show_post');
//Route::get('post', 'PostsController@post_page');

/*
Route::get('/post', function () {

    return "This is the about page";

});
*/


/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
|*/

/* INSERT */
Route::get('/insert', function (){

    DB::insert('insert into posts(title, content) values(?,?)', ['My second title', 'My third title']);

});


/* SELECT */
//Route::get('/read', function(){
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//    foreach($results as $post){
//        return $post->id . $post->content . $post->title;
//
//    }
//
//});


/* UPDATE */
//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title = "Update title 3" where id = ?', [1]);
//    return $updated;
//
//});


/* DELETE */
//Route::get('/delete', function(){
//
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//    return $deleted;
//
//});


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

//Route::get('/read', function(){
//
//$posts = Post::all();
//
//    foreach($posts as $post) {
//        return $post->title;
//    }
//
//});


//Route::get('/find', function(){
//
//    $post = Post::find(2);
//
//    return $post->title;
//
//});


Route::get('/findwhere', function(){

   $posts = Post::where('id', 3)->orderBy('id', 'asc')->take(1)->get();

    return $posts;

});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {



});