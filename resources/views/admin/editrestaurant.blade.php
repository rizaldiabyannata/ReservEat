<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Restaurants Edit</title>
</head>

<body>
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / editrestaurant' titlepage='Edit Restaurant' photo="{{ URL::to('/assets/profiles/' . $authUser['photo'])}}"></x-admin-nav>
        <div class="px-4">
            <div class="container mx-auto p-4">
                <div class="overflow-x-auto sm:rounded-lg">
                    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white ">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search-restaurants" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for restaurants">
                        </div>
                    </div>

                    <table class="w-full text-sm text-left rounded-lg">
                        <thead class="text-xs text-slate-800 uppercase bg-slate-200">
                            <tr>
                                <th scope="col" class="px-6 py-4 rounded-tl-lg">Nama</th>
                                <th scope="col" class="px-6 py-4">Alamat</th>
                                <th scope="col" class="px-6 py-4">Nomor HP</th>
                                <th scope="col" class="px-6 py-4 rounded-tr-lg">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($restaurantsWithRatings as $restaurant)
                            <tr class="border-b bg-white text-black hover:bg-[#F2F5F5]">
                                <td class="px-6 py-4">{{ $restaurant['name'] }}</td>
                                <td class="px-6 py-4">{{ $restaurant['address'] }}</td>
                                <td class="px-6 py-4">{{ $restaurant['phone_number'] }}</td>
                                <td class="px-6 py-4 flex flex-row space-x-2">
                                    <a href="{{'/admin/editrestaurant/form/'. $restaurant['id']}}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-slate-800 bg-peachy-brown hover:bg-[#7849d8]">
                                        Edit
                                    </a>

                                    <form action="{{ url('/admin/restaurant/delete/'. $restaurant->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-500 hover:bg-red-600">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>