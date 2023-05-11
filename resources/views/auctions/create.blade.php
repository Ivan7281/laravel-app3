@extends('layouts.lots')
@section('content')

    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="flex h-10 items-center justify-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl flex-auto">
            Create new lot</h1>
    </div>
    <form action="{{ route('auctions.store') }}" method="post"
          class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md my-10 px-1.5 w-full">

        @csrf

        <label for="name_lot" class="block text-sm font-medium text-slate-700">Lot Name</label>
        <input required name="name_lot" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
        @error('name_lot')
        <div>{{ $message }}</div>
        @enderror
        <br/>

        <label for="start_date" class="block text-sm font-medium text-slate-700">Start Date</label>
        <input required name="start_date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
        @error('start_date')
        <div>{{ $message }}</div>
        @enderror
        <br/>

        <label for="end_date" class="block text-sm font-medium text-slate-700">End Date</label>
        <input required name="end_date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
        @error('end_date')
        <div>{{ $message }}</div>
        @enderror
        <br/>

        <label for="starting_price" class="block text-sm font-medium text-slate-700">Starting Price</label>
        <input required name="starting_price" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
        @error('starting_price')
        <div>{{ $message }}</div>
        @enderror
        <br/>

        <label for="rate_id" class="block text-sm font-medium text-slate-700">Rates</label>
        <select required name="rate_id" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
            <option>please select rate</option>
            @foreach($rate_list as $rate_item)
                <option value="{{ $rate_item->id }}"
                >{{ $rate_item->name_customer }}</option>
            @endforeach
        </select>
        <br/>

        <button type="submit"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-2 mb-2"
        >Create
        </button>
    </form>
@endsection('content')
