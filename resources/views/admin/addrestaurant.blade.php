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
        <x-admin-nav router='admin / addrestaurant' titlepage='Add Restaurant' photo="{{ URL::to('/assets/profiles/' . $authUser['photo'])}}"></x-admin-nav>
        <div class="p-4">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
                <form method="POST" action="/admin/addrestaurant" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Name
                        </label>
                        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter restaurant name">
                        @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="address">
                            Address
                        </label>
                        <input name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Enter restaurant address">
                        @error('address')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="phone_number">
                            Phone Number
                        </label>
                        <input name="phone_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="Enter phone number">
                        @error('phone_number')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 mr-2">
                            <label class="block text-gray-700 font-bold mb-2" for="open_time">
                                Open Time
                            </label>
                            <input name="open_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="openTime" type="time">
                            @error('open_time')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2 ml-2">
                            <label class="block text-gray-700 font-bold mb-2" for="close_time">
                                Close Time
                            </label>
                            <input name="close_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="closeTime" type="time">
                            @error('close_time')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="number_of_tables">
                            Number of Tables
                        </label>
                        <input name="number_of_tables" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tables" type="number" placeholder="Enter number of tables">
                        @error('number_of_tables')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="category_id">
                            Category
                        </label>
                        <select name="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category">
                            <option value="">Select category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="user_id">
                            User
                        </label>
                        <select name="user_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user_id">
                            <option value="">Select user</option>
                            @foreach($userWithRoleRestaurant as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="photo_path">
                            Photo
                        </label>
                        <input name="photo_path" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo_path" type="file">
                        @error('photo_path')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button class="bg-peachy-brown hover:bg-[#37B9F1] text-slate-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Add Restaurant
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @include('notify::components.notify')
        @notifyJs
</body>

</html>