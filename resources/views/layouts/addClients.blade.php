@extends('layouts.master')

@section('content')
    <div class="w-11/12">
        <form action="{{ route('addClientsRoute') }}" method="post" class="p-5" enctype="multipart/form-data">
            @csrf
            <label for="name" class="block mb-2"> Name </label>
            <input type="text" name="name" id="name"
                class="mb-5 border @error('name') border-red-500 @else border-gray-300 @enderror w-full p-2"
                value="{{ old('name') }}">

            @error('name')
                <span class="text-red-500 text-sm mb-5 block">
                    {{ $message }}
                </span>
            @enderror

            <label for="image" class="block mb-2"> Photo </label>
            <input type="file" name="image" id="image" class="formInput">
            @error('image')
                <span class="text-red-500 text-sm mb-5 block">
                    {{ $message }}
                </span>
            @enderror

            <label for="phone" class="block mb-2"> Phone </label>
            <input type="text" name="phone" id="phone"
                class="mb-5 border @error('phone') border-red-500 @else border-gray-300 @enderror w-full p-2"
                value="{{ old('phone') }}">
            @error('phone')
                <span class="text-red-500 text-sm mb-5 block">
                    {{ $message }}
                </span>
            @enderror

            <label for="email" class="block mb-2"> Email </label>
            <input type="email" name="email" id="email"
                class="mb-5 border @error('email') border-red-500 @else border-gray-300 @enderror w-full p-2"
                value="{{ old('email') }}">

            @error('email')
                <span class="text-red-500 text-sm mb-5 block">
                    {{ $message }}
                </span>
            @enderror



            <label for="address" class="block mb-2"> Address </label>
            <input type="text" name="address" id="address"
                class="mb-5 border @error('address') border-red-500 @else border-gray-300 @enderror w-full p-2"
                value="{{ old('address') }}">

            @error('address')
                <span class="text-red-500 text-sm mb-5 block">
                    {{ $message }}
                </span>
            @enderror



            <input type="submit" value="Submit"
                class="rounded-none bg-gray-500 px-3 py-2 block-inline text-white cursor-pointer bg-green-500 hover:bg-green-800 duration-500">

            <input type="reset" value="Cancel"
                class="rounded-none bg-gray-500 px-3 py-2 block-inline text-white cursor-pointer bg-red-500 hover:bg-red-800 duration-500">

        </form>
    </div>
@endsection
