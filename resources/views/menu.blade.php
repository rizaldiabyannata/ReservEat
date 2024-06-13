<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>Restaurant Menu</title>
</head>

<body class="font-['Montserrat']">
    <x-nav-bar></x-nav-bar>
    <div class="p-4 pt-20 h-lvh mx-6 ">
        <h2 class="text-3xl text-center py-10 font-extrabold">Restaurant Menu</h2>
        <div class="p-4">
            <div class="mb-4">
                <select id="categoryFilter" class="border border-gray-400 rounded-md w-60 px-4 py-2" onchange="filterCategory(this)">
                    <option value="">All Categories</option>
                    @foreach ($categories as $cat)
                    <option value="{{ $cat }}" @if(isset($category) && $category==$cat) selected @endif>{{ $cat->category_name }} Restaurant</option>
                    @endforeach
                </select>
            </div>
            <div id="menuGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <div class="menu-item flex justify-center items-center w-full md:w-72 h-52 border border-gray-400 rounded-md bg-gray-200 transform transition-transform hover:scale-105 hover:-translate-y-2">
                    <h3 class="text-center text-black text-lg font-bold">test</h3>
                </div>
            </div>
        </div>
    </div>
    <script>
        function filterCategory(select) {
            var category = select.value;
            if (category) {
                window.location.href = '/restaurant/menu/' + category.category_name;
            } else {
                window.location.href = '/restaurant/menu';
            }
        }
    </script>
    <footer class="footer p-10 bg-[#FAE8DC] text-black">
        <aside>
            <img class="w-16" src="{{ asset('/assets/images/weblogo.png') }}" alt="" srcset="">
            <p>ReservEat<br>Providing reliable reservation online since 2024</p>
        </aside>
        <nav>
            <h6 class="footer-title">Social</h6>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </nav>
    </footer>
    <div>
        <p class="bg-[#22262A] text-white text-center py-4">&copy; 2024 ReservEat. All rights reserved.</p>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>