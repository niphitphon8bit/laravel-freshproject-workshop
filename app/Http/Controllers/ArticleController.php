<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use PDO;

class ArticleController extends Controller
{
    /*
        * index 
        * render a list of a article
        * input : -
        * output : list of article to article.view file
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
        * show a single article
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
        * show a view to create a new article
        * input : -
        * output : create new article page
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function create(){

    }

    /*
        * store() 
        * persist the new article
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
        * show a view to edit an existing article
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
        * presist the edited article 
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
        * delete the article
        * input : -
        * output : -
        * Create : 07/22/2020
        * Author : Niphitphon
        * Last Edit : 07/22/2020 Nipitphon
    */
    public function destroy(){

    }
}
