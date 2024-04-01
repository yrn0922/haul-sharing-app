<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Post;

class ImageController extends Controller
{  
    public function viewupload()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        // ディレクトリ名
        $dir = 'sample';
       
        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        
        
        $filepath = $dir . '/' . $file_name;
        $request->file('image')->storeAs('public/' . $dir, $file_name);
       
        $post = Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
        $image = $post->images()->create([
            'filepath' => $filepath
        ]);
              
      return view('image')->with(['image' => $image, 'title' => $request->input('title'),'body' => $request->input('body')]);
      //return view('index')->with(['post' => $post->get(), 'image' => $image]);
        //return redirect('/');
    }
    
}