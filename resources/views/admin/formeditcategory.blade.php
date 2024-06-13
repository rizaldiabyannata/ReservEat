<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Form Update User</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / editcategory / form' titlepage='Form Update' photo="{{ URL::to('/assets/profiles/' . $authUser['photo'])}}"></x-admin-nav>
        <div class=" px-4">
            <div class="flex items-center justify-center p-12">
                <div class="w-full pb-10">
                    <div class="bg-white p-4 rounded-lg shadow-md flex flex-row space-x-4 items-center">
                        <img src="{{ URL::to('/assets/restaurantCategory/' . $category->path) }}" class="w-2/4 h-2/4 rounded-lg" alt="">
                        <form method="POST" action="{{'/admin/editcategory/form/' . $category->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-wrap mb-6">
                                <label for="category_name" class="block text-gray-700 text-sm font-bold mb-2">Name of Category</label>
                                <input type="text" id="category_name" name="category_name" class="w-full border border-gray-400 rounded-lg px-4 py-2 text-sm text-gray-700" value="{{$category->category_name}}" required>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descrpition</label>
                                <textarea id="description" name="description" class="w-full h-full border border-gray-400 rounded-lg px-4 py-2 text-sm text-gray-700">{{$category->description}}</textarea>
                            </div>
                            <div class="flex flex-wrap mb-6">
                                <label for="path" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                                <input type="file" id="path" name="path" class="w-full border border-gray-400 rounded-lg px-4 py-2 text-sm text-gray-700">
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>