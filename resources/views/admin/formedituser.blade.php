<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>Form Update User</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / edituser / form' titlepage='Form Update'></x-admin-nav>
        <div class="px-4">
            <div class="flex items-center justify-center p-12">
                <div class="w-full xl:w-2/3 lg:w-3/4 md:w-4/5 sm:w-full xs:w-full pb-10">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <form method="POST" action="{{ '/admin/edituser/form/' . $user->id }}">
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-wrap mb-6">
                                <label for="name" class="block text-black text-sm font-bold mb-2">Name:</label>
                                <input type="text" id="name" name="name" value="{{ $user->name }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="email" class="block text-black text-sm font-bold mb-2">Email:</label>
                                <input type="email" id="email" name="email" value="{{ $user->email }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="phone" class="block text-black text-sm font-bold mb-2">Phone:</label>
                                <input type="tel" id="phone" name="phone" value="{{ $user->phone }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="role" class="block text-black text-sm font-bold mb-2">Role:</label>
                                <select id="role" name="role" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                                    <option value="">Select Role</option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="restaurant" {{ $user->role == 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                                    <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>Customer</option>
                                </select>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="password" class="block text-black text-sm font-bold mb-2">Password:</label>
                                <input type="password" value="{{ $user->password }}" id="password" name="password" class="w-full border border-black rounded-md p-2 text-sm text-black">
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>