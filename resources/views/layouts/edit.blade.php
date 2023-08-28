@extends('layouts.master')

@section('content')
    <div class="w-11/12">
        <form action="{{ route('updateRouter', $client->id) }}" method="post" class="p-5">
            @csrf
            <label for="name" class="block mb-2"> Name </label>
            <input type="text" name="name" id="name" class="formInput" value="{{ $client->name }}">

            <label for="name" class="block mb-2"> Photo </label>
            <input type="file" name="JahirSir" id="image" class="formInput">

            <label for="phone" class="block mb-2"> Phone </label>
            <input type="text" name="phone" id="phone" class="formInput" value="{{ $client->phone }}">

            <label for="phone" class="block mb-2"> Email </label>
            <input type="email" name="email" id="email" class="formInput" value="{{ $client->email }}">

            <label for="address" class="block mb-2"> Address </label>
            <input type="text" name="address" id="address" class="formInput" value="{{ $client->address }}">


            <input type="submit" value="Update"
                class="rounded-none bg-gray-500 px-3 py-2 block-inline text-white cursor-pointer bg-green-500 hover:bg-green-800 duration-500">

        </form>
    </div>
@endsection
