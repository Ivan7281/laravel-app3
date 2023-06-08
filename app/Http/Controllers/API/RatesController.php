<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\LotRequest;
use App\Models\Rate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatesController extends Controller
{
    public function index()
    {
        return Rate::all();
    }

    public function store(LotRequest $request)
    {
        return Rate::create($request->all());
    }

    public function show($id)
    {
        return Rate::find($id);
    }

    public function update(Request $request, $id)
    {
        $rate = Rate::find($id);
        $rate->update($request->all());
        return $rate;
    }

    public function destroy($id)
    {
        return Rate::destroy($id);
    }
}
