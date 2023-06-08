<?php

namespace App\Http\Controllers\API;

use App\Models\Lotauction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LotRequest;
use App\Http\Resources\LotauctionResource;

class AuctionsController extends Controller
{
    public function index()
    {
        return LotauctionResource::collection(Lotauction::all());
    }

    public function store(LotRequest $request)
    {
        return Lotauction::create($request->all());
    }

    public function show($id)
    {
        return Lotauction::find($id);
    }

    public function update(Request $request, $id)
    {
        $lot = Lotauction::find($id);
        $lot->update($request->all());
        return $lot;
    }

    public function destroy($id)
    {
        return Lotauction::destroy($id);
    }
}
