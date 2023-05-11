<?php

namespace App\Http\Controllers;

use App\Models\Lotauction;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\LotRequest;

class AuctionsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Lotauction::class, 'auctions');
    }

    public function index(): View
    {
        $lots = Lotauction::all();
        return view('auctions.index', ['lots' => $lots]);
    }

    public function create(): View
    {
        $rate_list = Rate::all();
        return view('auctions.create', ['rate_list' => $rate_list]);
    }

    public function store(LotRequest $request): View
    {
        /* [
            'name_lot' => $request->input('name_lot'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'starting_price' => $request->input('starting_price'),
            'rate_id' => $request->input('rate_id'),
        ] */
        $validatedLot = $request->validated();
        $lot = Lotauction::create(
            $request->all(['name_lot', 'start_date', 'end_date', 'starting_price', 'rate_id'])
        );
        return view('auctions.store', ['lot' => $lot]);
    }

    public function show(Lotauction $lotauction): View
    {
        return view('auctions.show', ['lot' => $lotauction]);
    }

    public  function  edit(Lotauction $lotauction): View
    {
        $rate_list = Rate::all();
        return view('auctions.edit', ['lot' => $lotauction, 'rate_list' => $rate_list]);
    }

    public function update(LotRequest $request, Lotauction $lotauction): View
    {
        $validatedLot = $request->validated();
        $lotauction->name_lot = $request->input('name_lot');
        $lotauction->start_date = $request->input('start_date');
        $lotauction->end_date = $request->input('end_date');
        $lotauction->starting_price = $request->input('starting_price');
        $lotauction->rate_id = $request->input('rate_id');
        $lotauction->save();
        return view('auctions.update', ['lot' => $lotauction]);
    }

    public function destroy(Lotauction $lotauction): View
    {
        $lotauction->delete();
        return view('auctions.destroy', ['lot' => $lotauction]);
    }
}
