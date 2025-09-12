<div>
    <div class="flex items-center justify-center">
        <div x-data="{ openTab: 3 }" class="lg:w-11/12 w-full mx-auto">
            <div class="">
                <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-primary text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">28
                        October</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-primary text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">29
                        October</button>
                    <button x-on:click="openTab = 3" :class="{ 'bg-primary text-white': openTab === 3 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">30
                        October</button>
                    <button x-on:click="openTab = 4" :class="{ 'bg-primary text-white': openTab === 4 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">31
                        October</button>
                    <button x-on:click="openTab = 5" :class="{ 'bg-primary text-white': openTab === 5 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">1
                        November</button>
                </div>

                <div x-show="openTab === 1"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800 ">

                                    <th>Skill Lab FK Universitas Mataram</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td class="align-top">
                                        @foreach ($duasembilan as $labFk)
                                        @if ($labFk->room == 'Skill Lab FK Universitas Mataram')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$labFk->color}}]">
                                            {{$labFk->time}} <br>
                                            {{$labFk->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                    <th>Skill Lab FK <br> Universitas Mataram</th>
                                    <th>IBS RSUD NTB</th>
                                    <th> Gili Meno </th>
                                    <th> Gili Trawangan </th>
                                    <th> Mandalika </th>
                                    <th> Pejanggik </th>
                                    <th> Rinjani Ballroom </th>
                                    <th> Gili Air </th>
                                    <th> Sangkareang </th>
                                    <th> Melati </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center text-xs">
                                    <td class="align-top">
                                        @foreach ($duasembilan as $labFk)
                                        @if ($labFk->room == 'Skill Lab FK Universitas Mataram')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$labFk->color}}]">
                                            {{$labFk->time}} <br>
                                            {{$labFk->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $ibs)
                                        @if ($ibs->room == 'IBS RSUD NTB')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$ibs->color}}]">
                                            {{$ibs->time}} <br>
                                            {{$ibs->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $meno)
                                        @if ($meno->room == 'Gili Meno')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                            {{$meno->time}} <br>
                                            {{$meno->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $trawangan)
                                        @if ($trawangan->room == 'Gili Trawangan')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                            {{$trawangan->time}} <br>
                                            {{$trawangan->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $mandalika)
                                        @if ($mandalika->room == 'Mandalika')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                            {{$mandalika->time}} <br>
                                            {{$mandalika->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $Pejanggik)
                                        @if ($Pejanggik->room == 'Pejanggik')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$Pejanggik->color}}]">
                                            {{$Pejanggik->time}} <br>
                                            {{$Pejanggik->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $rinjani)
                                        @if ($rinjani->room == 'Rinjani Ballroom')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                            {{$rinjani->time}} <br>
                                            {{$rinjani->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $air)
                                        @if ($air->room == 'Gili Air')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                            {{$air->time}} <br>
                                            {{$air->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $Sangkareang)
                                        @if ($Sangkareang->room == 'Sangkareang')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$Sangkareang->color}}]">
                                            {{$Sangkareang->time}} <br>
                                            {{$Sangkareang->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($duasembilan as $melati0)
                                        @if ($melati0->room == 'Melati Ballroom')
                                        <div class="border px-2 py-4 w-full rounded-md bg-[{{$Sangkareang->color}}]">
                                            {{$melati0->time}} <br>
                                            {{$melati0->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div x-show="openTab === 3"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                    <th>Melati Ballroom</th>
                                    <th>Pejanggik</th>
                                    <th> Mandalika </th>
                                    <th> Rinjani Ballroom </th>
                                    <th> Gili Air </th>
                                    <th> Gili Meno </th>
                                    <th> Gili Trawangan </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center text-xs">
                                    <td class="align-top">
                                        @foreach ($tigapuluh as $melati)
                                        @if ($melati->room == 'Melati Ballroom')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$melati->color}}]">
                                            {{$melati->time}} <br>
                                            {{$melati->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluh as $pejanggik)
                                        @if ($pejanggik->room == 'Pejanggik')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$pejanggik->color}}]">
                                            {{$pejanggik->time}} <br>
                                            {{$pejanggik->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluh as $mandalika)
                                        @if ($mandalika->room == 'Mandalika')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                            {{$mandalika->time}} <br>
                                            {{$mandalika->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluh as $rinjani)
                                        @if ($rinjani->room == 'Rinjani Ballroom')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                            {{$rinjani->time}} <br>
                                            {{$rinjani->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluh as $air)
                                        @if ($air->room == 'Gili Air')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                            {{$air->time}} <br>
                                            {{$air->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluh as $meno)
                                        @if ($meno->room == 'Gili Meno')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                            {{$meno->time}} <br>
                                            {{$meno->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluh as $trawangan)
                                        @if ($trawangan->room == 'Gili Trawangan')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                            {{$trawangan->time}} <br>
                                            {{$trawangan->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div x-show="openTab === 4"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                    <th>Melati Ballroom</th>
                                    <th>Pejanggik</th>
                                    <th> Mandalika </th>
                                    <th> Rinjani Ballroom </th>
                                    <th> Gili Air </th>
                                    <th> Gili Meno </th>
                                    <th> Gili Trawangan </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center text-xs">
                                    <td class="align-top">
                                        @foreach ($tigapuluhsatu as $melati)
                                        @if ($melati->room == 'Melati Ballroom')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$melati->color}}]">
                                            {{$melati->time}} <br>
                                            {{$melati->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluhsatu as $pejanggik)
                                        @if ($pejanggik->room == 'Pejanggik')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$pejanggik->color}}]">
                                            {{$pejanggik->time}} <br>
                                            {{$pejanggik->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluhsatu as $mandalika)
                                        @if ($mandalika->room == 'Mandalika')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                            {{$mandalika->time}} <br>
                                            {{$mandalika->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluhsatu as $rinjani)
                                        @if ($rinjani->room == 'Rinjani Ballroom')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                            {{$rinjani->time}} <br>
                                            {{$rinjani->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluhsatu as $air)
                                        @if ($air->room == 'Gili Air')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                            {{$air->time}} <br>
                                            {{$air->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluhsatu as $meno)
                                        @if ($meno->room == 'Gili Meno')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                            {{$meno->time}} <br>
                                            {{$meno->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($tigapuluhsatu as $trawangan)
                                        @if ($trawangan->room == 'Gili Trawangan')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                            {{$trawangan->time}} <br>
                                            {{$trawangan->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div x-show="openTab === 5"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                    <th>Melati Ballroom</th>
                                    <th>Pejanggik</th>
                                    <th> Mandalika </th>
                                    <th> Rinjani Ballroom </th>
                                    <th> Gili Air </th>
                                    <th> Gili Meno </th>
                                    <th> Gili Trawangan </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center text-xs">
                                    <td class="align-top">
                                        @foreach ($satu as $melati)
                                        @if ($melati->room == 'Melati Ballroom')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$melati->color}}]">
                                            {{$melati->time}} <br>
                                            {{$melati->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($satu as $pejanggik)
                                        @if ($pejanggik->room == 'Pejanggik')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$pejanggik->color}}]">
                                            {{$pejanggik->time}} <br>
                                            {{$pejanggik->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($satu as $mandalika)
                                        @if ($mandalika->room == 'Mandalika')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                            {{$mandalika->time}} <br>
                                            {{$mandalika->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($satu as $rinjani)
                                        @if ($rinjani->room == 'Rinjani Ballroom')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                            {{$rinjani->time}} <br>
                                            {{$rinjani->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($satu as $air)
                                        @if ($air->room == 'Gili Air')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                            {{$air->time}} <br>
                                            {{$air->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($satu as $meno)
                                        @if ($meno->room == 'Gili Meno')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                            {{$meno->time}} <br>
                                            {{$meno->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="align-top">
                                        @foreach ($satu as $trawangan)
                                        @if ($trawangan->room == 'Gili Trawangan')
                                        <div class="border px-0 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                            {{$trawangan->time}} <br>
                                            {{$trawangan->title}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <span class="italic text-gray-500 text-xs">*tentative {{__('menu.atglance')}}</span>
</div>