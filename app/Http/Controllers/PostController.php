<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($pt_slug){
        
        $post = \DB::table('posts')->where('pt_slug' , $pt_slug)->first();

        if(!$post){
            abort(404);
        }

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
            'post' => $post
            ]);
    }
}

?>