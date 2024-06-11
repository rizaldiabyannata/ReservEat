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
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <h2 class="text-3xl text-center py-10 font-extrabold">My Profile</h2>
            <form action="/admin/myprofile" method="GET">
                @csrf
                <div class="mb-4">
                    <label for="firstName" class="block font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="border border-gray-400 p-2 w-full rounded-md" value="{{ $user->name }}" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block font-bold mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="border border-gray-400 p-2 w-full rounded-md" value="{{ $user->phone }}" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="border border-gray-400 p-2 w-full rounded-md" value="{{ $user->email }}" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="border border-gray-400 p-2 w-full rounded-md" value="{{ $user->password }}" required>
                </div>
                <div class="mb-4">
                    <label for="changePassword" class="block font-bold mb-2">Change Password</label>
                    <input type="password" id="changePassword" name="changePassword" class="border border-gray-400 p-2 w-full rounded-md">
                </div>
                <div class="mb-4">
                    <label for="confirmPassword" class="block font-bold mb-2">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="border border-gray-400 p-2 w-full rounded-md">
                </div>
                <div class="mb-4">
                    <label for="role" class="block font-bold mb-2">Role</label>
                    <select id="role" name="role" class="border border-gray-400 p-2 w-full rounded-md">
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="restaurant" {{ $user->role === 'restaurant' ? 'selected' : '' }}>User</option>
                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </form>
        </div>
    </div>
</body>

</html>