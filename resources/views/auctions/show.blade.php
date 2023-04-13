@extends('layout.app')
@section('content')
    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl flex-grow"
        > Show lot </h1>
    </div>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8 col-auto" >
        <table>
            <tr class="bg-slate-50 border-b border-slate-200">
                <th>id</th>
                <th>Lot Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Starting Price</th>
                <th>Rates</th>
            </tr>
                <tr class="bg-slate-50 border-b border-slate-200 ">
                    <td>{{ $lot->id }}</td>
                    <td>{{ $lot->name_lot }}</td>
                    <td>{{ $lot->start_date }}</td>
                    <td>{{ $lot->end_date }}</td>
                    <td>{{ $lot->starting_price }}</td>
                    <td>{{ $lot->rate_id }}</td>
                </tr>
        </table>
    </div>
@endsection('content')
