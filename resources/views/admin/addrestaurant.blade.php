<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Add Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<!-- #8739f9 primary-->
<!-- #37B9F1 secondary-->
<!-- #F2F5F5 third-->

<body>
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / home' titlepage='Dashboard'></x-admin-nav>
        <div class="p-4">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-6 text-[#8739f9]">Add Restaurant</h2>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="photo">
                            Photo
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo" type="file">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="address">
                            Address
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Enter restaurant address">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="phone">
                            Phone Number
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="Enter phone number">
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 mr-2">
                            <label class="block text-gray-700 font-bold mb-2" for="openTime">
                                Open Time
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="openTime" type="time">
                        </div>
                        <div class="w-1/2 ml-2">
                            <label class="block text-gray-700 font-bold mb-2" for="closeTime">
                                Close Time
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="closeTime" type="time">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter email">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter password">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="category">
                                Category
                            </label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category">
                                <option value="">Select category</option>
                                <option value="italian">Italian</option>
                                <option value="chinese">Chinese</option>
                                <option value="japanese">Japanese</option>
                                <option value="mexican">Mexican</option>
                                <option value="korean">Korean</option>
                                <option value="western">Western</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="tables">
                                Number of Tables
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tables" type="number" placeholder="Enter number of tables">
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-[#8739f9] hover:bg-[#37B9F1] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Add Restaurant
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>