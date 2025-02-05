<div>
    <footer class="footer pt-32 pb-40 bg-base-200 footer-img">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 px-5 justify-items-start lg:justify-items-center w-full">
            <nav class="flex-col flex gap-3 text-white">
                <div class="flex-row flex">
                    <img src="images/logo/logo-dark.png" class="w-32" />
                    <img src="images/logo/logo-icon.png" class="w-32" />
                </div>
                <p>{{__('home.title')}} <br> {{__('home.association')}} </p>
                <h1 class="font-bold text-2xl mb-0 text-slate-300">Conference Organizer</h1>
                <p class="mt-0">MCO (Medical Conference Organizer) <br>
                    A Division of PT. Pharma-Pro International</p>
                <div class="flex flex-row gap-3 items-center">
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-solid fa-envelope text-slate-300"></i></a>
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-solid fa-link text-slate-300"></i></a>
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-brands text-slate-300 fa-facebook text-lg"></i></a>
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-solid text-slate-300 fa-phone"></i></a>

                </div>

            </nav>
            <nav class="flex-col flex gap-5 text-white">
                <h1 class="font-bold text-slate-300 text-2xl">{{__('home.use_link')}}</h1>
                <a href="/scientific-program" class="link link-hover">{{__('menu.program')}}</a>
                <a href="/congress-information" class="link link-hover">{{__('menu.congress-info')}}</a>
                <a href="/submission" class="link link-hover">{{__('menu.submission')}}</a>
                <a href="/registration" class="link link-hover">{{__('menu.registration')}}</a>
                <a onclick="my_modal_4.showModal()" class="link link-hover">{{__('menu.contact_us')}}</a>

            </nav>
            <nav class="flex-col flex gap-2 text-white">
                <h1 class="font-semibold text-2xl text-slate-300">{{__('home.get_contact')}}</h1>
                <p class="text-slate-300">{{__('home.get_contact_us')}}</p>
                <div class="grid grid-flow-col gap-2">
                    <a href="" data-tip="@gmail.com" class="btn btn-outline hover:bg-primary btn-md tooltip tooltip-bottom py-2 btn-ghost btn-square"><i class="fa-brands fa-youtube text-red-600 text-lg"></i></a>
                    <a href="https://www.instagram.com/konasperhatilombok?igsh=c291amg1emZ3OXRo" data-tip="@konasperhatilombok" class="btn btn-outline hover:bg-primary btn-md tooltip tooltip-bottom py-2 btn-ghost btn-square"><i class="fa-brands fa-instagram text-rose-500 text-lg"></i></a>
                    <a href="mailto:konasperhatikl2025@pharma-pro.com" data-tip="konasperhatikl2025@pharma-pro.com" class="tooltip tooltip-bottom btn btn-outline hover:bg-primary btn-md  py-2 btn-ghost btn-square"><i class="fa-solid fa-envelope text-white text-lg"></i></a>
                    <a href="https://wa.me/+6282277832431" target="_blank" data-tip="+62 822-7783-2431" class="btn btn-outline hover:bg-primary btn-md tooltip tooltip-bottom  py-2 btn-ghost btn-square"><i class="fa-brands fa-whatsapp text-lg text-green-500"></i></a>
                </div>
            </nav>
        </div>

    </footer>
    <footer class="footer text-slate-200 px-10 py-4 footer-img border-t border-slate-300">
        <aside class="items-center grid-flow-col">
            <p>MIS - IT Pharma-Pro © 2024 </p>
        </aside>
        <nav class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-4">
                <a href="javascript:void(0)" class="hover:text-primary-400">National Congress of PERHATI-KL </a>
            </div>
        </nav>
    </footer>

    <!-- You can open the modal using ID.showModal() method -->
    <dialog id="my_modal_4" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <div class="border-b">
                <h3 class="text-lg font-bold">KONAS XX PERHATI-KL {{__('menu.secretariat')}}</h3>
            </div>
            <div class="flex flex-col gap-4 py-4 w-9/12 justify-center items-center mx-auto">
                <div class="stats stats-vertical lg:stats-horizontal shadow">
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-regular fa-user text-3xl"></i>
                        </div>
                        <div class="stat-title">{{__('menu.contact_ps')}}</div>
                        <div class="stat-value text-primary">Ms. Nova</div>
                        <!-- <div class="stat-desc">Ms. Nova</div> -->
                    </div>

                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-solid fa-location-dot text-3xl"></i>
                        </div>
                        <div class="stat-title">{{__('menu.secretariat')}}</div>
                        <!-- <div class="stat-value text-primary">Ms. Nova</div> -->
                        <div class="stat-desc">Perkantoran Duta Merlin <br> Blok C 35 - 36 <br>
                            Jl. Gajah Mada 3-5, Jakarta </div>
                    </div>
                </div>
                <div class="stats stats-vertical lg:stats-horizontal shadow">
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-solid fa-phone text-3xl"></i>
                        </div>
                        <div class="stat-title">Call</div>
                        <div class="stat-desc">+62 21 6386 9502</div>
                    </div>

                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-solid fa-envelope-open text-3xl"></i>
                        </div>
                        <div class="stat-title">Email</div>

                        <div class="stat-desc"><a href="mailto:konasperhatikl2025@pharma-pro.com">konasperhatikl2025@pharma-pro.com</a> </div>
                    </div>
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-brands fa-whatsapp text-3xl text-green-600"></i>
                        </div>
                        <div class="stat-title">Whatsapp</div>

                        <div class="stat-desc"><a href="https://wa.me/+6282277832431"> +62 822-7783-2431</a></div>
                    </div>
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-brands fa-instagram text-3xl text-rose-500"></i>
                        </div>
                        <div class="stat-title">Instagram</div>
                        <div class="stat-desc"><a href="https://www.instagram.com/konasperhatilombok/?igsh=c291amg1emZ3OXRo">@konasperhatilombok</a></div>
                    </div>
                </div>

            </div>
            <div class="modal-action">
                <form method="dialog">
                    <!-- if there is a button, it will close the modal -->
                    <button class="btn">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>