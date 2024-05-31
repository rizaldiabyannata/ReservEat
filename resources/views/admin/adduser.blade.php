<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Add User</title>
</head>
<x-side-bar></x-side-bar>
<div class="ml-64">
    <x-admin-nav router='admin / adduser' titlepage='Add User'></x-admin-nav>
    <div class="p-4">
        <div class="container mx-auto p-4 pt-6 md:p-6 md:pt-12">
            <div class="bg-white rounded-lg p-4">
                <form action="/admin/adduser" method="POST">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" id="name" class="block w-full p-2 pl-4 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="name" required>
                            @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" class="block w-full p-2 pl-4 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="email" required>
                            @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                            <input type="password" id="password" class="block w-full p-2 pl-4 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="password" required>
                            @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
                            <input type="password" id="password_confirmation" class="block w-full p-2 pl-4 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">Phone</label>
                            <input type="number" id="phone" class="block w-full p-2 pl-4 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="phone" required>
                            @error('phone')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-700">Role</label>
                            <select id="role" class="block w-full p-2 pl-4 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="role" required>
                                <option value="">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="customer">User</option>
                            </select>
                            @error('role')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-[#8739f9] text-white hover:bg-[#7849d8] focus:ring-4 focus:outline-none focus:ring-[#7849d8] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create User</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<body>

</body>

</html>