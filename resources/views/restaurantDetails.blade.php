<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Restaurant Detail</title>
</head>

<body class="font-['Montserrat'] bg-gray-100">
    <x-nav-bar></x-nav-bar>
    <div class="container mx-auto py-8 px-4 md:px-8 lg:px-16">
        <!-- Restaurant Details -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex flex-col lg:flex-row">
                <img src="https://via.placeholder.com/600x400" alt="Restaurant Image" class="w-full lg:w-1/2 rounded-lg mb-6 lg:mb-0 lg:mr-6">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Restaurant A</h2>
                    <p class="text-gray-700 mb-2"><strong>Address:</strong> 123 Main Street, City</p>
                    <p class="text-gray-700 mb-4"><strong>Rating:</strong> 4.5/5</p>
                    <h3 class="text-2xl font-semibold mb-2">Bio Restaurant</h3>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit.</p>
                    <a href="/restaurant/reservation" class="bg-peachy-brown text-black py-2 px-6 rounded-full font-semibold inline-block">Make a Reservation</a>
                </div>
            </div>
        </div>

        <!-- Menu Table -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h3 class="text-2xl font-semibold mb-4">Menu</h3>
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Menu Item</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2"><img src="https://via.placeholder.com/100" alt="Menu Item 1"></td>
                        <td class="border px-4 py-2">Menu Item 1</td>
                        <td class="border px-4 py-2">Description of menu item 1.</td>
                        <td class="border px-4 py-2">$10.00</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><img src="https://via.placeholder.com/100" alt="Menu Item 2"></td>
                        <td class="border px-4 py-2">Menu Item 2</td>
                        <td class="border px-4 py-2">Description of menu item 2.</td>
                        <td class="border px-4 py-2">$12.00</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2"><img src="https://via.placeholder.com/100" alt="Menu Item 3"></td>
                        <td class="border px-4 py-2">Menu Item 3</td>
                        <td class="border px-4 py-2">Description of menu item 3.</td>
                        <td class="border px-4 py-2">$8.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Customer Reviews -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold mb-4">Customer Reviews</h3>

            <div class="collapse collapse-arrow bg-base-200 mb-4">
                <input type="radio" name="my-accordion-2" id="review1" checked /> 
                <div class="collapse-title flex justify-between items-center">
                    <span class="text-xl font-medium">John Doe</span>
                    <span class="text-gray-700">Rating: 4/5</span>
                </div>
                <div class="collapse-content"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                </div>
            </div>
            <div class="collapse collapse-arrow bg-base-200 mb-4">
                <input type="radio" name="my-accordion-2" id="review1" checked /> 
                <div class="collapse-title flex justify-between items-center">
                    <span class="text-xl font-medium">Jane Smith</span>
                    <span class="text-gray-700">Rating: 3.5/5</span>
                </div>
                <div class="collapse-content"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                </div>
            </div>
            <div class="collapse collapse-arrow bg-base-200 mb-4">
                <input type="radio" name="my-accordion-2" id="review1" checked /> 
                <div class="collapse-title flex justify-between items-center">
                    <span class="text-xl font-medium">Michael Johnson</span>
                    <span class="text-gray-700">Rating: 3/5</span>
                </div>
                <div class="collapse-content"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
