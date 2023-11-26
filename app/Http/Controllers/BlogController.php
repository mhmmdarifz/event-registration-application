<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    function index()
    {
        $data['title'] = 'Blog';
        $data['blogs'] = Blog::paginate(6);

        return view('blogs', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Blog';
        $data['blog'] = Blog::findOrFail(Crypt::decrypt($request->id));
        $data['recent_blogs'] = Blog::limit(5)->orderBy('updated_at', 'desc')->get();

        return view('blog-detail', $data);
    }

    function comment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ], [
            'name.required' => 'mohon isi kolom nama',
            'comment.required' => 'mohon isi kolom komentar',
        ]);

        $data = new BlogComment;
        $data->blog_id = Crypt::decrypt($request->blog_id);
        $data->name = $request->name;
        $data->comment = $request->comment;
        $data->save();

        return response()->json([
            'status' => 200,
            'message' => 'Komentar berhasil ditambahkan'
        ]);
    }
}
