<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
class NewsControllers extends Controller

{
   public function index(Request $request)
   {
       //$news = News::where('is active', '=', true)
       //->whereDate('created_at', $request->input('date'))
       //->orderBy($request->input('sort'), 'DESC')
       //->get();
       //return view('news', [
         //  'news' => $news
       //]);
   }

    public function create(Request $request)
    {
        $news = News::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'is active' => $request->input('is active',)
        ]);
    }

}
