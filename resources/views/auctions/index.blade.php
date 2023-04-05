@extends('layout.app')
@section('content')
    <h1>Auction</h1>

    <a href="{{URL::to('auctions') . '/create'}}"> Create new lot </a>
    @forelse($lots as $lot)
        <article>
            <h3>
                <a href="{{URL::to('auctions') . '/' . $lot->id}}">
                    Lot: {{$lot->name_lot}}
                </a>
            </h3>
            <a href="{{URL::to('auctions') . '/' . $lot->id . '/edit'}}">
                Edit
            </a>
            <form action="{{URL::to('auctions') . '/' . $lot->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit"> Delete</button>
            </form>
        </article>
    @empty
        <p>
            No lot
        </p>
    @endforelse
@endsection('content')
