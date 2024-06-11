<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Form Update Restaurant</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / editrestaurant / form' titlepage='Form Update'></x-admin-nav>
        <div class="px-4">
            <div class="flex items-center justify-center p-12">
                <div class="w-full xl:w-2/3 lg:w-3/4 md:w-4/5 sm:w-full xs:w-full pb-10">
                    <div class="bg-white p-4 rounded-lg shadow-md text-black">
                        <form method="POST" action="{{ '/admin/editrestaurant/form/' . $restaurant->id }}">
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-wrap mb-6">
                                <label for="name" class="block text-black text-sm font-bold mb-2">Name:</label>
                                <input type="text" id="name" name="name" value="{{ $restaurant->name }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="photo_path" class="block text-black text-sm font-bold mb-2">Photo:</label>
                                <input type="file" id="photo_path" name="photo_path" class="w-full border border-black rounded-md p-2 text-sm text-black">
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="address" class="block text-black text-sm font-bold mb-2">Address:</label>
                                <input type="text" id="address" name="address" value="{{ $restaurant->address }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="phone_number" class="block text-black text-sm font-bold mb-2">Phone Number:</label>
                                <input type="tel" id="phone_number" name="phone_number" value="{{ $restaurant->phone_number }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="open_time" class="block text-black text-sm font-bold mb-2">Open Time:</label>
                                <input type="time" id="open_time" name="open_time" value="{{ $restaurant->open_time }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="close_time" class="block text-black text-sm font-bold mb-2">Close Time:</label>
                                <input type="time" id="close_time" name="close_time" value="{{ $restaurant->close_time }}" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="category_id" class="block text-black text-sm font-bold mb-2">Category:</label>
                                <select id="category_id" name="category_id" class="w-full border border-black rounded-md p-2 text-sm text-black" required>
                                    <option value="">{{$restaurantCategory->category_name}}</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Restaurant</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>