<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(){

        //postsテーブルから全てのデータを取得し、変数$postsに代入
        $posts=DB::table('posts')->get();

        //変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index',compact('posts'));
    }
}
