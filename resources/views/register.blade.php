<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="font-['Montserrat']">
    <nav class="bg-peachy-brown h-16 flex flex-row justify-between items-center px-8 py-4">
        <div class="flex flex-row space-x-2 items-center">
            <img class="w-12" src="{{ URL::to('/assets/images/weblogo.png') }}" alt="logo">
            <h2 class="text-2xl font-bold hidden sm:flex">ReservEat</h2>
        </div>
        <div class="flex space-x-6 text-base">
            <a class="hover:text-white" href="{{ url('/login') }}">Login</a>
            <a class="hover:text-white" href="{{ url('/register') }}">Register</a>
        </div>
    </nav>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm font-['Quicksand']">
            <form class="space-y-6" action="/register" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" required autofocus value="{{ old('name') }}" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('name')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required value="{{ old('email') }}" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('email')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone number</label>
                    <div class="mt-2">
                        <input id="phone" name="phone" type="tel" required value="{{ old('phone') }}" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('phone')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('password')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('password_confirmation')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-peachy-brown px-3 font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-black shadow-sm">Register</button>
                </div>
            </form>
        </div>
    </div>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>