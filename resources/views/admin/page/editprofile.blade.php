<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Profile</title>
</head>

<!-- #8739f9 -->
<!-- #37B9F1 -->
<!-- #F2F5F5 -->

<body>
    <x-side-bar></x-side-bar>
    <div class="sm:ml-64">
        <x-admin-nav router='admin / editprofile' titlepage='Edit Profile'></x-admin-nav>
        <div class="p-4">
            <div class="container mx-auto p-4 pt-6 md:p-6 md:pt-12">
                <div class="bg-white rounded-lg p-4">
                    <form action="" method="POST">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                                <label for="full-name" class="block mb-2 text-sm font-medium text-[#333333]">Full Name</label>
                                <input type="text" id="full-name" class="block w-full p-2 text-sm text-[#333333] bg-[#F7F7F7] border border-[#CCCCCC] rounded-lg focus:ring-[#8739f9] focus:border-[#7849d8]" name="full_name" value="{{ $user->name }}" required>
                            </div>

                            <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                                <label for="email" class="block mb-2 text-sm font-medium text-[#333333]">Email</label>
                                <input type="email" id="email" class="block w-full p-2 text-sm text-[#333333] bg-[#F7F7F7] border border-[#CCCCCC] rounded-lg focus:ring-[#8739f9] focus:border-[#7849d8]" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                                <label for="password" class="block mb-2 text-sm font-medium text-[#333333]">Password</label>
                                <input type="password" id="password" class="block w-full p-2 text-sm text-[#333333] bg-[#F7F7F7] border border-[#CCCCCC] rounded-lg focus:ring-[#8739f9] focus:border-[#7849d8]" name="password" value="{{ $user->password }}" required>
                            </div>

                            <div class="w-full md:w-1/2 xl:w-1/2 px-3">
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-[#333333]">Confirm Password</label>
                                <input type="password" id="password_confirmation" class="block w-full p-2 text-sm text-[#333333] bg-[#F7F7F7] border border-[#CCCCCC] rounded-lg focus:ring-[#8739f9] focus:border-[#7849d8]" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-[#8739f9] text-white hover:bg-[#7849d8] focus:ring-4 focus:outline-none focus:ring-[#7849d8] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>