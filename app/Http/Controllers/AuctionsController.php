<?php

namespace App\Http\Controllers;

use App\Models\Lotauction;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuctionsController extends Controller
{
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

    public function store(Request $request): View
    {
        /* [
            'name_lot' => $request->input('name_lot'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'starting_price' => $request->input('starting_price'),
            'rate_id' => $request->input('rate_id'),
        ] */
        $lot = Lotauction::create(
            $request->all(['name_lot', 'start_date', 'end_date', 'starting_price', 'rate_id'])
        );
        return view('auctions.store', ['lot' => $lot]);
    }

    public function show(string $id): View
    {
        $lot = Lotauction::find($id);
        if (!isset($lot))
        {
            return abort(404);
        }
        return view(
            'auctions.show',
            ['lot' => $lot]
        );
    }

    public  function  edit(string $id)
    {
        $lot = Lotauction::find($id);
        if (!isset($lot))
        {
            return abort(404);
        }
        return view(
            'auctions.edit',
            ['lot' => $lot]
        );
    }

    public function update(Request $request, string $id): View
    {
        $lot = Lotauction::find($id);
        if (!isset($lot))
        {
            return abort(404);
        }
        $lot->name_lot = $request->input('name_lot');
        $lot->start_date = $request->input('start_date');
        $lot->end_date = $request->input('end_date');
        $lot->starting_price = $request->input('starting_price');
        $lot->rate_id = $request->input('rate_id');
        $lot->save();
        return view(
            'auctions.update',
            ['lot' => $lot]
        );
    }

    public function destroy(string $id): View
    {
        $lot = Lotauction::find($id);
        if (!isset($lot))
        {
            return abort(404);
        }
        $lot->delete();
        return view(
            'auctions.destroy',
            ['lot' => $lot]
        );
    }
}
