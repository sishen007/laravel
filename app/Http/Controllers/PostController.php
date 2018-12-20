<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
//        $app = app();
//        $log = $app->make('log');
//        $log->info("post_index",['data'=>'this is post index']);
        Log::info("post_index",['data'=>'this is post index']);
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('post/index', @compact('posts'));
    }

    public function create()
    {
        return view('post/create');
    }

    public function store()
    {
//        $post = new Post();
//        $post->title = request('title');
//        $post->content = request('content');
//        $post->save();
//        Post::create(['title'=>request('title'),'content'=>request('content')]);
        // 1,表单验证机制
        $this->validate(request(),[
           'title'=>'required|string|max:100|min:5',
            'content'=>'required|string|min:10',
        ],[
//            'title.min'=>'文章标题过短',
        ]);
        // 2,逻辑
        $post = Post::create(request(['title','content'])); // 需要对model中的$guarded和$fillable做声明 使用基类

        // 3,渲染
        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('post/show', compact('post'));
    }

    public function edit()
    {
        return view('post/edit');
    }

    public function update()
    {
        return;
    }

    public function delete(Post $post)
    {
        // 用户权限验证,作者才可以删除

        $post->delete();
        return redirect('/posts');
    }
    // 上传图片
    public function imageUpload(Request $request)
    {

        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/'.$path);
    }
}
