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
  @vite('resources/css/app.css')
  @vite('resources\css\soft-ui-dashboard-tailwind.css')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
  <x-side-bar-resto></x-side-bar-resto>
  <div class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen bg-gray-50 transition-all duration-200">
    <x-resto-nav></x-resto-nav>
    <div class="w-full px-6 mx-auto">
      <img src="{{ URL::to('/assets/restaurantPhoto/' . $restaurant['photo_path'])}}" class="relative flex items-center p-0 mt-6 overflow-hidden bg-center object-cover h-60 w-full rounded-2xl" style="background-position-y: 50%">
      <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-auto max-w-full px-3">
            <div class="my-4 text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
              <img src="{{ URL::to('/assets/profiles/' . $user['photo'])}}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
            </div>
          </div>
          <div class="flex-none w-auto max-w-full px-3 my-auto">
            <div class="h-full">
              <h5 class="mb-1 text-3xl font-bold">{{$restaurant->name}}</h5>
            </div>
          </div>
          <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
            <div class="relative right-0">
              <ul class="relative flex flex-col p-1 list-none bg-transparent rounded-xl" nav-pills role="tablist">
                <li class="z-30 flex-auto text-center">
                  <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link active href="javascript:;" role="tab" aria-selected="true">
                    <span class="ml-1 font-bold">{{$user->name}}</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6rem" height="1.6rem" viewBox="0 0 24 24">
                      <path fill="currentColor" d="m17.38 10.79l-2.2-2.2c-.28-.28-.36-.67-.25-1.02c.37-1.12.57-2.32.57-3.57c0-.55.45-1 1-1H20c.55 0 1 .45 1 1c0 9.39-7.61 17-17 17c-.55 0-1-.45-1-1v-3.49c0-.55.45-1 1-1c1.24 0 2.45-.2 3.57-.57c.35-.12.75-.03 1.02.24l2.2 2.2c2.83-1.45 5.15-3.76 6.59-6.59" />
                    </svg>
                    <span class="ml-2">{{$user->phone}}</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="flex items-center justify-center max-w-full bg-gray-100 mb-20">
      <div>
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <div class="flex flex-wrap -mx-3">
              <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                <h6 class="mb-0">Profile Information</h6>
              </div>
            </div>
          </div>
          <div class="flex-auto p-4 w-[70vw]">
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
              <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Name: </strong>{{$user->name}}</li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Mobile: </strong>{{$user->phone}}</li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Email: </strong>{{$user->email}}</li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Location: </strong>{{$restaurant->address}}</li>
              <li class="relative block px-4 py-2 pb-0 pl-0 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                <strong class="leading-normal text-sm text-slate-700">Social:</strong> &nbsp;
                <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center text-blue-800 align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none" href="javascript:;">
                  <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-600" href="javascript:;">
                  <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-900" href="javascript:;">
                  <i class="fab fa-instagram fa-lg"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>