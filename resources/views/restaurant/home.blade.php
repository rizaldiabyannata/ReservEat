<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    @vite('resources/css/app.css')
    @vite('resources/css/soft-ui-dashboard-tailwind.css')
</head>

<!-- #FB8A22 -->
<!-- #22262A -->
<!-- #878F99 -->
<!-- #FAE8DC -->

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <x-side-bar-resto></x-side-bar-resto>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-resto-nav></x-resto-nav>
        <div class="w-full px-6 py-6 mx-auto">
            <div class="grid grid-cols-4 gap-4">
                <div class="flex flex-row rounded-xl py-4 px-2 shadow-sm bg-white space-x-4 justify-center items-center">
                    <h2 class="text-lg text-black m-0">Reservation: </h2>
                    <p class="text-3xl text-black m-0 font-bold">{{@count($reservations)}}</p>
                </div>
                <div class="flex flex-row rounded-xl py-4 px-4 shadow-sm bg-white space-x-4 justify-center items-center">
                    <h2 class="text-lg text-black m-0">Menu:</h2>
                    <p class="text-3xl text-black m-0 font-bold">{{@count($menus)}}</p>
                </div>
                <div class="flex flex-row rounded-xl py-4 px-4 shadow-sm bg-white space-x-4 justify-center items-center">
                    <h2 class="text-lg text-black m-0">Rating: </h2>
                    <p class="text-3xl text-black m-0 font-bold">5</p>
                </div>
                <div class="flex flex-row rounded-xl py-4 px-4 shadow-sm bg-white space-x-4 justify-center items-center">
                    <h2 class="text-lg text-black m-0">Reviews: </h2>
                    <p class="text-3xl text-black m-0 font-bold">5</p>
                </div>
            </div>
            <div class="flex flex-wrap my-6 -mx-3">
                <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                            <div class="flex flex-wrap mt-0 -mx-3">
                                <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                    <h6>Reservations Table</h6>
                                    <p class="mb-0 leading-normal text-sm">
                                        <i class="fa fa-check text-cyan-500"></i>
                                        <span class="ml-1 font-semibold">24 </span>
                                        bulan ini
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto p-6 px-4 pb-2">
                            <div class="overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Nama Customer</th>
                                            <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">nomor meja</th>
                                            <th class="px-6 py-3 pl-2 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">status pembbayaran</th>
                                            <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reservations as $reservation)
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center w-full items-center">
                                                        <h6 class="mb-0 leading-normal text-sm">{{$reservation->user_name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                                <div class="flex flex-col justify-center w-full items-center">
                                                    <span class="font-semibold leading-tight text-xs">{{$reservation->table_number}}</span>
                                                </div>
                                            </td>
                                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                                <span class="font-semibold leading-tight text-xs">{{$reservation->status}}</span>
                                            </td>
                                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                                <span class="font-semibold leading-tight text-xs">{{$reservation->price}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                            <h6>Reviews User</h6>
                            <p class="leading-normal text-sm">
                                <span class="font-semibold">Reviews Bulan Ini</span>
                            </p>
                        </div>
                        <div class="flex-auto p-4">
                            @foreach($reviews as $review)
                            <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                        <i class="relative z-10 text-transparent ni leading-none ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                    </span>
                                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                        <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700"> {{ $review->user->name }}</h6>
                                        <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">{{$review->review_text}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<!-- plugin for charts  -->
<script src="{{asset('js/plugins/chartjs.min.js')}}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="{{asset('js/soft-ui-dashboard-tailwind.js?v=1.0.5')}}" async></script>

</html>