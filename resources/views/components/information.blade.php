<div class="lg:mx-60 mx-5">
    <x-reusable.subtitle subtitle="Informasi" />
    <div class="hidden lg:block">
        <div class="lg:grid lg:grid-cols-3 lg:gap-3">
            @foreach($informations as $Key => $information)
            <div class="mb-3 lg:mb-0">
                <a href="{{ route('information-detail', $information->slug) }}" class="group block">
                    <div class="relative aspect-[16/9] bg-center bg-no-repeat rounded-2xl overflow-hidden shadow-lg transform transition duration-500 hover:scale-105" 
                         style="background-image: url('{{ asset('storage/' . $information->thumbnail) }}'); background-size: cover;">
                        <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-60 transition-all duration-500"></div>
                        <div class="absolute inset-0 flex items-end p-4">
                            <div class="text-white text-lg font-semibold bg-black bg-opacity-50 px-4 py-2 rounded-md group-hover:bg-opacity-80 transition-all duration-500">
                                {{ $information->title }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Mobile View --}}
    <div id="" class="relative w-full block lg:hidden" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg aspect-[16/9]">
            @foreach($informations as $Key => $information)
                <div class="bg-red-200 hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="{{ route('information-detail', $information->slug) }}" class="group block">
                        <div class="relative aspect-[16/9] bg-center bg-no-repeat rounded-2xl overflow-hidden shadow-lg transform transition duration-500 hover:scale-105"
                            style="background-image: url('{{ asset('storage/' . $information->thumbnail) }}'); background-size: cover;">
                            <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-60 transition-all duration-500"></div>
                            <div class="absolute inset-0 flex items-end p-4">
                                <div class="text-white text-base font-semibold bg-black bg-opacity-50 px-4 py-2 rounded-md group-hover:bg-opacity-80 transition-all duration-500">
                                    {{ $information->title }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center items-center pt-3">
            <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="text-gray-400 hover:text-gray-900 group-focus:text-gray-900">
                    <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="text-gray-400 hover:text-gray-900 group-focus:text-gray-900">
                    <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    {{-- Mobile View --}}

    <div class="text-center border-2 mt-0 lg:mt-3">
        <a href="{{route('information')}}" class="inline-flex items-center text-black hover:text-blue-800 font-semibold transition-colors">
            Lihat semua
        </a>
    </div>

</div>