<?php

namespace App\Http\Controllers;
use App\Post;


class PostController extends Controller
{
    public function show($slug){
        
        // $post = \DB::table('posts')->where('pt_slug' , $pt_slug)->first();
       
        // $post = Post::where('slug',$slug)->firstOrFail();
        
        //  * dumb and die data
        // dd($post);

        // * old post key pass
        // $posts = [
        //     'niphitphon' => 'that is first name bro',
        //     'thanatkulkit' => 'that my last name dude'
        // ];
    
        // * check key in array by passing parameter pos 1 is index pos2 is array to check
        // if(! array_key_exists($post,$posts)){
        //       abort(404,'sorry, that post was not found');
        // } // end if
    
        return view('post',[
            'post' => Post::where('slug',$slug)->firstOrFail()
            ]);
    }
}

?>