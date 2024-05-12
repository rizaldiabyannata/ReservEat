<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body class="font-['Montserrat']">
    <nav class="bg-peachy-brown h-16 flex flex-row justify-between items-center px-8 py-4">
        <div class="flex flex-row space-x-2 items-center">
            <img class="w-12" src="{{ URL::to('/assets/images/weblogo.png') }}" alt="logo">
            <h2 class="text-2xl font-bold hidden sm:flex">ReservEat</h2>
        </div>
        <div class="flex space-x-6 text-base">
            <a class="hover:text-white" href="{{ url('/login') }}">Login</a>
            <a class="hover:text-white " href="{{ url('/register') }}">Register</a>
        </div>
    </nav>

    <div class="flex min-h-full flex-col justify-center px-6 py-3 mb-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up to create your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm font-['Quicksand']">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Full name</label>
                    <div class="mt-2">
                        <input id="first-name" name="name" type="text" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                    <div class="mt-2">
                        <input id="phone" name="phone" type="number" autocomplete="phone" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                    <div class="mt-2">
                        <input id="confirm-password" name="confirm-password" type="number" max="12" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                    <div class="mt-2">
                        <input id="confirm-password" name="confirm-password" type="password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-peachy-brown px-3 font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-black shadow-sm hover:border-2 hover:scale-95">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</body>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

</html>