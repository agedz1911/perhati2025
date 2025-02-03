<div class="bg-blog pt-16 pb-36 lg:px-20 px-2 ">

    <div class="flex-col flex gap-3 mb-10">
        <h4 class="text-2xl text-primary font-semibold">{{ __('menu.accommodation') }}</h4>
        <h1 class="text-4xl text-primary font-semibold">{{ __('menu.hotel_resv') }}</h1>
        <p class="text-gray-500">{{__('home.info_accommodation')}}</p>
    </div>

    @if (count($accommodations) > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 px-2 lg:px-0">
        @foreach ($accommodations as $accommodation)
        <div class="card glass card-compact w-full shadow-md">
            <figure>
                <img src="{{ asset('storage/' . $accommodation->image) }}" class="w-full" alt="Hotel" />
            </figure>
            <div class="card-body text-center items-center">
                <h2 class="card-title text-primary">{{$accommodation->hotel_name}}</h2>
                <div class="flex flex-row justify-center">
                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$accommodation->hotel_star)
                        <i class="fa-solid fa-star text-amber-400"></i>
                        @else
                        <i class="fa-solid fa-star"></i>
                        @endif
                        @endfor
                </div>
                <p class="mt-2 mb-3 text-xs text-gray-500"><i class="fa-solid text-accent fa-circle-info"></i>
                    {{$accommodation->distance}}</p>
                <p class="mb-0 font-semibold text-info">{{ __('menu.room_type') }}</p>
                <div class="flex flex-col lg:flex-row justify-between gap-2 w-full text-sm mb-3">
                    {!! str($accommodation->price)->markdown()->sanitizeHtml() !!}
                </div>
                <div class="card-actions w-full border">
                    <a href="{{$accommodation->url}}" class="btn btn-primary btn-block">{{ __('menu.book_now') }} <i class="fa-solid fa-angles-right"></i></a href="{{$accommodation->url}}">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div>
        <p class="text-gray-500 text-2xl text-center font-semibold">No Data</p>
    </div>
    @endif
</div>