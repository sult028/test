<?php

namespace App\Http\Controllers;




use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        return view('list');
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Cars::create([
            'name' => $request->input('name'),
            'model' => $request->input('model'),
            'price' => $request->input('price'),
            'is_active' => $request->input('is_active'),
        ]);

        return redirect()->back();
    }
    public function show(int $id)
    {
        $model = Cars::where('id', $id)->first();
        return view('show',[
            'cars' => $model
        ]);
    }
    public function update(int $id, Request $request)
    {
        if ($request->method() === 'POST') {
            $this->updateStore($id, $request);
        }
        $model = Cars::find($id);
        return view('update',[
            'car' => $model
        ]);
    }
    public function updateStore(int $id, Request $request){
        return Cars::where('id', '=', $id)
            ->update([
                'name' => $request->input('name'),
                'model' => $request->input('model'),
                'price' => $request->input('price'),
            ]);
    }

}
