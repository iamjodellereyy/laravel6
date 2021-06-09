<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($post){
        $posts = [
                    'my-first-post' => 'Hey this is your first post!',
                    'my-second-post' => 'Hey this is your second post!'
                ];
            
                if(! array_key_exists($post,$posts)){
                    abort(404, "Sorry, that post was not found");
                }
            
                return view('post',[
                    'post' => $posts[$post]
                ]);
    }
}
