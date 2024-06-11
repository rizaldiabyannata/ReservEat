<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReservEat - Restaurant Selection</title>
    @notifyCss
    @vite('resources/css/app.css')
    <style>
        .bg-peachy-brown {
            background-color: #F5D0A9;
        }

        .bg-dark-peach {
            background-color: #E7A977;
        }
    </style>
</head>

<body class="font-content">
    <x-nav-bar></x-nav-bar>
    <div class="h-[80lvh] text-white text-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1481833761820-0509d3217039?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTh8fHJlc3RhdXJhbnR8ZW58MHx8MHx8fDA%3D');">
        <div class="h-full flex flex-col justify-center items-center backdrop-blur-sm rounded-lg">
            <h1 class="text-5xl font-bold mb-4" style="-webkit-text-stroke: 2px black;">Welcome to ReservEat</h1>
            <p class="text-lg mb-8">Your ultimate destination to find the best dining experience..</p>
            <a href="/restaurant" class="bg-peachy-brown text-black hover:bg-stone-500 hover:text-white py-2 px-6 rounded-full font-semibold transition duration-300">Book a Table</a>
        </div>
    </div>

    <div class="carousel w-full py-6">
        <div id="item1" class="carousel-item w-full">
            <img src="{{ asset('/assets/images/Banner-1.png') }}" class="w-full" />
        </div>
        <div id="item2" class="carousel-item w-full">
            <img src="{{ asset('/assets/images/Banner-2.png') }}" class="w-full" />
        </div>
        <div id="item3" class="carousel-item w-full">
            <img src="{{ asset('/assets/images/Banner-3.png') }}" class="w-full" />
        </div>
        <div id="item4" class="carousel-item w-full">
            <img src="{{ asset('/assets/images/Banner-4.png') }}" class="w-full" />
        </div>
    </div>
    <div class="flex justify-center w-full py-2 gap-2">
        <a href="#item1" class="btn btn-xs">1</a>
        <a href="#item2" class="btn btn-xs">2</a>
        <a href="#item3" class="btn btn-xs">3</a>
        <a href="#item4" class="btn btn-xs">4</a>
    </div>

    <div class="container mx-auto py-16 px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">Choose Your Restaurant</h2>
        <div id="carousel" class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
                <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Restaurant A</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                    <a href="/restaurant/restaurantdetails" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold mt-4 inline-block">View Detail</a>
                </div>
            </div>
            <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
                <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Restaurant B</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                    <a href="#" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold mt-4 inline-block">View Detail</a>
                </div>
            </div>
            <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
                <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Restaurant C</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                    <a href="#" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold mt-4 inline-block">View Detail</a>
                </div>
            </div>
        </div>

        <div class="bg-peachy-brown py-24 px-10 text-black">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">About Us</h2>
                <p class="text-lg mb-8 text-center">Tujuan dari website ini adalah untuk memudahkan Anda dalam mencari dan memesan tempat serta makanan di suatu restoran sehingga Anda dapat menikmati pelayanan lebih cepat. Kami memahami bahwa Anda mungkin memiliki jadwal yang padat dan tidak banyak waktu untuk memesan dan menunggu. Selain itu, jika Anda ingin mengatur acara grup di sebuah restoran, kami siap membantu Anda dengan menyediakan layanan yang cepat dan efisien.</p>
            </div>
        </div>
    </div>
    <footer class="bg-dark-peach py-6 px-10 text-black text-center">
        <p>&copy; 2024 ReservEat. All rights reserved.</p>
    </footer>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>