<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Profile</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar-customer></x-side-bar-customer>
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <h2 class="text-3xl text-center py-10 font-extrabold">My Profile</h2>
            <div class="flex justify-center mb-4">
                <img class="inline-block h-40 w-40 rounded-full ring-2 ring-white" src="https://s1.zerochan.net/Anya.Forger.600.3690794.jpg" alt="Profile Picture">
            </div>
            <div class="mb-4 flex items-center">
                <label class="block font-bold mr-2 w-32">Name:</label>
                <span id="name" class="border-none">Anya</span>
            </div>
            <div class="mb-4 flex items-center">
                <label class="block font-bold mr-2 w-32">Phone Number:</label>
                <span id="phone" class="border-none">123-456-7890</span>
            </div>
            <div class="mb-4 flex items-center">
                <label class="block font-bold mr-2 w-32">Email:</label>
                <span id="email" class="border-none">anya@gmail.com</span>
            </div>
            <div class="text-center">
                <a href="/profile/editprofile" class="bg-gray-800 text-white px-4 py-2 rounded font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-700">Edit Profile</a>
            </div>
        </div>
    </div>
</body>

</html>