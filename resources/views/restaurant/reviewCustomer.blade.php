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
                @foreach($reviews as $review)
                <div class="flex mb-4">
                    <div class="w-5/6">
                        <p class="font-bold m-0">{{ $review->user->name }}</p>
                        <p class="font-bold">Rating: {{ $review->rating }}/5</p>
                        <p class="text-gray-600">{{$review->review_text}}</p>
                    </div>
                </div>

                <!-- Form untuk Menambah Review -->
                <form method="POST" action="{{'/restaurantadmin/review-customer/'. $review->id}}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="reply_text">
                            Replay Review
                        </label>
                        <textarea name="replay_text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="reply_text" placeholder="Your Replay"></textarea>
                    </div>
                    <div class="bg-[#F5D0A9] w-32 flex justify-center hover:scale-105 transition-all duration-300 ease-in-out text-black font-bold py-2 px-4 rounded">
                        <button type="submit">
                            balasan
                        </button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
</body>

</html>