<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $posts = Post::paginate(5);

        $post_id = $request->id;
        $post = Post::find($post_id);


        return view( 'main.main', ['categories' => $categories, 'posts' => $posts, 'post' => $post]);
    }

    public function categories()
    {
        $categories = Category::all();

        return view('main.categories', ['categories' => $categories]);
    }


    public function admins(Request $request)
    {
        return view('admin.admins');
    }



    public function main(Request $request)
    {

        $category_id = $request->category_id;

        if($category_id){
            $posts = Category::find($category_id)->posts;
        } else {
            $posts = Post::all();
        }

        $categories = Category::all();

        return view('category', ['categories' => $categories, 'posts' => $posts]);


    }













}
