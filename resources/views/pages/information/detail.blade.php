@extends('layouts.app')

@section('title', 'Beranda - Fuqing Magelang')
    
@section('content')
    <x-header />
    <div class="lg:mx-60 mx-5">
        <x-reusable.subtitle subtitle="Detail Informasi" />
        <div class="lg:flex lg:justify-between lg:gap-3">
            <div class="w-full bg-gray-100 p-3 lg:p-12 rounded">
                <div>
                    <span class="font-bold text-2xl">{{$information->title}}</span>
                </div>
                <div class="flex justify-between align-center items-center text-sm mt-1 text-gray-500">
                    <div>
                        <span>
                            {{ strftime('%a, %e %b %Y', strtotime($information->create_date)) }}
                        </span>
                        <span>|</span>
                        <span>
                            {{$information->author}}
                        </span>
                    </div>
                    <div class="flex gap-1 align-center items-center">
                        Share : 
                        <a target="_blank" href="https://api.whatsapp.com/send?text={{$information->title}}%0A%0A%20{{route('information-detail', $information->slug)}}">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.953 13.2374C20.8588 9.99989 16.583 9.03739 13.2672 11.0499C10.0386 13.0624 8.99147 17.4374 11.0857 20.675L11.2602 20.9375L10.5621 23.5625L13.1799 22.8625L13.4417 23.0375C14.5761 23.65 15.7977 24 17.0193 24C18.3282 24 19.6371 23.65 20.7715 22.95C24.0001 20.85 24.96 16.5624 22.953 13.2374V13.2374ZM21.1205 19.975C20.7715 20.5 20.3352 20.85 19.7244 20.9375C19.3754 20.9375 18.9391 21.1125 17.1939 20.4125C15.7105 19.7125 14.4888 18.575 13.6162 17.2624C13.0927 16.6499 12.8309 15.8624 12.7436 15.0749C12.7436 14.3749 13.0054 13.7624 13.4417 13.3249C13.6162 13.1499 13.7907 13.0624 13.9653 13.0624H14.4016C14.5761 13.0624 14.7506 13.0624 14.8379 13.4124C15.0124 13.8499 15.4487 14.8999 15.4487 14.9874C15.5359 15.0749 15.5359 15.2499 15.4487 15.3374C15.5359 15.5124 15.4487 15.6874 15.3614 15.7749C15.2742 15.8624 15.1869 16.0374 15.0996 16.1249C14.9251 16.2124 14.8379 16.3874 14.9251 16.5624C15.2742 17.0874 15.7105 17.6125 16.1467 18.05C16.6703 18.4875 17.1939 18.8375 17.8047 19.1C17.9792 19.1875 18.1537 19.1875 18.241 19.0125C18.3282 18.8375 18.7645 18.4 18.9391 18.225C19.1136 18.05 19.2008 18.05 19.3754 18.1375L20.7715 18.8375C20.946 18.925 21.1205 19.0125 21.2078 19.1C21.2951 19.3625 21.2951 19.7125 21.1205 19.975V19.975Z" fill="#31353B"></path><rect x="0.6" y="0.6" width="32.8" height="32.8" rx="16.4" stroke="#31353B" stroke-width="0.8"></rect></svg>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{route('information-detail', $information->slug)}}">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.6693 17.0406C23.6693 13.3354 20.6854 10.3333 17.0026 10.3333C13.3198 10.3333 10.3359 13.3354 10.3359 17.0406C10.3359 20.3882 12.7738 23.1631 15.9609 23.6667V18.9795H14.2674V17.0406H15.9609V15.5628C15.9609 13.882 16.9556 12.9535 18.4789 12.9535C19.2085 12.9535 19.9714 13.0844 19.9714 13.0844V14.7342H19.1306C18.3026 14.7342 18.0443 15.2513 18.0443 15.7816V17.0406H19.8932L19.5975 18.9795H18.0443V23.6667C21.2314 23.1631 23.6693 20.3882 23.6693 17.0406Z" fill="#31353B"></path><rect x="0.6" y="0.6" width="32.8" height="32.8" rx="16.4" stroke="#31353B" stroke-width="0.8"></rect></svg>
                        </a>
                        <a target="_blank" href="https://twitter.com/intent/tweet?text={{$information->title}}&url={{route('information-detail', $information->slug)}}">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.5617 13.9906C22.5709 14.1222 22.5709 14.253 22.5709 14.3838C22.5709 18.387 19.6836 23 14.4069 23C12.7812 23 11.2709 22.5031 10 21.64C10.2308 21.6678 10.4531 21.6776 10.6932 21.6776C11.9847 21.6809 13.2397 21.2251 14.2559 20.3838C13.657 20.3723 13.0765 20.1639 12.5954 19.7874C12.1143 19.411 11.7566 18.8854 11.5723 18.284C11.7496 18.3119 11.9277 18.3307 12.1144 18.3307C12.3716 18.3307 12.6302 18.2931 12.8702 18.2277C12.2204 18.0892 11.636 17.7175 11.2165 17.1757C10.797 16.6339 10.5683 15.9555 10.5692 15.2559V15.2183C10.9518 15.4431 11.3956 15.5836 11.8658 15.6024C11.4719 15.3262 11.1489 14.9514 10.9256 14.5114C10.7024 14.0715 10.5858 13.58 10.5863 13.0809C10.5863 12.5186 10.7281 12.0029 10.9767 11.5533C11.6977 12.4893 12.597 13.255 13.6164 13.8009C14.6357 14.3468 15.7523 14.6606 16.8939 14.7221C16.8497 14.4966 16.8226 14.2627 16.8226 14.0282C16.8224 13.6305 16.8965 13.2366 17.0407 12.8691C17.1848 12.5016 17.3962 12.1677 17.6627 11.8865C17.9292 11.6053 18.2456 11.3822 18.5938 11.2301C18.942 11.078 19.3153 10.9998 19.6921 11C20.5185 11 21.2644 11.3654 21.7887 11.9563C22.4311 11.8252 23.0472 11.5777 23.6096 11.2248C23.3955 11.9246 22.9469 12.5179 22.348 12.8937C22.9177 12.8252 23.4746 12.667 24 12.4246C23.6076 13.0284 23.1213 13.5578 22.5617 13.9906V13.9906Z" fill="#31353B"></path><rect x="0.6" y="0.6" width="32.8" height="32.8" rx="16.4" stroke="#31353B" stroke-width="0.8"></rect></svg>
                        </a>
                    </div>
                </div>
                <div class="border-b-2 my-2 border-gray-400"></div>
                <figure class="mt-5 w-full">
                    <img class="w-full" src="{{ asset('storage/' . $information->thumbnail) }}" alt="">
                </figure>
                <div id="information-content" class="my-2" style="font-size: 15px; line-height: 1.5;">
                    {!! $information->content !!}
                </div>
            </div>
            <div class="lg:sticky lg:top-3 border rounded w-[350px] h-[600px] mt-5 lb:mb-0">
                <div class="mb-2">
                    <span class="font-semibold text-lg" style="color: #D10000">Baca Juga</span>
                </div>
                <div class="">
                    <div class="space-y-2">
                        @foreach ($other_informations as $key => $other_information)
                            <a href="{{route('information-detail', $other_information->slug)}}">
                                <div class="flex items-center gap-4 bg-gray-100 shadow-md p-2 rounded-lg border-l-4 border-red-500 mb-3 lg:mb-0">
                                    <div class="text-sm flex items-center justify-center w-10 h-10 bg-red-100 text-red-600 font-bold rounded-full">
                                        {{ $key + 1 }}
                                    </div>
                                    <div class="flex-1">
                                        <span class="text-sm font-medium text-gray-800">{{ $other_information->title }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    
    <x-footer />
@endsection