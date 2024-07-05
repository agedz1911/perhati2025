<div class="bg-perhati-50 ">
    <div class="container mx-auto  border-b border-b-perhati-100">
        <div class="flex flex-col gap-5 justify-between px-3 py-3 lg:flex-row ">
            <div class="w-full lg:pt-20">
                <img src="images/logo/logo.png" class="max-w-xs" />
                <h1 class="text-4xl mt-5 text-primary-800 mb-5 font-bold">The XX National Congress of PERHATI-KL</h1>
                <div class="mt-5">
                    <div class="font-semibold mt-5 text-slate-500">
                        <p class="text-biscay-900">Lombok, West Nusa Tenggara, Indonesia <br>
                            Oktober, 30<sup>th</sup> - November, 1<sup>st</sup> 2025</p>
                    </div>
                </div>
                <div class="lg:mt-10 mt-5 flex items-center gap-4">
                    <button class="btn btn-primary px-6">Contact us</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4  w-full gap-2  mt-5 md:mt-8" id="countdown">
                    <div class="card w-36 bg-info text-white transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="days"></h2>
                            <p class="text-center">Days</p>
                        </div>
                    </div>
                    <div class="card bg-info w-36 text-white transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="hours"></h2>
                            <p class="text-center">Hours</p>
                        </div>
                    </div>
                    <div class="card bg-info w-36 text-white transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="mins"></h2>
                            <p class="text-center">Minutes</p>
                        </div>
                    </div>
                    <div class="card bg-info w-36 text-white transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="secs"></h2>
                            <p class="text-center">Seconds</p>
                        </div>
                    </div>
                    <div id="end"></div>
                </div>
            </div>
            <div class="w-full flex items-start justify-center relative">
                <img src="images/landing-new.png"
                    class="max-w-sm rounded-lg lg:max-w-lg " />
                <div class="absolute glass p-2 rounded-lg top-1/2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <p class="text-6xl text-perhati-600"><i class="fa-regular fa-circle-play"></i></p>
                </div>
            </div>
        </div>
    </div>

    <div class=" pt-20 pb-20  lg:px-20 px-5  bg-primary-50" id="welcome-remarks">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-sky-600 font-semibold">Congress Information</h4>
            <h1 class="text-4xl text-primary font-semibold">Welcome Remarks</h1>
        </div>
        <livewire:resources.welcome-remarks />
    </div>

    <div class="bg-local bg-doctor pt-24 pb-52 lg:px-20 px-5" id="organizing-committee">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Congress Information</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Organizing Committee</h1>
        </div>
        <livewire:resources.committee />
    </div>

    <div class="bg-local pt-24 pb-52 lg:px-20 px-5 bg-doctor bg-primary-50" id="faculties">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Congress Information</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Faculties</h1>
        </div>
        <livewire:resources.faculty />
    </div>


</div>
