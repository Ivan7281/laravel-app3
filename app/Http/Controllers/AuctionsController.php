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
}
