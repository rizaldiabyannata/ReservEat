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
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">History</h2>
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
                        <button class="text-blue-500 hover:text-blue-700" onclick="my_modal_2.showModal()">Add Review</button>
                        <dialog id="my_modal_2" class="modal">
                            <div class="modal-box">
                                <h3 class="text-center font-bold text-lg p-3">Put Your Reviews!</h3>
                                <div class="rating">
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                    <input type="radio" name="rating-1" class="mask mask-star" checked />
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                </div>
                                <textarea class="textarea textarea-bordered textarea-lg w-full" placeholder="Review"></textarea>
                                <div class="modal-action">
                                    <form method="dialog">
                                        <button class="btn">Add Review</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
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
                        <button class="text-blue-500 hover:text-blue-700" onclick="my_modal_1.showModal()">Add Review</button>
                        <dialog id="my_modal_1" class="modal">
                            <div class="modal-box">
                                <h3 class="text-center font-bold text-lg p-3">Put Your Reviews!</h3>
                                <div class="rating">
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                    <input type="radio" name="rating-1" class="mask mask-star" checked />
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                    <input type="radio" name="rating-1" class="mask mask-star" />
                                </div>
                                <textarea class="textarea textarea-bordered textarea-lg w-full" placeholder="Review"></textarea>
                                <div class="modal-action">
                                    <form method="dialog">
                                        <button class="btn">Add Review</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
                    </div>
                </div>
                <div class="collapse-content">
                        <p>Menu A :</p>
                        <p>Menu B :</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
