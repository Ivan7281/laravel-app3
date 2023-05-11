<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Rate::class);
    }

    public function index()
    {
        $rates = Rate::all();
        return view('rates.index', ['rates' => $rates]);
    }

    public function create()
    {
        return view('rates.create');
    }

    public function store(Request $request)
    {
        $rate = Rate::create(
            $request->all(['name_customer', 'rate_price'])
        );
        return view('rates.store', ['rate' => $rate]);
    }

    public function show(Rate $rate)
    {
        return view('rates.show', ['rate' => $rate]);
    }

    public  function  edit(Rate $rate)
    {
        return view('rates.edit', ['rate' => $rate]);
    }

    public function update(Request $request, Rate $rate)
    {
        $rate->name_customer = $request->input('name_customer');
        $rate->rate_price = $request->input('rate_price');
        $rate->save();
        return view('rates.update', ['rate' => $rate]);
    }

    public function destroy(Rate $rate)
    {
        $rate->delete();
        return view('rates.destroy', ['rate' => $rate]);
    }
}
