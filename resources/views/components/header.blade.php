<div style="background-image: url('{{ asset('assets/background/bg-header.jpg') }}');" class="bg-cover bg-center">
    <div class="h-14 overflow-x-auto flex justify-center lg:gap-6 gap-2 lg:gap-3 items-center" style="background: linear-gradient(to bottom, rgba(236, 229, 200, 1), rgba(236, 229, 200, 0) 180%);">
        <div class="flex items-center">
            <span class="h-3 w-3 rounded-full" style="background-color: #DF3727"></span>
        </div>
        <div class="flex items-center">
            <a href="{{route('home')}}">
                <span class="text-base lg:text-lg font-semibold lg:font-medium" style="color: #DF3727">Beranda</span>
            </a>
        </div>
        <div class="flex items-center">
            <span class="h-3 w-3 rounded-full hidden lg:block" style="background-color: #DF3727"></span>
        </div>
        <div class="flex items-center">
            <a href="{{route('home')}}#event-tab">
                <span class="text-base lg:text-lg font-semibold lg:font-medium" style="color: #DF3727">Acara</span>
            </a>
        </div>
        <div class="flex items-center">
            <span class="h-3 w-3 rounded-full hidden lg:block" style="background-color: #DF3727"></span>
        </div>
        <div class="flex items-center">
            <a href="{{route('information')}}">
                <span class="text-base lg:text-lg font-semibold lg:font-medium" style="color: #DF3727">Informasi</span>
            </a>
        </div>
        <div class="flex items-center">
            <span class="h-3 w-3 rounded-full hidden lg:block" style="background-color: #DF3727"></span>
        </div>
        <div class="flex items-center">
            <a href="{{$setting->gdrive_link}}" target="_blank">
                <span class="text-base lg:text-lg font-semibold lg:font-medium" style="color: #DF3727">Galeri</span>
            </a>
        </div>
        <div class="flex items-center">
            <span class="h-3 w-3 rounded-full" style="background-color: #DF3727"></span>
        </div>
    </div>
    <div class="lg:mx-60 mx-5">
        <img class="w-full" src="{{asset('storage/'.$setting->header_image)}}" alt="">
    </div>
</div>