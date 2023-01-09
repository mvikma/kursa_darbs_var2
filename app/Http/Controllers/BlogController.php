<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    function blog()
    {
        $data= Blog::all();

       return view('pages.blog',['blog'=>$data]);
    }
    public function store(Request $request)
    {
        // Validācija vai lauki ir aizpildīti
        $request->validate([
            'nosaukums' => 'required|max:255',
            'galerija' => 'required',
            'apraksts' => 'required',
        ]);

        // Saglabāšana
        $blog = new Blog;
        $blog->nosaukums = $request->nosaukums;
        $blog->galerija = $request->galerija;
        $blog->apraksts = $request->apraksts;
        $blog->autora_id = Auth::user()->id;
        $blog->save();

        return redirect('blog');
                        // ->with('success', 'Blogs veiksmīgi izveidots.');
    }
    function delete($Bloga_ID)
    {
        $data= Blog::find($Bloga_ID);
        $data->delete();
        return redirect('blog');
    }
    function edit($Blog_ID)
    {
        $data= Blog::find($Blog_ID);
        return view('pages.blog_edit',['data'=>$data]);
    }
    function update(Request $request,$Bloga_ID)
    {
        $data=Blog::find($Bloga_ID);
        $data->nosaukums = $request->nosaukums;
        $data->galerija = $request->galerija;
        $data->apraksts = $request->apraksts;
        $data->autora_id = Auth::user()->id;
        $data->save();
        return redirect('blog');
    }
}
