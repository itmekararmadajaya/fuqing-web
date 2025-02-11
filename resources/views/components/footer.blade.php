<div>
    <footer class="bg-white rounded-lg shadow m-4" style="background-color: #DEBE8B;">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
          <span class="text-sm font-semibold text-dark sm:text-center dark:text-gray-400">© 2025 <a href="#" class="hover:underline">Fuqing Magelang</a>
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-semibold text-black sm:mt-0">
            <li>
                <a href="{{route('home')}}" class="hover:underline me-4 md:me-6">Beranda</a>
            </li>
            <li>
                <a href="{{route('home')}}#event-tab" class="hover:underline me-4 md:me-6">Acara</a>
            </li>
            <li>
                <a href="{{route('information')}}" class="hover:underline me-4 md:me-6">Informasi</a>
            </li>
            <li>
                <a href="{{$setting->gdrive_link}}" target="_blank" class="hover:underline me-4 md:me-6">Galeri</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Terms & Conditions</a>
            </li>
        </ul>
        </div>
    </footer>
</div>