<nav class="bg-peachy-brown h-16 flex flex-row justify-between items-center px-10 py-4 font-navbar">
    <div class="flex flex-row space-x-2 items-center">
        <img class="w-12" src="{{ asset('/assets/images/weblogo.png') }}" alt="logo">
        <a href="/" class="text-2xl font-bold">ReservEat</a>
    </div>
    <div class="hidden space-x-10 text-lg">
        <a class="hover:text-white" href="/login">Login</a>
        <a class="hover:text-white" href="/register">Register</a>
    </div>
    <div class="flex flex-row justify-normal items-center space-x-10 text-lg">
        <a href="/category" class="flex items-center px-4 py-2 rounded-lg text-lg font-semibold text-gray-800 hover:bg-orange-300 transition-colors duration-300 ease-in-out dark:text-gray-200 dark:hover:bg-orange-700">Category</a>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" role="button" class="flex items-center px-4 py-2 rounded-lg text-lg font-semibold text-gray-800 hover:bg-orange-300 transition-colors duration-300 ease-in-out dark:text-gray-200 dark:hover:bg-orange-700">Reservasi</div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                <li><a href="/restaurant">Restaurant</a></li>
                <li><a href="/restaurant/menu">Menu</a></li>
            </ul>
        </div>
        <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        <div class="dropdown dropdown-hover relative">
            <a tabindex="0" role="button" class="flex items-center px-4 py-2 rounded-lg text-lg font-semibold text-gray-800 hover:bg-orange-300 transition-colors duration-300 ease-in-out dark:text-gray-200 dark:hover:bg-orange-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </a>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 mt-4 absolute left-0 transform translate-x-[-70%]">
                <li><a href="/profile">Profile</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>