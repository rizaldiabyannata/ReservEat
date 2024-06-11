<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Restaurant Menu</title>
</head>
<body class="font-['Montserrat']">
    <x-nav-bar></x-nav-bar>
    <div class="p-4 sm:ml-32">
        <h2 class="text-3xl text-center py-10 font-extrabold">Restaurant Menu</h2>
        <div class="p-4">
            <div class="mb-4">
                <select id="categoryFilter" class="border border-gray-400 rounded-md px-4 py-2" onchange="filterCategory(this)">
                    <option value="">All Categories</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat }}" @if(isset($category) && $category == $cat) selected @endif>{{ $cat }} Restaurant</option>
                    @endforeach
                </select>
            </div>
            <div id="menuGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($menus as $menu)
                    <div class="menu-item flex justify-center items-center w-full md:w-72 h-52 border border-gray-400 rounded-md bg-gray-200 transform transition-transform hover:scale-105 hover:-translate-y-2" data-category="{{ $menu['category'] }}">
                        <h3 class="text-center text-black text-lg font-bold">{{ $menu['name'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        function filterCategory(select) {
            var category = select.value;
            if (category) {
                window.location.href = '/restaurant/menu/' + category;
            } else {
                window.location.href = '/restaurant/menu';
            }
        }
    </script>
</body>
</html>
