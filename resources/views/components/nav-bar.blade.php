<nav class="bg-peachy-brown h-16 flex flex-row justify-between items-center px-10 py-4 font-navbar">
    <div class="flex flex-row space-x-2 items-center">
        <img class="w-12" src="{{ asset('/assets/images/weblogo.png') }}" alt="logo">
        <h2 class="text-2xl font-bold">ReservEat</h2>
    </div>
    <div class="hidden space-x-10 text-lg">
        <a class="hover:text-white" href="/login">Login</a>
        <a class="hover:text-white" href="/register">Register</a>
    </div>
    <div class="flex flex-row justify-normal items-center space-x-10 text-lg">
        <a href="">Special Offer</a>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" role="button">Reservasi</div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                <li><a>Restaurant</a></li>
                <li><a>Menu</a></li>
                <li><a>Caffe</a></li>
            </ul>
        </div>
        <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        <div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
        </div>
    </div>
</nav>