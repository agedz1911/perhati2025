<div class="bg-perhati-50 relative">
    {{-- Start Hero --}}

    <div class="hero min-h-screen mb-0 bg-sky-50 bg-[url('images/bg2.png')]">
        <div class="hero-overlay bg-opacity-20"></div>
        <div class="hero-content flex-col justify-start md:flex-row">
            <div class="lg:w-[500px] lg:-mt-40">
                <img src="images/logo/logo.png" class="max-w-sm" alt="">
                <div class="flex flex-col gap-4 mt-5">
                    <h1 class="text-4xl font-semibold">{{ __('home.title')}} PERHATI-KL
                    </h1>
                    <h4 class="italic text-xl font-semibold text-gray-700">" {{ __('home.theme')}} "</h4>
                    <p class="text-stone-800">{{ __('home.hotel')}}, {{ __('home.venue')}} <br>
                        {{ __('home.event_date')}}
                    </p>
                    <div class="flex flex-row gap-5">
                        <a href="/registration" class="btn btn-info text-white">{{__('home.register')}}</a>
                        <a href="/congress-information"
                            class="btn btn-outline hover:bg-info">{{__('home.read_more')}}</a>
                    </div>
                </div>
            </div>
            <img src="images/landing-new.png" class="lg:max-w-lg max-w-xs" />

        </div>
    </div>

    {{-- End Hero --}}
    <div class="md:-mt-20 mb-20 lg:mb-40 container mx-auto">
        <div class="grid grid-cols-2  md:grid-cols-4 justify-items-center px-3 w-full gap-2  mt-5 md:mt-8"
            id="countdown">
            <div class="card lg:w-3/4 w-full bg-primary text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="days"></h2>
                    <p class="text-center">{{__('home.counter_day')}}</p>
                </div>
            </div>
            <div class="card bg-primary lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="hours"></h2>
                    <p class="text-center">{{__('home.counter_hour')}}</p>
                </div>
            </div>
            <div class="card bg-primary lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="mins"></h2>
                    <p class="text-center">{{__('home.counter_minute')}}</p>
                </div>
            </div>
            <div class="card bg-primary lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="secs"></h2>
                    <p class="text-center">{{__('home.counter_second')}}</p>
                </div>
            </div>
            <div id="end"></div>
        </div>
    </div>

    {{-- Start About --}}
    <div class="pb-24 px-4 mb-5 container mx-auto items-center">
        <div class="flex flex-col gap-5 justify-between lg:flex-row">
            <div class="mockup-window bg-gray-200 relative border w-full">
                <div class="absolute right-0 px-4 top-3">
                    <p class="text-black font-semibold"><i class="fa-solid fa-circle-dot text-green-500"></i> PERHATI-KL
                    </p>
                </div>
                <div class="bg-gray-50 flex justify-center px-4 py-16">
                    <iframe class="w-full rounded-lg" width="560" height="400"
                        src="https://www.youtube.com/embed/EEwjG5WVJ98?si=Bxh9cjaYtqfO64no" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="w-full px-0 lg:pl-10 lg:py-5">

                <h1 class="text-4xl mt-5 text-info font-bold">{{__('home.title')}} </h1>
                <h1 class="text-xl mt-5 text-info font-bold">{{__('home.association')}}</h1>
                <p class="text-slate-600 font-semibold italic mt-5">"{{__('home.theme')}}"
                </p>
                <div class="font-semibold mt-5 text-slate-500">
                    <p>{{ __('home.hotel')}}, {{__('home.venue')}} </p>
                    <p>{{__('home.event_date')}}</p>
                </div>

                <div class="lg:mt-10 mt-5 flex items-center gap-4">
                    <a href="/registration"
                        class="btn w-1/3 btn-primary border-none text-white">{{__('home.register')}}</a>
                    <a href="/congress-information" class="btn w-1/3 btn-outline-primary ">{{__('home.read_more')}}</a>
                </div>
                <img src="images/mascoot.png" class="w-36 float-end" alt="">
            </div>
        </div>
    </div>
    {{-- End About --}}
    <div class="py-24 px-4 mb-10 bg-slate-100">
        <div class="container mx-auto items-center">
            <div class="flex items-center justify-between">
                <div class="badge badge-primary p-8">
                    <h1 class="text-2xl text-white font-semibold">{{__('menu.remarks')}}</h1>
                </div>
                <i class="fa-regular text-primary fa-message text-5xl"></i>
            </div>
            <div class="flex flex-col items-center">
                <div class="pt-20 pb-10 justify-center flex md:items-center lg:items-start flex-col lg:flex-row gap-5">
                    @foreach ($messages as $message)
                    <div class="flex items-start flex-row gap-3">
                        @if ($message->image == null)
                        <div class="">
                            <div class="w-20 rounded-md">
                                <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                    class="object-cover rounded-lg w-20" />
                            </div>
                        </div>
                        @else

                        <div class="">
                            <div class="w-20 rounded-md bg-gradient-to-b from-perhati-500 to-perhati-200">
                                <img src="{{ asset('storage/' . $message->image) }}"
                                    class="object-cover w-20 rounded-lg" alt="{{ $message->name }}" />
                            </div>
                        </div>

                        @endif
                        <div class="card bg-base-100 w-full lg:w-96 shadow-xl">
                            <div class="card-body ">
                                <h2 class="card-title text-biscay-500">{!! $message->title !!}</h2>
                                <div class="line-clamp-6">{!! $message->description !!}
                                </div>
                                <div class="card-actions justify-end">
                                    <a class="text-sm text-perhati-600"
                                        href="javascript:void(0)">{{__('home.read_more')}}</a>
                                </div>
                                <div class="card-actions mt-3">
                                    <p class="font-bold text-primary">- {{ $message->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="/congress-information#welcome-remarks"
                    class="btn btn-primary  text-center rounded-badge border w-full md:w-1/5">{{__('home.read_more')}}
                    <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </div>

    {{-- Start Counter --}}
    <div class="bg-scroll bg-counter relative lg:px-20 px-2 pt-14 pb-24">
        <div class="flex flex-col lg:flex-row gap-2 justify-center">
            <div class="card bg-base-100 w-full max-w-4xl shadow-md">
                <div class="card-body">
                    <h2 class="card-title mb-5">{{ __('home.tgl_penting')}}</h2>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <tbody>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_ws')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_ws')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_opening')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_opening')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_congress')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_congress')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_paper')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_paper')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_dinner')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_dinner')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_expo')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_expo')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_early')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_early')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_regular_reg')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_regular')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_abstract')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_abstract')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_acc')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_acc')}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mockup-window  relative border w-full">
                <div class="absolute right-0 px-4 top-3">
                    <p class="text-black font-semibold"><i class="fa-solid fa-circle-dot text-green-500"></i> PERHATI-KL
                    </p>
                </div>
                <div class="bg-gray-50 flex justify-center px-4 py-16">
                    <iframe class="w-full rounded-lg" width="560" height="400" src="https://www.youtube.com/embed/ahK1_sWsGlA?si=0EMqYQYtm0C6FSKn"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- End Counter --}}
    {{-- Start Map --}}
    {{-- <div class="bg-local pt-40 pb-52 lg:px-20 px-5 bg-blog">
        <div class="w-full mb-10">
            <iframe class="w-full rounded-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5968203715424!2d106.7951294746461!3d-6.184677660597026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f68da8842883%3A0x1b255ae63d716ca0!2sPusat%20Jantung%20Nasional%20Harapan%20Kita!5e0!3m2!1sid!2sid!4v1718088658161!5m2!1sid!2sid"
                class="w-100" width="600" height="315" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="card w-full bg-primary-600 text-primary-content pt-5 pb-5">
            <div class="card-body">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-5">
                    <div class="flex items-center gap-3">
                        <i class="fa-regular fa-envelope text-6xl text-white"></i>
                        <h2 class="card-title text-xl md:text-4xl text-white">Subscribe for
                            the Latest Updates</h2>
                    </div>
                    <form class="flex flex-col lg:flex-row gap-4 lg:w-1/2 w-full">

                        <input type="text" placeholder="Enter Your Email"
                            class="input input-bordered input-lg rounded-lg lg:w-2/3 w-full" />
                        <button
                            class="btn btn-outline-success text-primary-600  border-none hover:text-slate-100 btn-lg w-full lg:w-1/3 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- End Map --}}
</div>


<script>
    function animatedCounter(targer, time = 200, start = 0) {
        return {
            current: 0,
            target: targer,
            time: time,
            start: start,
            updatecounter: function() {
                start = this.start;
                const increment = (this.target - start) / this.time;
                const handle = setInterval(() => {
                    if (this.current < this.target)
                        this.current += increment
                    else {
                        clearInterval(handle);
                        this.current = this.target
                    }
                }, 1);
            }
        };
    }
</script>