<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Items;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        $currency = Currency::orderBy($request->input('sort'), 'DESC')->get();

        dd($currency);
    }

    public function create()
    {
        return view('form-currency');
    }
    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required', 'min:2'],
            'price' => 'required'
        ]);
        $currency = Currency::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'price' => $request->input('price'),
            'is_active' => $request->input('is_active')
        ]);

        return redirect()->back();
    }
}

