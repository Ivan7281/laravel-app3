@extends('layout.app')
@section('content')

    <h1> Show lot </h1>

    <h3>{{$lot->name_lot}}</h3>

    <p>{{$lot->start_date}}</p>
    <p>{{$lot->end_date}}</p>
    <p>{{$lot->starting_price}}</p>
    <p>{{$lot->rate_id}}</p>

@endsection('content')
