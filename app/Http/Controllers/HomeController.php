<?php

namespace App\Http\Controllers;

use http\Env\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo "главная страница";
    }

    public function create (Request $request)
    {
        $model = new News();
        $model->name = $request->imput('name');
        $model->price = $request->imput('price');
        $model->year = $request->imput('price');
        $model->colour = $request->imput('colour');
        $model->speed = $request->imput('speed');
        $model->save();
    }
}
