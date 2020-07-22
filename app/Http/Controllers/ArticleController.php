<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use PDO;

class ArticleController extends Controller
{
    /*
        * index 
        * get index of article page
        * input : -
        * output : completed column set to true (1)
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function index(){
        $articles = Article::all();
        return view('articles.index',[
            'articles' => $articles
        ]);
    }

    /*
        * show($id) 
        * get article by id to show on page
        * input : id
        * output : article from database by id
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function show($id){
        
        $article = Article::find($id);
        return view('articles.show',[
            'article' => $article
            ]);
    }

    /*
        * create() 
        * create article
        * input : -
        * output : create article to db
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function create(){

    }

    /*
        * store() 
        * -
        * input : -
        * output : -
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function store(){

    }

    /*
        * edit()
        * -
        * input : -
        * output : -
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function edit(){

    }

    /*
        * update()
        * -
        * input : -
        * output : -
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function update(){

    }

    /*
        * destroy() 
        * get -
        * input : -
        * output : -
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function destroy(){

    }
}
