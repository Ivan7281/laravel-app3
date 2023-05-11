@extends('layouts.lots')
@section('content')

    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="flex h-10 items-center justify-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl flex-auto">
            Create new lot</h1>
    </div>
    <form action="{{ route('rates.store') }}" method="post"
          class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md my-10 px-1.5 w-full">

        @csrf

        <label for="name_customer" class="block text-sm font-medium text-slate-700">Customer name</label>
        <input required name="name_customer" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
        @error('name_customer')
        <div>{{ $message }}</div>
        @enderror
        <br/>

        <label for="rate_price" class="block text-sm font-medium text-slate-700">Rate price</label>
        <input required name="rate_price" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
        @error('rate_price')
        <div>{{ $message }}</div>
        @enderror
        <br/>

        <button type="submit"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-2 mb-2"
        >Create
        </button>
    </form>
@endsection('content')
