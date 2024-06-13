<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Restaurant List</title>
</head>

<body class="font-['Montserrat'] bg-gray-100">
    <x-nav-bar></x-nav-bar>
    @if (request()->is('restaurants/*'))
    <h1 class="text-3xl pt-32 font-bold mb-8 text-center text-gray-800">Restaurants in {{ $category->category_name }}</h1>
    @else
    <h2 class="text-3xl pt-32 font-bold mb-8 text-center text-gray-800">Choose Your Restaurant</h2>
    @endif
    @if (request()->is('restaurants/*'))
    <a href="/category" class="bg-peachy-brown mx-16 text-black py-2 px-6 rounded-full font-semibold inline-block cursor-pointer">Back</a>
    @endif
    <div class="mb-20 mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-8 lg:px-16">
        @foreach($restaurants as $restaurant)
        <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
            <img src="{{ URL::to('/assets/restaurantPhoto/' . $restaurant['photo_path'])}}" alt="Restaurant" class="w-full h-44 object-cover border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">{{$restaurant['name']}}</h3>
                <p class="text-gray-700 mb-4">{{$restaurant['address']}}</p>
                <p class="text-gray-700"><span>Open Time: </span><span>{{$restaurant['open_time']}}</span></p>
                <p class="text-gray-700 mb-4"><span>Close Time: </span><span>{{$restaurant['close_time']}}</span></p>
                <a href="{{ url('/restaurants/' . $restaurant['id'] . '/detail') }}" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block cursor-pointer">View Detail</a>
            </div>
        </div>
        @endforeach
    </div>
    <footer class="footer p-10 bg-[#FAE8DC] text-black">
        <aside>
            <img class="w-16" src="{{ asset('/assets/images/weblogo.png') }}" alt="" srcset="">
            <p>ReservEat<br>Providing reliable reservation online since 2024</p>
        </aside>
        <nav>
            <h6 class="footer-title">Social</h6>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </nav>
    </footer>
    <div>
        <p class="bg-[#22262A] text-white text-center py-4">&copy; 2024 ReservEat. All rights reserved.</p>
    </div>
</body>

</html>