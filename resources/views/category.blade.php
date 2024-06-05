<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Category</title>
</head>

<body class="font-['Montserrat']">
    <x-nav-bar></x-nav-bar>
    <div class="p-4 sm:ml-32">
        <h2 class="text-3xl text-center py-10 font-extrabold">Category Restaurant</h2>
        <div class="p-4">
            <div class="grid grid-cols-3 grid-rows-3 gap-10">
                <a href="/restaurant/menu/Japanese">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_7.jpeg')] bg-cover transform transition-transform hover:scale-105 hover:-translate-y-2" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Japanese Restaurant</h3>
                    </div>
                </a>
                <a href="/restaurant/menu/Chinese">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_1.jpeg')] bg-cover transform transition-transform hover:scale-105 hover:-translate-y-2" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Chinese Restaurant</h3>
                    </div>
                </a>
                <a href="/restaurant/menu/Indonesian">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_2.jpeg')] bg-cover transform transition-transform hover:scale-105 hover:-translate-y-2" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Indonesian Restaurant</h3>
                    </div>
                </a>
                <a href="/restaurant/menu/Korean">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_3.jpeg')] bg-cover transform transition-transform hover:scale-105 hover:-translate-y-2" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Korean Restaurant</h3>
                    </div>
                </a>
                <a href="/restaurant/menu/Western">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_4.jpeg')] bg-cover transform transition-transform hover:scale-105 hover:-translate-y-2" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Western Restaurant</h3>
                    </div>
                </a>
                <a href="/restaurant/menu/Italian">
                    <div class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-md bg-[url('../asset/restaurantCategory/restaurantCategory_5.jpeg')] bg-cover transform transition-transform hover:scale-105 hover:-translate-y-2" style="image-rendering: pixelated;">
                        <h3 class="border border-gray-300 px-6 py-2 text-center rounded-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">Italian Restaurant</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
