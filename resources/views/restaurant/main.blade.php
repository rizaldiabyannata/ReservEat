<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReservEat - Restaurant Selection</title>
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
    <nav class="bg-peachy-brown h-16 flex flex-row justify-between items-center px-10 py-4 font-navbar">
        <div class="flex flex-row space-x-2 items-center">
            <img class="w-12" src="{{ asset('/assets/images/weblogo.png') }}" alt="logo">
            <h2 class="text-2xl font-bold">ReservEat</h2>
        </div>
        <div class="flex space-x-10 text-lg">
            <a class="hover:text-white" href="#">Login</a>
            <a class="hover:text-white" href="#">Register</a>
        </div>
    </nav>

    <div class="bg-dark-peach py-24 px-10 text-white text-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to ReservEat</h1>
        <p class="text-lg mb-8">Your ultimate destination to find the best dining experience..</p>
        <a href="#" class="bg-white text-peachy-brown hover:bg-gray-300 py-2 px-6 rounded-full font-semibold transition duration-300">Book a Table</a>
    </div>

    <div class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold mb-8 text-center">Choose Your Restaurant</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="restaurant-card">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant A</h3>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-white py-2 px-6 rounded-full font-semibold mt-4 inline-block">View Menu</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant B</h3>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-white py-2 px-6 rounded-full font-semibold mt-4 inline-block">View Menu</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="https://via.placeholder.com/300" alt="Restaurant" class="w-full">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Restaurant C</h3>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                <a href="#" class="bg-peachy-brown text-white py-2 px-6 rounded-full font-semibold mt-4 inline-block">View Menu</a>
            </div>
        </div>
    </div>

    <div class="bg-peachy-brown py-24 px-10 text-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">About Us</h2>
            <p class="text-lg mb-8 text-center">Tujuan dari website ini adalah untuk memudahkan Anda dalam mencari dan memesan tempat serta makanan di suatu restoran sehingga Anda dapat menikmati pelayanan lebih cepat. Kami memahami bahwa Anda mungkin memiliki jadwal yang padat dan tidak banyak waktu untuk memesan dan menunggu. Selain itu, jika Anda ingin mengatur acara grup di sebuah restoran, kami siap membantu Anda dengan menyediakan layanan yang cepat dan efisien.</p>
            <a href="#" class="bg-white text-peachy-brown hover:bg-gray-300 py-2 px-6 rounded-full font-semibold transition duration-300">Learn More</a>
        </div>
    </div>

    <footer class="bg-dark-peach py-6 px-10 text-white text-center">
        <p>&copy; 2024 ReservEat. All rights reserved.</p>
    </footer>

</body>

</html>
