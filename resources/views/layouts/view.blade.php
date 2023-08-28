@extends('layouts.master')

@section('content')
    <div class="w-full">

        <h1> Name : {{ $faroque->name }}</h1>
        <h1> Email : {{ $faroque->email }} </h1>
        <h1> Phone : {{ $faroque->phone }} </h1>
        <h1> address : {{ $faroque->address }} </h1>

    </div>
@endsection
