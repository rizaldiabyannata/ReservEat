<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>Categorys</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="sm:ml-64">
        <x-admin-nav router='admin / categorys' titlepage='Categorys' photo="{{ URL::to('/assets/profiles/' . $authUser['photo'])}}"></x-admin-nav>
        <div class="p-4">
            <div class="grid grid-cols-3 gap-10">
                @foreach ($categories as $category)
                <a href="{{ url('admin/category/' . $category['category_name']) }}" class="hover:scale-105 transition transform duration-300 ease-in-out cursor-pointer">
                    <img src="{{ URL::to('/assets/restaurantCategory/' . $category->path) }}" class="flex justify-center items-center w-72 h-52 border border-gray-400 rounded-t-md">
                    <h3 class="border border-gray-300 px-6 py-2 text-center rounded-b-md text-black text-lg font-bold backdrop-filter backdrop-blur-sm cursor-pointer">{{$category->category_name}}</h3>
                    </img>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>