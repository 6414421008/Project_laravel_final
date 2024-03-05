@extends('layout')
@section('title')
    
@endsection
@section('content')
    

<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <h1 class="w-full text-3xl text-black pb-6">Forms</h1>

        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                <p class="text-xl pb-6 flex items-center">
                    <i class="fas fa-list mr-3"></i> Contact Form
                </p>
                <div class="leading-loose">
                    {{-- start form  --}}
                    <form action="{{route('saveData')}}" method="POST" class="p-10 bg-white rounded shadow-xl">
                        @csrf
                        <div class="">
                            <label class="block text-sm text-gray-600" for="game_name">NameGame</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="game_name" name="game_name" type="text" placeholder="Name Game" >
                        </div>

                        <div>
                            <label for="game_type" class="block text-sm text-gray-600">TypeGame</label>
                            <select name="game_type" id="game_type"
                                class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">
                                <option value="FPS">FPS</option>
                                <option value="MMORPG">MMORPG</option>
                                <option value="survival">survival</option>
                            </select>
                        </div>


                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="game_income">Income</label>
                            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="game_income" name="game_income" type="text" placeholder="use (million)" >
                        </div>

                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="game_email">Email</label>
                            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="game_email" name="game_email" type="text" placeholder="Email Offilcial" >
                        </div>
 
                        <div class="mt-6">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection