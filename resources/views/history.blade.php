<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>History</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar-customer></x-side-bar-customer>
    <div class="flex min-h-full flex-col justify-center ml-60 px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">History</h2>
        </div>
        <div class="mt-10 sm:w-full sm:max-w-lg font-['Quicksand']">
            <div class="w-lvw pr-80 collapse collapse-arrow border-gray-300 py-4">
                <div class="w-full text-xl gap-4 font-medium grid grid-cols-3 items-center">
                    @foreach($reservations as $reservation)
                    <div class="w-full h-full border p-2 rounded-lg">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Restaurant: {{ $reservation->restaurant_name }}</h3>
                            <p class="text-sm text-gray-600">Reservation Date : {{ $reservation->reservation_date }}</p>
                            <p class="text-sm text-gray-600">Guests: {{ $reservation->number_of_guest }}</p>
                            <p class="text-sm text-gray-600">Status: {{ $reservation->status }}</p>
                        </div>
                        @if($reservation->status == 'payment')
                        <div class="w-full my-4">
                            <a href="{{ '/restaurants/' . $reservation->restaurant_id . '/review' }}" class="w-full py-2 px-4 rounded-lg text-center bg-peachy-brown hover:sc">Review</a>
                        </div>
                        @endif
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</body>

</html>