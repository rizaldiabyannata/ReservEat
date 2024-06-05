<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Restaurant</title>
    @notifyCss
    @vite('resources/css/app.css')
</head>

<!-- #8739f9 primary-->
<!-- #37B9F1 secondary-->
<!-- #F2F5F5 third-->

<body>
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / addrestaurant' titlepage='Add Restaurant'></x-admin-nav>
        <div class="p-4">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
                <form action="/admin/addrestaurant" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="photo">
                            Photo
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo" type="file">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="user">
                            User
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category">
                            <option value="">Select User</option>
                            @foreach($userWithRoleRestaurant as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="address">
                            Address
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Enter restaurant address">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="phone">
                            Phone Number
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="Enter phone number">
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 mr-2">
                            <label class="block text-gray-700 font-bold mb-2" for="openTime">
                                Open Time
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="openTime" type="time">
                        </div>
                        <div class="w-1/2 ml-2">
                            <label class="block text-gray-700 font-bold mb-2" for="closeTime">
                                Close Time
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="closeTime" type="time">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="category">
                                Category
                            </label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category">
                                <option value="">Select category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="tables">
                                Number of Tables
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tables" type="number" placeholder="Enter number of tables">
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-[#8739f9] hover:bg-[#37B9F1] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Add Restaurant
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>