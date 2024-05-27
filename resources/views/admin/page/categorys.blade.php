<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Categorys</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="sm:ml-64">
        <x-admin-nav router='admin / categorys' titlepage='Categorys'></x-admin-nav>
        <div class="p-4">
            <div class="grid grid-cols-3 grid-rows-3 gap-10">
                <a href="/admin/category/japanese">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_7.jpeg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Japanese Restaurant</h3>
                    </div>
                </a>
                <a href="">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_1.jpeg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Korean Restaurant</h3>
                    </div>
                </a>
                <a href="">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_2.jpeg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Nusantara Restaurant</h3>
                    </div>
                </a>
                <a href="">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_3.jpeg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Indian Restaurant</h3>
                    </div>
                </a>
                <a href="">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_4.jpeg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Western Restaurant</h3>
                    </div>
                </a>
                <a href="">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_5.jpeg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Italian Restaurant</h3>
                    </div>
                </a>
                <a href="">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_6.jpeg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Mexican Restaurant</h3>
                    </div>
                </a>
                <a href="">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_8.jpg')] bg-cover hover:scale-105 transition duration-300 ease-in-out" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Arabian Restaurant</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>