@extends('layouts.master')

@section('content')
    <div class="w-11/12">
        <table class="table-auto w-full">
            <thead class="bg-gray-300 border-b">
                <tr class="flex justify-start border-b py-2">
                    <th class="w-1/12 text-left p-2"> Sl </th>
                    <th class="w-1/12 text-left p-2"> Image </th>
                    <th class="w-2/12 text-left p-2"> Name </th>
                    <th class="w-2/12 text-left p-2"> Phone </th>
                    <th class="w-4/12 text-left p-2"> Email </th>
                    <th class="w-4/12 text-left p-2"> Address </th>
                    <th class="w-2/12 text-left p-2"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kamals as $client)
                    <!-- per user -->
                    <tr class="flex justify-center items-center border-b pb-2 last:border-b-0">
                        <td class="p-2 w-1/12 text-left">{{ $client->id }} </td>
                        <td class="p-2 w-1/12"> 
                            <img src="images/{{$client->image}}" alt="{{ $client->name }}" onerror="this.onerror=null;this.src='images/default.png'" class="h-auto w-8 rounded-sm" />
                        </td>
                        <td class="p-2 w-2/12"> {{ $client->name }} </td>
                        <td class="p-2 w-2/12"> {{ $client->phone }} </td>
                        <td class="p-2 w-4/12"> {{ $client->email }} </td>
                        <td class="p-2 w-4/12"> {{ $client->address }} </td>

                        <td class="p-2 w-2/12">
                            <div class="flex items-center">
                                <a href="{{ route('edit', $client->id) }}"
                                    class="bg-emerald-500 text-2xs px-3 py-1 text-white mr-2 cursor-pointer hover:bg-green-800 duration-500">
                                    Edit </a>

                                <form action="{{ route('deleteRouter', $client->id) }}" method="post">
                                    @csrf
                                    <button type="submit" onclick= "return confirm( 'Are you sure to delte it?')"                                        class="bg-red-500 text-2xs px-3 py-1 text-white mr-2 cursor-pointer hover:bg-red-800 duration-500">
                                        Delete </button>
                                </form>

                                <a href="{{ route('showRouter', $client->id) }}"
                                    class="bg-blue-500 text-2xs px-3 py-1 text-white mr-2 cursor-pointer hover:bg-blue-800 duration-500">
                                    View </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class="flex">
                {{-- {{ $kamals->links() }} --}}
            </div>
        </table>
    </div>
@endsection
