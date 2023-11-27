<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)

    {

        $cars = Items::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'year' => $request->input('year'),
            'colour' => $request->input('colour'),
            'speed' => $request->input('speed'),
        ]);

    }

    public function create (Request $request)
    {
        $model = new Items();
        $model->name = $request->input('name');
        $model->price = $request->input('price');
        $model->year = $request->input('price');
        $model->colour = $request->input('colour');
        $model->speed = $request->input('speed');
        $model->save();
    }
}
