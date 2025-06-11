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
                                    <td>07.00-Finish <br>
                                        Workshop KODI
                                        Onkologi <br>
                                        WS Basic Surgical Skill (BSS) <br>
                                        "Core Biopsi dan USG"
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" text-center">
                                    <td rowspan="3" class="text-xs">07.00-Finish <br>
                                        Workshop KODI
                                        Onkologi <br>
                                        WS Basic Surgical Skill (BSS) <br>
                                        "Core Biopsi dan USG"
                                    </td>
                                    <td rowspan="3" class="text-xs">Workshop KODI Onkologi <br>
                                        Live surgery Head and Neck Oncology
                                    </td>
                                    <td class="text-xs">
                                        08.00 - 12.00 <br>
                                        Workshop KODI
                                        Laring Faring
                                    </td>
                                    <td class="text-xs">
                                        08.00 - 12.00 <br>
                                        Workshop KODI
                                        Otologi <br>
                                        Ballon Tuboplasty
                                    </td>
                                    <td class="text-xs">
                                        08.00 - Finish <br>
                                        Workshop KODI
                                        Neurotologi
                                    </td>
                                    <td class="text-xs">
                                        08.00 - 12.00 <br>
                                        Workshop KODI
                                        Otologi <br>
                                        CT-Scan
                                    </td>
                                    <td>SET-UP</td>
                                    <td class="text-xs">
                                        08.00 - 12.00 <br>
                                        Workshop KODI <br>
                                        FPR
                                    </td>
                                    <td class="text-xs">
                                        08.00 - 14.00 <br>
                                        KODI Alergi
                                        Imunologi
                                    </td>
                                </tr>

                                <tr class="text-center bg-perhati-100">

                                    <td colspan="8">12.00 - 13.00
                                        LUNCH</td>
                                </tr>
                                <tr class=" text-center">

                                    <td class="text-xs">
                                        15.00 - 17.00 <br>
                                        Rapat Kodi Laring Faring
                                    </td>
                                    <td class="text-xs">
                                        13.00 - 17.00 <br>
                                        Workshop KODI
                                        Bronkologi
                                        Esofagologi
                                    </td>
                                    <td class="text-xs">
                                        13.00 - Finish <br>
                                        Rapat
                                        Kodi Neurotologi
                                    </td>
                                    <td class="text-xs">
                                        13.00 - 17.00 <br> Workshop KODI Rinologi
                                    </td>
                                    <td>SET-UP</td>
                                    <td class="text-xs">
                                        13.00 - Finish <br>
                                        Rapat
                                        KODI FPR

                                    </td>
                                    <td class="text-xs">
                                        14.00 - 17.00 <br>
                                        Workshop PGPKT
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
                                <tr class="text-xs text-center">
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 1
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 2
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 3
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        (RE-REGISTRATION)
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 4
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 5
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 6
                                    </td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        08.00 - 09.00 <br>
                                        Plenary 1 <br>
                                        KOPMAS
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        09.00 - 09.30 <br>
                                        Opening Ceremony
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>
                                <tr class="text-center text-xs bg-perhati-100">
                                    <td class="border-2" colspan="7">09.30 - 10.00 <br>
                                        Exhibition & Coffee Break</td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        10.00 - 11.00 <br>
                                        Plenary 2 <br>
                                        Ketua PP
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        11.00 - 12.00 <br>
                                        Lunch Symposium 1
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>
                                <tr class="text-center text-xs bg-perhati-100">
                                    <td class="border-2" colspan="7">12.00 - 13.00 <br>
                                        LUNCH </td>
                                </tr>
                                <tr class="text-center text-xs ">
                                    <td class="border-2" class="border-2">13.00 - 14.00 <br>
                                        SS 1 <br>
                                        Kodi Neurotologi</td>
                                    <td class="border-2">13.00 - 14.00 <br>
                                        SS 2 <br>
                                        Kodi Rinologi</td>
                                    <td class="border-2">13.00 - 14.00 <br>
                                        SS 3 <br>
                                        Kodi Alergi Imunologi</td>
                                    <td class="border-2">13.00 - 14.00 <br>
                                        SS 4 <br>
                                        Interbat
                                    </td>
                                    <td class="border-2">13.00 - 14.00 <br>
                                        SS 5 <br>
                                        Otologi</td>
                                    <td class="border-2">13.00 - 14.00 <br> Accepted Paper 1</td>
                                    <td class="border-2">13.00 - 14.00 <br>
                                        Accepted Paper 2</td>
                                </tr>
                                <tr class="text-center text-xs bg-perhati-100">
                                    <td class="border-2" colspan="7">12.00 - 13.00 <br>
                                        LUNCH </td>
                                </tr>
                                <tr class="text-center text-xs ">
                                    <td class="border-2" class="border-2">
                                        14.30 - Finish <br>
                                        PGPKT
                                    </td>
                                    <td class="border-2">
                                        14.30 - Finish <br>
                                        Rapat <br>
                                        Kodi Onkologi
                                    </td>
                                    <td class="border-2">
                                        14.30 - Finish <br>
                                        Rapat KODI <br>
                                        THT Komunitas
                                    </td>
                                    <td class="border-2">14.30 - Finish <br>
                                        RAPAT ADART
                                    </td>
                                    <td class="border-2">14.30 - Finish <br>
                                        Rapat KODI
                                        Alergi </td>
                                    <td class="border-2">14.30 - 15.30 <br>
                                        Rapat KODI <br>
                                        Rinologi
                                    </td>
                                    <td class="border-2">14.30 - 15.30 <br>
                                        Rapat KODI <br>
                                        Bronkologi <br>
                                        Esofagologi</td>
                                </tr>
                                <tr class="text-center text-xs bg-perhati-200">
                                    <td class="border-2" colspan="7">18.30 - 22.00 <br>
                                        GALA DINNER (Hotel Lombok Raya) </td>
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
                                <tr class="text-xs text-center">
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 7
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 8
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 9
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        (RE-REGISTRATION)
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        Yayasan Karya Asih
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 10
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 11
                                    </td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        08.00 - 10.00 <br>
                                        Plenary 3 <br>
                                        JKN & Hospital
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>

                                <tr class="text-center text-xs bg-perhati-100">
                                    <td class="border-2" colspan="7">10.00 - 10.30 <br>
                                        Exhibition & Coffee Break</td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2">10.30 - 11.30 <br>
                                        SS 6 <br>
                                        Kodi THT Komunitas</td>
                                    <td class="border-2">10.30 - 11.30 <br>
                                        SS 7 <br>
                                        Kodi Bronkologi</td>
                                    <td class="border-2">
                                        10.30 - 11.30 <br>
                                        SS 8 <br>
                                        FPR
                                    </td>
                                    <td class="border-2">
                                        10.30 - 11.30 <br>
                                        SS 9 <br>
                                        Dexa Medica

                                    </td>
                                    <td class="border-2">10.30 - 11.30 <br>
                                        SS 10 <br>
                                        Kolaboratif Kodi</td>
                                    <td class="border-2">11.00 - 12.00</td>
                                    <td class="border-2">
                                        11.00 - 12.00 <br>
                                        RAPAT KODI <br> LARING
                                        FARING
                                    </td>
                                </tr>

                                <tr class="text-center text-xs bg-perhati-100">
                                    <td class="border-2" colspan="7">11.30 - 13.30 <br>
                                        LUNCH - FRIDAY PRAYER </td>
                                </tr>
                                <tr class="text-center text-xs ">
                                    <td class="border-2" class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">13.30 - 15.00 <br>
                                        RAPAT ADART
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>

                                <tr class="text-center text-xs ">
                                    <td class="border-2" class="border-2">

                                    </td>
                                    <td class="border-2">

                                    </td>
                                    <td class="border-2">

                                    </td>
                                    <td class="border-2">15.00 - Finish <br>
                                        RAPAT PLENO
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                    </td>
                                    <td class="border-2"></td>
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
                                <tr class="text-xs text-center">
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 12
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 13
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 14
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        (RE-REGISTRATION)
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 15
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        FP 16
                                    </td>
                                    <td class="border-2">
                                        07.00 - 08.00 <br>
                                        LPK
                                    </td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2">09.00 - 10.00 <br>
                                        SS 11 <br>
                                        Kodi Onkolog</td>
                                    <td class="border-2">09.00 - 10.00 <br>
                                        SS 12 <br>
                                        Kodi Laring Faring</td>
                                    <td class="border-2">
                                        09.00 - 10.00 <br>
                                        SS 13 <br>
                                        Kolaboratif Kodi
                                    </td>
                                    <td class="border-2">
                                        09.00 - 10.00 <br>
                                        SS 14 <br>
                                        Kolaboratif Kodi

                                    </td>
                                    <td class="border-2">09.00 - 10.00 <br>
                                        Final Free Paper <br> (case report)</td>
                                    <td class="border-2">09.00 - 10.00 <br>
                                        Final Free Paper <br> (research)</td>
                                    <td class="border-2">
                                        09.00 - 10.00 <br>
                                        Accepted Paper 3
                                    </td>
                                </tr>

                                <tr class="text-center text-xs bg-perhati-100">
                                    <td class="border-2" colspan="7">10.00 - 10.30 <br>
                                        Coffee Break</td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        10.00 - 11.00 <br>
                                        Plenary 4 <br>
                                        Kolegium
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        11.00 - 12.00 <br>
                                        Plenary 5 <br>
                                        Pelayanan THT-BKL berbasis Kompetensi dan Etika
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>
                                <tr class="text-center text-xs">
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2">
                                        12.00 - 12.30 <br>
                                        Closing
                                    </td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                    <td class="border-2"></td>
                                </tr>


                                <tr class="text-center text-xs bg-perhati-100">
                                    <td class="border-2" colspan="7">12.30 - 13.30 <br>
                                        LUNCH </td>
                                </tr>
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>