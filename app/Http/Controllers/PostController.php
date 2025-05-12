<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){

        //postsテーブルから全てのデータを取得し、変数$postsに代入
        $posts=DB::table('posts')->get();

        //変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index',compact('posts'));
    }

   public function show($id){
     $post = Post::find($id);

    if (!$post) {
        dd('Post not found');
    }

    return view('posts.show', compact('post'));
    }
}
