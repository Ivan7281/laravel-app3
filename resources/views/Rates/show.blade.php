@extends('layouts.lots')
@section('content')
    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl flex-grow"
        > Show rate </h1>
    </div>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8 col-auto">
        <table>
            <tr class="bg-slate-50 border-b border-slate-200">
                <th>id</th>
                <th>Customer name</th>
                <th>Rate price</th>
            </tr>
            <tr class="bg-slate-50 border-b border-slate-200 ">
                <td>{{ $rate->id }}</td>
                <td>{{ $rate->name_customer }}</td>
                <td>{{ $rate->rate_price }}</td>
            </tr>
        </table>
    </div>
@endsection('content')
