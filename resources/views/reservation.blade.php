<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Menu Selection</title>
</head>

<body class="font-['Montserrat'] bg-gray-100">
    <x-nav-bar></x-nav-bar>
    <div class="container mx-auto py-8 px-4 md:px-8 lg:px-16">
        <h2 class="text-3xl font-bold mb-4 text-center text-gray-800">Select Your Menu</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h3 class="text-2xl font-semibold mb-2">Restaurant A</h3>
            <p class="text-gray-700 mb-4">Location: 123 Main Street, City</p>
            <div class="border-t border-gray-200 pt-4">
                <h4 class="text-xl font-semibold mb-2">Menu</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Menu Item 1 -->
                    <div class="menu-item bg-gray-100 p-4 rounded-lg shadow-sm">
                        <h5 class="text-lg font-semibold">Menu Item 1</h5>
                        <p class="text-gray-700 mb-2">Description of menu item 1.</p>
                        <p class="text-gray-900 font-bold">$10.00</p>
                        <div class="flex items-center">
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-l-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="decreaseValue('quantity1')">-</button>
                            <input type="text" id="quantity1" class="w-12 text-center border-t border-b border-gray-200 focus:outline-none" value="1" readonly>
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-r-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="increaseValue('quantity1')">+</button>
                        </div>
                    </div>
                    <!-- Menu Item 2 -->
                    <div class="menu-item bg-gray-100 p-4 rounded-lg shadow-sm">
                        <h5 class="text-lg font-semibold">Menu Item 2</h5>
                        <p class="text-gray-700 mb-2">Description of menu item 2.</p>
                        <p class="text-gray-900 font-bold">$12.00</p>
                        <div class="flex items-center">
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-l-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="decreaseValue('quantity2')">-</button>
                            <input type="text" id="quantity2" class="w-12 text-center border-t border-b border-gray-200 focus:outline-none" value="1" readonly>
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-r-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="increaseValue('quantity2')">+</button>
                        </div>
                    </div>
                    <!-- Menu Item 3 -->
                    <div class="menu-item bg-gray-100 p-4 rounded-lg shadow-sm">
                        <h5 class="text-lg font-semibold">Menu Item 3</h5>
                        <p class="text-gray-700 mb-2">Description of menu item 3.</p>
                        <p class="text-gray-900 font-bold">$8.00</p>
                        <div class="flex items-center">
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-l-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="decreaseValue('quantity3')">-</button>
                            <input type="text" id="quantity3" class="w-12 text-center border-t border-b border-gray-200 focus:outline-none" value="1" readonly>
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-r-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="increaseValue('quantity3')">+</button>
                        </div>
                    </div>
                    <!-- Menu Item 4 -->
                    <div class="menu-item bg-gray-100 p-4 rounded-lg shadow-sm">
                        <h5 class="text-lg font-semibold">Menu Item 4</h5>
                        <p class="text-gray-700 mb-2">Description of menu item 4.</p>
                        <p class="text-gray-900 font-bold">$15.00</p>
                        <div class="flex items-center">
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-l-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="decreaseValue('quantity4')">-</button>
                            <input type="text" id="quantity4" class="w-12 text-center border-t border-b border-gray-200 focus:outline-none" value="1" readonly>
                            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-r-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50" onclick="increaseValue('quantity4')">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h4 class="text-xl font-semibold mb-2">Reservation Details</h4>
            <form>
                <div class="mb-4">
                    <label for="date" class="block text-gray-700 font-semibold mb-2">Date:</label>
                    <input type="date" id="date" name="date" class="w-full border border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label for="time" class="block text-gray-700 font-semibold mb-2">Time:</label>
                    <input type="time" id="time" name="time" class="w-full border border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label for="guests" class="block text-gray-700 font-semibold mb-2">Number of Guests:</label>
                    <input type="number" id="guests" name="guests" min="1" class="w-full border border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label for="guests" class="block text-gray-700 font-semibold mb-2">Tables:</label>
                    <input type="number" id="guests" name="guests" min="1" class="w-full border border-gray-300 rounded-md p-2">
                </div>
                <button type="submit" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold">Submit Reservation</button>
            </form>
        </div>
    </div>

    <script>
        function decreaseValue(id) {
            var value = parseInt(document.getElementById(id).value, 10);
            value = isNaN(value) ? 0 : value;
            value < 2 ? value = 1 : value--;
            document.getElementById(id).value = value;
        }

        function increaseValue(id) {
            var value = parseInt(document.getElementById(id).value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById(id).value = value;
        }
    </script>

</body>

</html>
