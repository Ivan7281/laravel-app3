<?php

namespace App\Http\Controllers;

use App\Models\Lotauction;
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
        return view('auctions.create');
    }

    public function store(Request $request)
    {

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
