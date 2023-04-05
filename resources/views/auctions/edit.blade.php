@extends('layout.app')
@section('content')
    <div>
        <h1>Edit lot</h1>
    </div>
    <div>
        <form action="{{URL::to('auctions') .'/' . $lot->id }}" method="POST">
            @csrf

            <input type="hidden" name="_method" value="PATCH">
            <label for="name_lot">Lot Name</label>
            <input required name="name_lot" value="{{ $lot->name_lot }}"/>
            <br/>

            <label for="start_date">Start Date</label>
            <input required name="start_date" value="{{ $lot->start_date}}"/>
            <br/>

            <label for="end_date">End Date</label>
            <input required name="end_date" value="{{ $lot->end_date }}"/>
            <br/>

            <label for="starting_price">Starting Price</label>
            <input required name="starting_price" value="{{ $lot->starting_price }}"/>
            <br/>

            <label for="rate_id">Rates</label>
            <select required name="rate_id" >
                <option>please select rate</option>
                @foreach($rate_list as $rate_item)
                    <option value="{{ $rate_item->id }}">{{ $rate_item->name_customer }}</option>
                @endforeach
            </select>
            <br/>

            <button type="submit">Edit</button>

        </form>
    </div>
@endsection('content')
