<div class="bg-slate-50">
    <div class="pt-16 pb-52 lg:px-20 px-2">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary-600 font-semibold">{{ __('menu.registration') }}</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">{{ __('menu.registration_fee') }}</h1>
        </div>
        <div class="card bg-price bg-perhati-50 shadow-md">
            <div class="card-body w-full">
                <h1 class="uppercase font-semibold text-lg">Symposium</h1>
                <div class="overflow-x-auto">
                    <table class="table table-zebra text-center">
                        <!-- head -->
                        <thead>
                            <tr class="">
                                <th class="text-start" style="width: 32%;">{{__('home.reg_category')}}</th>
                                <th>{{__('home.early_bird')}} <br> {{__('home.reg_up_to')}} June 24<sup>th</sup>, 2025
                                </th>
                                <th>{{__('home.regular_reg')}} <br> {{__('home.reg_up_to')}} August 29<sup>th</sup>,
                                    2025</th>
                                <th>{{__('home.reg_late_onsite')}} <br> {{__('home.reg_start_from')}} August
                                    30<sup>th</sup>, 2025</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th class="text-start">{{__('home.reg_specialist')}} </th>
                                <td>{{__('home.reg_specialist_early')}}</td>
                                <td>{{__('home.reg_specialist_regular')}}</td>
                                <td>{{__('home.reg_specialist_late')}}</td>

                            </tr>
                            <tr>
                                <th class="text-start">{{__('home.reg_resident_gp')}} </th>
                                <td>{{__('home.reg_resident_early')}}</td>
                                <td>{{__('home.reg_resident_regular')}}</td>
                                <td>{{__('home.reg_resident_late')}}</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="card-actions justify-end">
                    <a href="https://expo.virconex-id.com/registration/perhati2025" class="btn btn-primary"><i
                            class="fa-regular fa-pen-to-square"></i> {{__('home.register')}}</a>
                </div>
            </div>
        </div>
        <div class="border-t-2 border-dashed mt-5">
            <h1 class="uppercase font-semibold text-lg">Workshop</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_facial_plastic')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class=""></h2>
                            <span class="text-lg">{{__('home.ws_sp_facial_plastic')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_neurotology')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class="">{{__('home.reg_specialist')}}</h2>
                            <span class="text-lg">{{__('home.ws_sp_neurotology')}}</span>
                        </div>
                        <div class="flex justify-between">
                            <h2 class="">{{__('home.reg_resident_gp')}}</h2>
                            <span class="text-lg">{{__('home.ws_sp_neurotology')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_laring_faring')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class="">{{__('home.reg_specialist')}}</h2>
                            <span class="text-lg">{{__('home.ws_sp_laring_faring')}}</span>
                        </div>
                        <div class="flex justify-between">
                            <h2 class="">{{__('home.reg_resident_gp')}}</h2>
                            <span class="text-lg">{{__('home.ws_gp_laring_faring')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_rhinology')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class=""></h2>
                            <span class="text-lg">{{__('home.ws_sp_rhinology')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_imuno_alergi')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class=""></h2>
                            <span class="text-lg">{{__('home.ws_sp_imuno_alergi')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_oncology')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class=""></h2>
                            <span class="text-lg">{{__('home.ws_sp_oncology')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_bronko')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class="">{{__('home.reg_specialist')}}</h2>
                            <span class="text-lg">{{__('home.ws_sp_bronko')}}</span>
                        </div>
                        <div class="flex justify-between">
                            <h2 class="">{{__('home.reg_resident_gp')}}</h2>
                            <span class="text-lg">{{__('home.ws_gp_bronko')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card w-full bg-price bg-perhati-50 max-w-sm  shadow-sm">
                    <div class="card-body">
                        <p class="font-semibold text-xl">{{__('home.ws_otology')}}</p>
                        <div class="flex justify-between border-t-2">
                            <h2 class=""></h2>
                            <span class="text-lg">{{__('home.ws_sp_otology')}}</span>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span>{{__('home.tgl_ws')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-actions justify-end">
                <a href="https://expo.virconex-id.com/registration/perhati2025" class="btn btn-primary"><i
                        class="fa-regular fa-pen-to-square"></i> {{__('home.register')}}</a>
            </div>
        </div>
    </div>

    <div class="bg-local pt-24 pb-52 lg:px-20 px-5 bg-blog" id="reg-info">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary-600 font-semibold">{{ __('menu.registration') }}</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">{{ __('menu.registration_info') }}</h1>
        </div>

        <livewire:resources.reg-info />
        <!-- <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-lg">
            <details class="p-6 group" open>
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-xl font-semibold text-primary-900">
                        Entitlements
                    </h5>
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                        <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-slate-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>

            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-xl font-semibold text-primary-900">
                        Registration Fee
                    </h5>

                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                        <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-slate-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>

            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-xl font-semibold text-primary-900">
                        Cancellation Policy of Registration
                    </h5>

                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                        <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-slate-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>
        </div> -->

    </div>


</div>