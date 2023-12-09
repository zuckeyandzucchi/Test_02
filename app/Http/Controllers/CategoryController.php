<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Requests\PostRequest; 

class CategoryController extends Controller
{
    // indexメソッド
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
    /*
    // showメソッド
    public function show(Post $post)
    {
    // $item = Post::find($post);
    // dd($post);
     return view('posts.show')->with(['post' => $post]);
    
    }
    // createメソッド public function create(){return view('posts.create');}
    public function create(Category $category)
    {
        return view('posts.create')->with(['categories' => $category->get()]);
        // $category->get()　には何が入ってるの？
    }
    
    // storeメソッド
    public function store(Post $post, PostRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['post'];
        // dd($_GET);
        // 上と同じこと
        $post->fill($input)->save();
        // 繋げて書いてるだけ。
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
    return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    */
}
?>