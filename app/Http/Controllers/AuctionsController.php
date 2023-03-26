<?php

namespace App\Http\Controllers;

use App\Models\Lotauction;
use App\Models\Rate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuctionsController extends Controller
{
    public function index()
    {
        $lots = Lotauction::all();
        return $lots;
    }

    public function create()
    {
        $rate_list = Rate::all();
        return view('auctions.create', ['rate_list' => $rate_list]);
    }

    public function store(Request $request): RedirectResponse
    {
        $lot = Lotauction::create([
            'name_lot' => $request->input('name_lot'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'starting_price' => $request->input('starting_price'),
            'rate_id' => $request->input('rate_id'),
        ]);
        return \redirect(route('auctions.index'));
    }

    public function show(string $id)
    {

    }

    public  function  edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
