@extends('layout.app')
@section('content')
    <div class="flex">
        <h1 class=" mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl flex-grow">Auction</h1>
        <a href="{{URL::to('auctions') . '/create'}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-2 mb-2"
        > Create new lot </a>
    </div>
    <div>
        @forelse($lots as $lot)
            <article class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-1 p-1">
                <nav class="flex">
                    <h3 class="font-bold text-xl mb-2 flex-grow text-center">
                        <a  href="{{URL::to('auctions') . '/' . $lot->id}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                            Lot: {{$lot->name_lot}}
                        </a>
                    </h3>
                    <a href="{{URL::to('auctions') . '/' . $lot->id . '/edit'}}"
                       class="button text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Edit
                    </a>
                    <form action="{{URL::to('auctions') . '/' . $lot->id}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                        > Delete</button>
                    </form>
                </nav>
            </article>
        @empty
            <p>
                No lot
            </p>
        @endforelse
    </div>
@endsection('content')
