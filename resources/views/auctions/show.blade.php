@extends('layout.app')
@section('content')
    <div>
        <h1> Show lot </h1>
    </div>

    <div>
        <table>
            <tr>
                <th>id</th>
                <th>Lot Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Starting Price</th>
                <th>Rates</th>
            </tr>
                <tr>
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
