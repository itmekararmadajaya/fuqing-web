<div class="lg:mx-60 mx-5 mb-8 lg:mb-16" id="event-tab">
    <x-reusable.subtitle subtitle="Acara" />
    <div class="">
        <div class="lg:grid lg:grid-cols-3 lg:gap-3">
            @foreach ($events as $event)
                <div class="group overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer transition-transform duration-300 hover:scale-105 mb-3 lg:mb-0" style="background-color: #DEBE8B;">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base lg:text-lg font-semibold text-black">{{$event->title}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>