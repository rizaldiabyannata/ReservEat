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
    @vite('resources/css/app.css')
    @vite('resources\css\soft-ui-dashboard-tailwind.css')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <x-side-bar-resto></x-side-bar-resto>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-resto-nav></x-resto-nav>
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-8">Review Restaurant</h1>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="flex mb-4">
                    <div class="w-1/6">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3jjCyfj9RJknvO87B6kPMRxrjJY6aa_1xMw&s" alt="foro" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="w-5/6">
                        <p class="font-bold">aldi</p>
                        <p class="text-gray-600">restoran arion sangat mnnearik karna berisikan para wibu yang suka dengan tate no yiusa yang sanget gemot dan ada juga ri,muru disanaa walaupun makanannnya biasa aja .</p>
                        <p class="text-xs text-gray-400">Posted 2 hours ago</p>
                    </div>
                </div>

                <!-- Form untuk Menambah Review -->
                <form class="mt-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="review">
                            Replay Review
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="review" placeholder="Your Replay"></textarea>
                    </div>
                    <div class="bg-[#F5D0A9] w-32 flex justify-center hover:scale-105 transition-all duration-300 ease-in-out text-black font-bold py-2 px-4 rounded">
                        <button type="button">
                            balasan
                        </button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>