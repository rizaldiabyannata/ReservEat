<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    @vite('resources/css/app.css')
    <title>Reservation</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar-customer></x-side-bar-customer>
    <div class="flex min-h-full flex-col justify-center ml-60 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Your Order</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg font-['Quicksand']">
            <div class="collapse collapse-arrow border-gray-300 py-4">
                <div class=" text-xl space-y-4 font-medium flex flex-col items-center">
                    @foreach($reservations as $reservation)
                    <div class="border p-2 rounded-lg ">
                        <div class="">
                            <h3 class="text-lg font-bold text-gray-900">Restaurant: {{$reservation->restaurant_name}}</h3>
                            <p class="text-sm text-gray-600">Reservation Date :{{$reservation->reservation_date}}</p>
                            <p class="text-sm text-gray-600">Guests: {{$reservation->number_of_guest}}</p>
                            <p class="text-sm text-gray-600">Price: {{$reservation->price}}</p>
                        </div>
                        <div class="flex flex-row justify-between px-2">
                            <form action="{{'/restaurants/reservation/' . $reservation->id . '/payment'}}" method="post">
                                @csrf
                                <div class="flex flex-col items-end">
                                    <button type="submit" class="text-orange-500 hover:text-orange-700 mb-2 hover:scale-95">Payment</button>
                                </div>
                            </form>
                            <form action="{{'/restaurants/reservation/' . $reservation->id . '/cencel'}}" method="post">
                                @csrf
                                <div class="flex flex-col items-end">
                                    <button type="submit" class="text-red-500 hover:text-red-700 mb-2 hover:scale-95">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-6">
                <a href="{{ url('/restaurants') }}" class="flex w-full justify-center rounded-md bg-gray-800 px-3 font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-700">Add More Reservations</a>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', function() {
                const modal = document.getElementById('editModal');
                modal.classList.remove('hidden');

                document.getElementById('restaurant').value = this.dataset.restaurant;
                document.getElementById('date').value = this.dataset.date;
                document.getElementById('guests').value = this.dataset.guests;
            });
        });

        document.querySelectorAll('.close-modal').forEach(button => {
            button.addEventListener('click', function() {
                const modal = document.getElementById('editModal');
                modal.classList.add('hidden');
            });
        });
    </script>
    @include('notify::components.notify')
    @notifyJs
</body>

</html>