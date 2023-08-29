@extends('layouts.master')

@section('content')
    <div class="w-full p-5 flex">
        <div class="w-2/12 bg-gray-50 p-2 h-screen mr-4">
            <h2 class="font-bold border-b mb-3"> Profile </h2>
            <div class="w-full mb-5">

                <img src="{{asset('images/default.png')}}" alt="{{ $faroque->name }}"
                    onerror="this.onerror=null;this.src='images/default.png'" class="h-auto w-auto rounded-sm mb-4" />

                <h2 class="mb-4"> <span class="last:border-b-2 border-b block font-semibold"> Name </span>
                    {{ $faroque->name }} </h2>
                <h2 class="mb-4"> <span class="last:border-b-2 border-b block font-semibold"> Phone </span>
                    <a href="tel:{{ $faroque->phone }}" class="hover:underline"> {{ $faroque->phone }} </a> </h2>
                <h2 class="mb-4"> <span class="last:border-b-2 border-b block font-semibold"> Email </span>
                    <a href="mailto:{{ $faroque->email}}" class="hover:underline"> {{ $faroque->email }} </a> </h2>
                <h2 class="mb-4"> <span class="last:border-b-2 border-b block font-semibold"> Address </span>
                    {{ $faroque->address }}
                </h2>
                <h2 class="mb-4"> <span class="last:border-b-2 border-b block font-semibold"> Social Links </span>
                    <ul class="list-disc list-inside">
                        <li><a href="#" class="text-1xl capitalize hover:underline"> facebook </a></li>
                        <li><a href="#" class="text-1xl capitalize hover:underline"> WhatsApp </a></li>
                    </ul>
                </h2>

            </div>
            <div class="w-full">
                <h2 class="font-bold border-b mb-3"> Domain Names </h2>
                <ul class="list-disc list-inside">
                    <li><a href="#" class="hover:underline"> domain.com </a></li>
                    <li><a href="#" class="hover:underline"> domain.com </a></li>
                    <li><a href="#" class="hover:underline"> domain.com </a></li>
                    <li><a href="#" class="hover:underline"> domain.com </a></li>

                </ul>
            </div>
        </div>
        <div class="w-10/12">
            <div class="w-full mb-5">
                <div class="bg-gray-50">
                    <div class="grid grid-cols-4 gap-4">


                        <div
                            class="flex border border-red-100 justify-center px-3 py-10 rounded-lg shadow-md bg-gray-200 items-center">
                            <span class="text-3xl capitalize pr-4"> Domain </span>
                            <span class="text-2xl bg-gray-500 text-white py-1 px-3 rounded-lg font-bold"> 1 </span>
                        </div>
                        <div
                            class="flex border border-red-100 justify-center px-3 py-10 rounded-lg shadow-md bg-gray-200 items-center">
                            <span class="text-3xl capitalize pr-4"> Hosting </span>
                            <span class="text-2xl bg-gray-500 text-white py-1 px-3 rounded-lg font-bold"> 10GB </span>
                        </div>

                        <div
                            class="flex border border-red-100 justify-center px-3 py-10 rounded-lg shadow-md bg-gray-200 items-center">
                            <span class="text-3xl capitalize pr-4"> Support </span>
                            <span class="text-2xl bg-gray-500 text-white py-1 px-3 rounded-lg font-bold"> Yearly </span>
                        </div>
                        <div
                            class="flex border border-red-100 justify-center px-3 py-10 rounded-lg shadow-md bg-gray-200 items-center">
                            <span class="text-3xl capitalize pr-4"> News Post </span>
                            <span class="text-2xl bg-gray-500 text-white py-1 px-3 rounded-lg font-bold"> Yes </span>
                        </div>






                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="w-1/2">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-500 text-white py-2 block-inline">
                                <th> # </th>
                                <th class="capitalize"> Description </th>
                                <th class="capitalize"> Payment </th>
                                <th class="capitalize"> Quantity </th>
                                <th class="capitalize"> Rate </th>
                                <th class="capitalize"> Total </th>
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            <tr class="border-b block-inline mb-5 py-5">
                                <td> 1 </td>
                                <td class="text-center"> Domain </td>
                                <td class="text-center"> Yearly </td>
                                <td class="text-center"> 1 </td>
                                <td class="text-right"> 1450.00 </td>
                                <td class="text-right"> 1450.00 </td>
                            </tr>
                            <tr class="border-b block-inline mb-5 py-5">
                                <td> 1 </td>
                                <td class="text-center"> Domain </td>
                                <td class="text-center"> Yearly </td>
                                <td class="text-center"> 1 </td>
                                <td class="text-right"> 1450.00 </td>
                                <td class="text-right"> 1450.00 </td>
                            </tr><tr class="border-b block-inline mb-5 py-5">
                                <td> 1 </td>
                                <td class="text-center"> Domain </td>
                                <td class="text-center"> Yearly </td>
                                <td class="text-center"> 1 </td>
                                <td class="text-right"> 1450.00 </td>
                                <td class="text-right"> 1450.00 </td>
                            </tr>
                            <tr class="border-b block-inline mb-5 py-5">
                                <td> 1 </td>
                                <td class="text-center"> Domain </td>
                                <td class="text-center"> Yearly </td>
                                <td class="text-center"> 1 </td>
                                <td class="text-right"> 1450.00 </td>
                                <td class="text-right"> 1450.00 </td>
                            </tr>
                            
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td class="text-right"> bkash fee </td>
                                <td class="text-right"> 80.00 </td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td class="text-right"> Payable </td>
                                <td class="text-right"> 4480.00 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
