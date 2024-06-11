<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>Edit Category</title>
</head>

<body class="bg-[#F2F5F5] h-screen">
    <x-side-bar class="fixed top-0 left-0 w-64 bg-[#8739f9] h-screen"></x-side-bar>
    <div class="sm:ml-64">
        <x-admin-nav router='admin / editcategory' titlepage='Edit Category' class="bg-[#37B9F1] py-4"></x-admin-nav>
        <div class="p-4">
            <table class="w-full text-sm text-left text-black rounded-lg">
                <thead class="text-xs text-white uppercase bg-[#8739f9]">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-tl-lg">Photo</th>
                        <th scope="col" class="px-6 py-3">Category Name</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="border-b bg-white hover:bg-[#F2F5F5]">
                        <td class="px-2 py-2 w-44"><img class="rounded-lg" src="{{ URL::to('/assets/restaurantCategory/' . $category->path) }}" alt="image of . $category->category_name" srcset=""></td>
                        <td class="px-6 py-4 font-bold">{{ $category->category_name }}</td>
                        <td class="px-6 py-4">{{ $category->description }}</td>
                        <td class="px-6 py-10 flex space-x-6">
                            <a href="{{ url('/admin/editcategory/form/'. $category->id) }}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded flex justify-center items-center">
                                <h1>Edit</h1>
                            </a>
                            <form action="{{ url('/admin/category/delete/'. $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>