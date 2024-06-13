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
            <div tabindex="0" class="border collapse collapse-arrow border-b border-gray-300 py-4">
                <div class="collapse-title text-xl font-medium flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Restaurant B</h3>
                        <p class="text-sm text-gray-600">Date at Time</p>
                        <p class="text-sm text-gray-600">Guests: 4</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <button class="text-red-500 hover:text-red-700 mb-2 hover:scale-95">Cancel</button>
                    </div>
                </div>
                <div class="collapse-content mt-2">
                    <p>Menu A :</p>
                    <p>Menu B :</p>
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