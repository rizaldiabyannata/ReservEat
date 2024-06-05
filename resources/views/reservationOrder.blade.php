<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Reservation</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar-customer></x-side-bar-customer>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Your Order</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg font-['Quicksand']">
            <div tabindex="0" class="collapse collapse-arrow border-b border-gray-300 py-4">
                <div class="collapse-title text-xl font-medium flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Restaurant A</h3>
                        <p class="text-sm text-gray-600">Date at Time</p>
                        <p class="text-sm text-gray-600">Guests: 2</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <button class="text-red-500 hover:text-red-700 mb-2">Cancel</button>
                        <button class="edit-button text-blue-500 hover:text-blue-700" data-restaurant="Restaurant A" data-date="Date at Time" data-guests="2">Edit</button>
                    </div>
                </div>
                <div class="collapse-content">
                    <p>Menu A :</p>
                    <p>Menu B :</p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow border-b border-gray-300 py-4">
                <div class="collapse-title text-xl font-medium flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Restaurant B</h3>
                        <p class="text-sm text-gray-600">Date at Time</p>
                        <p class="text-sm text-gray-600">Guests: 4</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <button class="text-red-500 hover:text-red-700 mb-2">Cancel</button>
                        <button class="edit-button text-blue-500 hover:text-blue-700" data-restaurant="Restaurant B" data-date="Date at Time" data-guests="4">Edit</button>
                    </div>
                </div>
                <div class="collapse-content">
                    <p>Menu A :</p>
                    <p>Menu B :</p>
                </div>
            </div>
            <div class="mt-6">
                <a href="{{ url('') }}" class="flex w-full justify-center rounded-md bg-gray-800 px-3 font-['Montserrat'] py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-700">Add More Reservations</a>
            </div>
        </div>
    </div>

    <!-- Modal HTML -->
    <div id="editModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modalTitle">Edit Reservation</h3>
                            <div class="mt-2">
                                <form id="editForm">
                                    <div>
                                        <label for="restaurant" class="block text-sm font-medium text-gray-700">Restaurant</label>
                                        <input type="text" id="restaurant" name="restaurant" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                                    </div>
                                    <div class="mt-4">
                                        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                        <input type="text" id="date" name="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="mt-4">
                                        <label for="guests" class="block text-sm font-medium text-gray-700">Guests</label>
                                        <input type="number" id="guests" name="guests" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="close-modal w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Save</button>
                    <button type="button" class="close-modal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">Cancel</button>
                </div>
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
</body>
</html>
