<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    public function index()
    {
        $rates = Rate::all();
        return $rates;
    }
}
