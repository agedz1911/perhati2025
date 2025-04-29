<div>
    @if (count($faculties) > 0)
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($faculties as $faculty)
        <div class="card bg-base-100">
            <figure class="">
                @if($faculty->getMedia('images')->isEmpty())
                <div class="avatar p-3">
                    <div class="rounded-xl ring ring-primary/70 ring-offset-base-100 ring-offset-4">
                        <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image" class="rounded-lg" />
                    </div>
                </div>
                @else
                @foreach($faculty->getMedia('images') as $image)
                <div class="avatar p-3">
                    <div class="rounded-xl ring ring-primary/70 ring-offset-base-100 ring-offset-4">
                        <img src="{{ $image->getUrl() }}" alt="{{$faculty->name}}" />
                    </div>
                </div>
                @endforeach
                @endif
            </figure>
            <div class="card-body pt-0">
                <h2 class="card-title text-primary hover:cursor-pointer">
                    {{$faculty->name}}
                </h2>
                <p class="">{{$faculty->country}}</p>
                <p class="text-xs italic text-amber-500 absolute bottom-1 right-3">{{$faculty->email ? '*' . $faculty->email : ''}}</p>
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