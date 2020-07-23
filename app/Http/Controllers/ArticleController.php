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
        * Author : Niphitphon Thanatkulkit
        * Last Edit : 07/23/2020 Nipitphon
    */
    public function index(){
        $articles = Article::latest()->get();
        return view('articles.index',['articles' => $articles]);
    }

    /*
        * show() 
        * show a single article
        * input : article object
        * output : article from database by id
        * Create : 07/22/2020
        * Author : Niphitphon Thanatkulkit
        * Last Edit : 07/23/2020 Nipitphon
    */
    public function show(Article $article){
        
        return view('articles.show',['article' => $article]);
    }

    /*
        * create() 
        * show a view to create a new article
        * input : -
        * output : create new article page
        * Create : 07/22/2020
        * Author : Niphitphon Thanatkulkit
        * Last Edit : 07/23/2020 Nipitphon
    */
    public function create(){
        return view('articles.create');
    }

    /*
        * store() 
        * persist the new article
        * input : title body excerpt from create page
        * output : insert into database
        * Create : 07/22/2020
        * Author : Niphitphon Thanatkulkit
        * Last Edit : 07/23/2020 Nipitphon
    */
    public function store(){
        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        $article->excerpt = request('excerpt');
        $article->save();
        return redirect('/articles');
    }

    /*
        * edit()
        * show a view to edit an existing article
        * input : Article object 
        * output : get edit page
        * Create : 07/22/2020
        * Author : Niphitphon Thanatkulkit
        * Last Edit : 07/23/2020 Nipitphon
    */
    public function edit(Article $article){
        return view('articles.edit',compact('article'));
    }

    /*
        * update()
        * presist the edited article 
        * input : Article object
        * output : update article to database
        * Create : 07/22/2020
        * Author : Niphitphon Thanatkulkit
        * Last Edit : 07/23/2020 Nipitphon
    */
    public function update(Article $article){
        $article->title = request('title');
        $article->body = request('body');
        $article->excerpt = request('excerpt');
        $article->save();
        return redirect('/articles');
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
