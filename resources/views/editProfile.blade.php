<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>My Profile</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar-customer></x-side-bar-customer>
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <h2 class="text-3xl text-center py-10 font-extrabold">My Profile</h2>
            <form action="/profile/edit" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="photo" class="block font-bold mb-2">Photo Profile</label>
                    <input type="file" id="photoProfile" name="photo" class="file-input file-input-bordered file-input-md w-full max-w-xs" />
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                    <input name="name" type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Nama" value="{{$user->name}}">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                    <input name="phone" type="tel" class="w-full p-2 border border-gray-300 rounded-md" placeholder="111-111-111" value="{{$user->phone}}">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input name="email" type="email" class="w-full p-2 border border-gray-300 rounded-md" placeholder="email@gmail.com" value="{{$user->email}}">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Change Password</label>
                    <input name="password" type="password" class="w-full p-2 border border-gray-300 rounded-md" placeholder="New Password">
                </div>
                <div class="mb-4">
                    <label for="confirm-password" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                    <input name="confirm-password" type="password" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Confirm New Password">
                </div>
                <button type="submit" class="bg-gray-800 px-4 rounded font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-700">Save</button>
            </form>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>