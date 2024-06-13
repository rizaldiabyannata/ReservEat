<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Restaurant Detail</title>
</head>

<body class="font-['Montserrat'] bg-gray-100">
    <x-nav-bar></x-nav-bar>
    <div class="container mx-auto py-8 px-4 md:px-8 lg:px-16">
        <!-- Restaurant Details -->
        <div class="bg-white my-40 p-4 rounded-lg shadow-md">
            <div class="flex flex-col lg:flex-row">
                <img src="{{ URL::to('/assets/restaurantPhoto/' . $restaurant['photo_path'])}}" alt="Restaurant Image" class="w-full lg:w-1/2 rounded-lg mb-6 lg:mb-0 lg:mr-6">
                <div>
                    <h2 class="text-3xl font-bold mb-4">{{$restaurant['name']}}</h2>
                    <p class="text-gray-700 mb-2"><strong>Address: </strong>{{$restaurant['address']}}</p>
                    <p class="text-gray-700 mb-4"><strong>Rating: </strong>4.5/5</p>
                    <h3 class="text-2xl font-semibold mb-2">Bio Restaurant</h3>
                    <p class="text-gray-700 mb-4">Welcome to <strong>{{$restaurant['name']}}</strong>, where we offer a delightful culinary journey through <span>{{$category['category_name']}}</span> cuisine. Our restaurant is renowned for its <span>{{$category['description']}}</span> providing a memorable dining experience for all our guests.</p>
                    <a href="{{ url('/restaurants/' . $restaurant['id'] . '/reservation') }}" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">Make a Reservation</a>
                </div>
            </div>
        </div>

        <!-- Menu Table -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h3 class="text-2xl font-semibold mb-4">Menu</h3>
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Menu Item</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2"><img class="w-32 h-32 object-cover rounded-lg" src="{{ URL::to('/assets/restaurantMenu/' . $menu->path_photo_menu)}}" alt="Menu Photo"></td>
                        <td class="border px-4 py-2">{{$menu->name}}</td>
                        <td class="border px-4 py-2">{{$menu->description}}</td>
                        <td class="border px-4 py-2">Rp.{{$menu->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Customer Reviews -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-20">
            <h3 class="text-2xl font-semibold mb-4">Customer Reviews</h3>
            @foreach($reviews as $review)
            <div class="collapse collapse-arrow bg-base-200 mb-4">
                <input type="radio" name="my-accordion-2" id="review1" checked />
                <div class="collapse-title flex justify-between items-center">
                    <span class="text-xl font-medium">{{ $review->user->name }}</span>
                    <span class="text-gray-700">Rating: {{$review->rating}}/5</span>
                </div>
                <div class="collapse-content">
                    <p>{{$review->review_text}}</p>
                </div>
            </div>
            @endforeach
        </div>
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