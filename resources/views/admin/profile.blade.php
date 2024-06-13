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
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / myprofile' titlepage='My Profile' photo="{{ URL::to('/assets/profiles/' . $authUser['photo'])}}"></x-admin-nav>
        <div class="p-4">
            <h1 class="text-2xl font-bold mb-4 text-center">My Profile</h1>
            <div class="flex flex-row justify-center items-center space-x-10">
                <img class="w-40 rounded-full" src="{{ URL::to('/assets/profiles/' . $user->photo) }}" alt="profile" srcset="">
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
            <div>
                <a href="{{'/admin/editprofile/' . $user->id}}" class="flex justify-end m-10">
                    <div class="bg-peachy-brown hover:scale-95 text-slate-800 font-bold py-2 px-4 rounded">Update Profile</div>
                </a>
            </div>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>