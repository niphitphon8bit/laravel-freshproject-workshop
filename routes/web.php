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

/*
    * get('/',function ()) 
    * return welcome page
    * Create : 07/10/2020
    * Author : Niphitphon
    * Last Edit : 07/22/2020 Nipitphon
*/

Route::get('/', function () {
    // return $article = App\Article::latest()->get();
    
    return view('welcome',[
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

/*
    * get('/welcome',function ()) 
    * return welcome page
    * Create : 07/10/2020
    * Author : Niphitphon
    * Last Edit : 07/10/2020 Nipitphon
*/
Route::get('/welcome', function () {
    return view('welcome');
});

/*
    * get('/hello',function ()) 
    * return array foo -> bar
    * Create : 07/10/2020
    * Author : Niphitphon
    * Last Edit : 07/10/2020 Nipitphon
*/
Route::get('/hello', function () {
    return ['foo' => 'bar'];
});

/*
    * get('/test',function ()) 
    * return test view page 
    * Create : 07/10/2020
    * Author : Niphitphon
    * Last Edit : 07/10/2020 Nipitphon
*/
Route::get('test', function () {
    // $name = request('name');
    // return $name;
    return view('test', [
        'name' => request('name')
    ]);
});

/*
    * get('/post/{post}',function ($post)) 
    * return route wildcard {post} 
    * Create : 07/10/2020
    * Author : Niphitphon
    * Last Edit : 07/10/2020 Nipitphon
*/
Route::get('/post/{post}', function ($post) {

    $posts = [
        'niphitphon' => 'that is first name bro',
        'thanatkulkit' => 'that my last name dude'
    ];

    // check key in array by passing parameter pos 1 is index pos2 is array to check
    if(! array_key_exists($post,$posts)){
        abort(404,'sorry, that post was not found');
    } // end if

    return view('post',[
        'post' => $posts[$post]
        ]);
});

/*
    * get('/post2/{post}', 'PostController@show') 
    * return send data to controller PostController function show
    * Create : 07/10/2020
    * Author : Niphitphon
    * Last Edit : 07/10/2020 Nipitphon
*/
Route::get('post2/{post}', 'PostController@show');

/*
    * get('/contact',function ()) 
    * return contact page
    * Create : 07/21/2020
    * Author : Niphitphon
    * Last Edit : 07/21/2020 Nipitphon
*/
Route::get('/contact', function () {
    return view('contact');
});

/*
* get('/element',function ()) 
* return elements page
* Create : 07/21/2020
* Author : Niphitphon
* Last Edit : 07/21/2020 Nipitphon
*/
Route::get('/element', function () {
    return view('element');
});

/*
    * get('/article/','ArticleController@show') 
    * route to function index in Article Controller
    * Create : 07/22/2020
    * Author : Niphitphon
    * Last Edit : 07/22/2020 Nipitphon
*/
Route::get('/articles','ArticleController@index');

/*
    * post('/article/','ArticleController@store') 
    * route to function store in Article Controller
    * Create : 07/22/2020
    * Author : Niphitphon
    * Last Edit : 07/22/2020 Nipitphon
*/
Route::post('/articles','ArticleController@store');


/*
* get('/articles/create','ArticleController@create') 
    * route to function create in Article Controller for create new article
    * Create : 07/22/2020
    * Author : Niphitphon
    * Last Edit : 07/22/2020 Nipitphon
*/
Route::get('/articles/create','ArticleController@create');


/*
    * get('/article/{artivle}','ArticleController@show') 
    * route to function show in Article Controller
    * Create : 07/22/2020
    * Author : Niphitphon
    * Last Edit : 07/22/2020 Nipitphon
*/
Route::get('/articles/{article}','ArticleController@show');

/*
    * get('/article/{artivle}/edit','ArticleController@edit') 
    * route to function edit in Article Controller
    * Create : 07/23/2020
    * Author : Niphitphon
    * Last Edit : 07/23/2020 Nipitphon
*/
Route::get('/articles/{article}/edit','ArticleController@edit');

/*
    * put('/article/{artivle}','ArticleController@update') 
    * route to function update in Article Controller
    * Create : 07/23/2020
    * Author : Niphitphon
    * Last Edit : 07/23/2020 Nipitphon
*/
Route::put('/articles/{article}','ArticleController@update');