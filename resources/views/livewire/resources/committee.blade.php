<div>
    <div class="flex flex-col gap-3">
        @if (count($committees) > 0)
        @foreach ($uniqueCategories as $category)
        {{-- <div class="badge bg-primary-900 text-slate-300 py-5 px-10 text-lg font-semibold my-10">{{ $category }}</div> --}}
        <h1 class="font-semibold text-primary text-xl">{{ $category }}</h1>
        <div class="flex flex-col">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <ul class="text-slate-600 list-disc list-inside">
                <li>{{$committee->name}} ({{$committee->title}})</li>
            </ul>
            {{-- <div class="">
                <div class="card w-full md:w-72 bg-base-100 shadow-xl">
                    
                    <div class="card-body px-1 items-center text-center">
                        <h2 class="text-xl font-semibold">
                            {{$committee->name}}
                        </h2>
                        <p class="text-lg text-gray-400">
                            {{$committee->title}}
                        </p>
                    </div>
                </div>
            </div> --}}
            @endif
            @endforeach
        </div>
        @endforeach
        @else
        <div>
            <p class="text-gray-500 text-2xl font-semibold">No Data</p>
        </div>
        @endif
    </div>
</div>