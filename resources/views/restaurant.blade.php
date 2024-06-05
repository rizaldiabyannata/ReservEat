<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>Restaurant List</title>
</head>

<body class="font-['Montserrat'] bg-gray-100">
    <x-nav-bar></x-nav-bar>
    <h2 class="text-3xl p-6 font-bold mb-8 text-center text-gray-800">Choose Your Restaurant</h2>
    <div id="carousel" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-8 lg:px-16">
        <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant A</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="/restaurant/restaurantdetails" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">View Detail</a>
            </div>
        </div>
        <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant B</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">View Detail</a>
            </div>
        </div>
        <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant C</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">View Detail</a>
            </div>
        </div>
        <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant D</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">View Detail</a>
            </div>
        </div>
        <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant E</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">View Detail</a>
            </div>
        </div>
        <div class="restaurant-card bg-white rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-2">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant F</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">View Detail</a>
            </div>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>