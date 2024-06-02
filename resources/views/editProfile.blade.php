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
            <form action="/editprofile" method="GET">
                @csrf
                <div class="mb-4">
                    <label for="photoProfile" class="block font-bold mb-2">Photo Profile</label>
                    <input type="file" id="photoProfile" name="photoProfile" class="file-input file-input-bordered file-input-md w-full max-w-xs" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Nama</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Nama">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Phone Number</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="111-111-111">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="email@gmail.com">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Change Password</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="new password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="new password again">
                </div>
                <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-700">Save</button>
            </form>
        </div>
    </div>
</body>

</html>