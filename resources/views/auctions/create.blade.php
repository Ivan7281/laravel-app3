@extends('layout.app')
@section('content')

<form action="{{ route('auctions.store') }}" method="post">

    @csrf

    <label for="name_lot">Lot Name</label>
    <input required name="name_lot" />
    <br/>

    <label for="start_date">Start Date</label>
    <input required name="start_date" />
    <br/>

    <label for="end_date">End Date</label>
    <input required name="end_date" />
    <br/>

    <label for="starting_price">Starting Price</label>
    <input required name="starting_price" />
    <br/>

    <label for="rate_id">Rates</label>
    <select required name="rate_id">
        <option>please select rate</option>
        @foreach($rate_list as $rate_item)
            <option value="{{ $rate_item->id }}">{{ $rate_item->name_customer }}</option>
        @endforeach
    </select>
    <br/>

    <button type="submit">Create</button>
</form>
@endsection('content')
