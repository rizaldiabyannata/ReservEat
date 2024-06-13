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
        <img class="blur-[1px]" src="{{ asset('/assets/images/banner.jpg') }}" alt="">
        <div class="fixed bg-slate-300 top-[23%] right-24 w-[60vw] z-10 flex justify-center rounded-xl flex-col">
            <div>
                <h2 class="text-3xl text-center py-4 font-extrabold">My Profile</h2>
                <div class="flex justify-center mb-4">
                    <img class="inline-block h-40 w-40 rounded-full ring-2 ring-white" src="{{ URL::to('/assets/profiles/' . $user->photo)}}" alt="Profile Picture">
                </div>
            </div>
            <div class="w-full flex flex-col px-60">
                <div class="mb-4 flex items-center">
                    <label class="block font-bold mr-2 w-40">Name :</label>
                    <span id="name" class="border-none">{{$user->name}}</span>
                </div>
                <div class="mb-4 flex items-center">
                    <label class="block font-bold mr-2 w-40">Phone Number :</label>
                    <span id="phone" class="border-none">{{$user->phone}}</span>
                </div>
                <div class="mb-4 flex items-center">
                    <label class="block font-bold mr-2 w-40">Email :</label>
                    <span id="email" class="border-none">{{$user->email}}</span>
                </div>
            </div>
            <div class="text-center mb-6">
                <a href="/profile/edit" class="bg-gray-800 px-4 rounded font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-700">Edit Profile</a>
            </div>
        </div>
    </div>
</body>

</html>