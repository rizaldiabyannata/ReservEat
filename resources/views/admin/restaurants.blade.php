<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Users</title>
</head>

<!-- #8739f9 -->
<!-- #37B9F1 -->
<!-- #F2F5F5 -->

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <div class="px-2">
            <x-admin-nav router='admin / restaurants' titlepage='Restaurants'></x-admin-nav>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded border border-gray-400 bg-[#8739f9]">
                    <div class="w-full flex flex-row justify-between px-10">
                        <div class="flex flex-col">
                            <p class="text-xs text-white">Jumlah Reservation Today</p>
                            <h4 class="text-2xl text-white">4</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-12 h-12">
                            <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center justify-center h-24 rounded border border-gray-400 bg-[#8739f9]">
                    <div class="w-full flex flex-row justify-between px-10">
                        <div class="flex flex-col">
                            <p class="text-xs text-white">Jumlah Restaurant</p>
                            <h4 class="text-2xl text-white">{{ @count($restaurantsWithRatings)}}</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-12 h-12">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class="overflow-x-auto sm:rounded-lg py-4">
                <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white ">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for users">
                    </div>
                </div>
                <table class="w-full text-sm text-left rounded-lg">
                    <thead class="text-xs text-white uppercase bg-[#8739f9]">
                        <tr>
                            <th scope="col" class="px-6 py-4 rounded-tl-lg">Nama</th>
                            <th scope="col" class="px-6 py-4">Alamat</th>
                            <th scope="col" class="px-6 py-4">Nomor HP</th>
                            <th scope="col" class="px-6 py-4">Rating</th>
                            <th scope="col" class="px-6 py-4 rounded-tr-lg">Jumlah Reservation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurantsWithRatings as $restaurant)
                        <tr class="border-b bg-white text-black hover:bg-[#F2F5F5]">
                            <td class="px-6 py-4">{{ $restaurant->name }}</td>
                            <td class="px-6 py-4">{{ $restaurant->address }}</td>
                            <td class="px-6 py-4">{{ $restaurant->phone_number }}</td>
                            <td class="px-6 py-4">{{ $restaurant->average_rating = round($restaurant->average_rating, 1); }}</td>
                            <td class="px-6 py-4">{{ $restaurant['reservations_today'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>