<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- <link href="{{asset('css/soft-ui-dashboard-tailwind.css')}}" rel="stylesheet" /> -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    @notifyCss
    @vite('resources/css/app.css')
    @vite('resources\css\soft-ui-dashboard-tailwind.css')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <x-side-bar-resto></x-side-bar-resto>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-resto-nav></x-resto-nav>
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
            <h2 class="text-2xl font-bold mb-6">Menu Information</h2>
            <form action="{{ url('/restaurantadmin/' . $menu['id'] . '/editmenu') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="path_photo_menu" class="block text-gray-700 font-bold mb-2">Foto Produk</label>
                    <div class="border-2 border-dashed border-gray-300 p-4 flex justify-center items-center cursor-pointer">
                        <input name="path_photo_menu" type="file" accept=".jpg, .jpeg, .png" class="text-gray-500" value="{{$menu->path_photo_menu}}">
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Upload Photo 1:1 or 3:4. Photo of Menu Will Use In Front Page.</p>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input name="name" type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Insert The Name Of Menu" value="{{$menu->name}}">
                </div>

                <div class="mb-4">
                    <label for="menu_category" class="block text-gray-700 font-bold mb-2">Category</label>
                    <select name="menu_category" class="w-full p-2 border border-gray-300 rounded-md">
                        @if($menu->category_menu == 'food')
                        <option value="food" selected>Food</option>
                        @else
                        <option value="food">Food</option>
                        @endif
                        @if($menu->category_menu == 'drink')
                        <option value="drink" selected>Drink</option>
                        @else
                        <option value="drink">Drink</option>
                        @endif
                    </select>
                </div>
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Menu Description</label>
                    <textarea name="description" class="w-full p-2 border border-gray-300 rounded-md" rows="5" placeholder="Insert Your Menu Description"></textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                    <input name="price" type="number" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Your Menu Price">
                </div>
                <div class="bg-[#F5D0A9] py-2 flex justify-center items-center rounded-md w-44">
                    <button type="submit" class="text-black">
                        <p class="m-0">Simpan & Tampilkan</p>
                    </button>
                </div>
            </form>
        </div>
    </main>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>