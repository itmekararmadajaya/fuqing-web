@extends('layouts.app')

@section('title', 'Beranda - Fuqing Magelang')
    
@section('content')
    <x-header />
    <x-reusable.subtitle subtitle="Semua Informasi" />
    <div class="lg:mx-60 mx-5">
        <div class="mb-5">
            <form class="max-w-md mx-auto" method="GET" action="{{route('information')}}">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-500 focus:border-red-500" placeholder="Tuliskan judul atau kata kunci" required name="keywoard"/>
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>
        </div>
        <div class="lg:grid lg:grid-cols-3 lg:gap-3">
            @foreach($informations as $Key => $information)
            <div class="mb-3 lg:mb-0">
                <a href="{{ route('information-detail', $information->slug) }}" class="group block">
                    <div class="relative aspect-[16/9] bg-center bg-no-repeat rounded-2xl overflow-hidden shadow-lg transform transition duration-500 hover:scale-105" 
                         style="background-image: url('{{ asset('storage/' . $information->thumbnail) }}'); background-size: cover;">
                        <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-60 transition-all duration-500"></div>
                        <div class="absolute inset-0 flex items-end p-4">
                            <div class="text-white lg:text-lg text-base font-semibold bg-black bg-opacity-50 px-4 py-2 rounded-md group-hover:bg-opacity-80 transition-all duration-500">
                                {{ $information->title }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <x-footer />
@endsection