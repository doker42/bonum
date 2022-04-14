<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getCategoryPosts($category)
    {

        $category = Category::find($category);
        $posts = Post::where('category_id', $category->id)
            ->paginate(5);

        return view('main.category', ['posts' => $posts, 'category' => $category]);






    }

    public function create()
    {
        $categories = Category::all();

        return view('main.posts.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

//        $validated = $request->validate([
//            'title' => 'required',
//            'body' => 'required| unique:posts|max:25',]);

        $user = auth()->user();
        $data = $request->except("_token");
        $post = new Post();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->user_id = $user->id;
        $post->category_id = $data['category_id'];
        $post->save();

        return redirect(route('main'))->with('status', 'Post has been created');
    }

    public function editForm(Request $request)
    {
        $categories = Category::all();
        $post_id = $request->id;
        $post = Post::find($post_id);

        return view('main.posts.edit', ['post' => $post, 'categories' => $categories]);

    }

    public function update(Request $request)
    {
        $post_id = $request->id;
        $post = Post::find($post_id);
        $post->title = $request->title;
        $post->content = $request['content'];
//        $post->user_id = $request->user_id;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect(route('main'))->with('status', 'Post has been updated');
    }

    public function destroy(Request $request)
    {
        $post_id = $request->id;
        $post = Post::find($post_id);
        if ($post){
            $post->delete();
        }
        return redirect(route('main'))->with('status', 'Post has been deleted');
    }








}
