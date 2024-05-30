<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Profile</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / myprofile' titlepage='My Profile'></x-admin-nav>
        <div class="p-4">
            <h1 class="text-2xl font-bold mb-4 text-center">My Profile</h1>
            <div class="flex flex-row justify-center items-center space-x-10">
                <div class="w-32">
                    <img class='rounded-lg' src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
                <div class="flex flex-row space-x-6">
                    <div class="mb-4">
                        <label class="block font-bold mb-2">Name</label>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold mb-2">Phone Number</label>
                        <p>{{ $user->phone }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold mb-2">Email</label>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold mb-2">Role</label>
                        <p>{{ ucfirst($user->role) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>