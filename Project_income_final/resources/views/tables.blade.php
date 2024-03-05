@extends('layout')
@section('title')
@endsection
@section('content')
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Latest Reports
        </p>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">NameGame</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">TypeGame</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Income</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">

                    @foreach ($gameData as $item)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->game_name }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->game_type }}</td>
                            <td class="w-1/3 text-left py-3 px-4"><a class="hover:text-blue-500"
                                    href="#"></a>{{ $item->game_income }} usd$ million</td>
                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                    href="#">{{ $item->game_email }}</a></td>
                            <td class="text-left py-3 px-4"><a href="{{route('edit',$item->id)}}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a></td>
                            <td class="text-left py-3 px-4">
                                <a href="{{route('delete',$item->id)}}" class="text-red-600 hover:text-indigo-900">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
