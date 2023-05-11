@extends('layouts.lots')
@section('content')
    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
        <p class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl flex-grow">
            Lot {{$lot->name_lot}} was updated
        </p>
    </div>
@endsection('content')
