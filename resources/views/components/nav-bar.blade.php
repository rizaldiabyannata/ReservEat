<nav class="h-20 fixed w-lvw z-10 bg-slate-100 flex flex-row justify-between items-center px-10 py-4 font-navbar">
    <div class="flex flex-row space-x-2 items-center">
        <img class="w-12" src="{{ asset('/assets/images/weblogo.png') }}" alt="logo">
    </div>

    <!-- #FB8A22 -->
    <!-- #22262A -->
    <!-- #878F99 -->
    <!-- #FAE8DC -->



    <!-- Checkbox to control mobile menu -->
    <input type="checkbox" id="menu-toggle" class="hidden peer">
    <label for="menu-toggle" class="sm:hidden flex items-end text-gray-800 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </label>

    <!-- Desktop Navigation Links -->
    <div class="hidden sm:flex sm:flex-row sm:items-center sm:space-x-2 text-lg">
        <a href="/home" class="flex items-center px-4 py-2 text-base font-normal text-gray-800 hover:border-b-2 hover:border-orange-300 transition-colors duration-300 ease-in-out dark:text-black">Home</a>
        <a href="/category" class="flex items-center px-4 py-2 text-base font-normal text-gray-800 hover:border-b-2 hover:border-orange-300 transition-colors duration-300 ease-in-out dark:text-black">Category</a>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" role="button" class="flex items-center px-4 py-2 text-base font-normal text-gray-800 hover:border-b-2 hover:border-orange-300 transition-colors duration-300 ease-in-out dark:text-black">Reservasi</div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                <li><a href="/restaurants">Restaurant</a></li>
                <li><a href="/menus">Menu</a></li>
            </ul>
        </div>
        <a href="/about-us" class="flex items-center px-4 py-2 text-base font-normal text-gray-800 hover:border-b-2 hover:border-orange-300 transition-colors duration-300 ease-in-out dark:text-black">About Us</a>
    </div>
    <div>
        <div class="dropdown dropdown-hover relative">
            <a tabindex="0" role="button" class="flex items-center px-4 py-2 rounded-lg text-lg font-semibold text-gray-800 transition-colors duration-300 ease-in-out dark:text-black">
                <img class="w-12 rounded-full" src="{{ URL::to('/assets/profiles/' . Auth::user()['photo'])}}" alt="profile" srcset="">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg> -->
            </a>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 mt-4 absolute left-0 transform translate-x-[-70%]">
                <li><a href="/profile">Profile</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="fixed inset-y-0 right-0 w-64 shadow-lg transform translate-x-full peer-checked:translate-x-0 transition-transform duration-300 ease-in-out z-40">
        <div class="p-6">
            <label for="menu-toggle" class="text-gray-800 cursor-pointer float-right">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </label>
            <div class="clear-both"></div>
            <div class="flex flex-col items-start space-y-6 mt-4 text-lg">
                <a href="/profile" class="px-4 py-2 rounded-lg text-lg font-semibold text-gray-800 hover:bg-orange-300 transition-colors duration-300 ease-in-out flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mr-4 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Profile
                </a>
                <a href="/category" class="px-4 py-2 rounded-lg text-lg font-semibold text-gray-800 hover:bg-orange-300 transition-colors duration-300 ease-in-out">Category</a>
                <div class="dropdown dropdown-hover w-full">
                    <div tabindex="0" role="button" class="px-4 py-2 rounded-lg text-lg font-semibold text-gray-800 hover:bg-orange-300 transition-colors duration-300 ease-in-out flex items-center">
                        Reservasi
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-auto text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-full mt-2">
                        <li><a href="/restaurant">Restaurant</a></li>
                        <li><a href="/restaurant/menu">Menu</a></li>
                    </ul>
                </div>
                <div class="form-control w-full">
                    <input type="text" placeholder="Search" class="input input-bordered w-full" />
                </div>
            </div>
        </div>
    </div>
</nav>