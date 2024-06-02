<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>List Japanese Restaurant</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <h2 class="text-3xl text-center py-10 font-extrabold">Tabel Category Japanese</h2>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama Restaurant</th>
                            <th class="px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $restaurants = [
                            [
                                'id' => 1,
                                'name' => 'Sushi Tei',
                                'status' => 'Active'
                            ],
                            [
                                'id' => 2,
                                'name' => 'Ikkousha',
                                'status' => 'Non-Active'
                            ],
                            [
                                'id' => 3,
                                'name' => 'Hanamasa',
                                'status' => 'Active'
                            ],
                            [
                                'id' => 4,
                                'name' => 'Sushi Groove',
                                'status' => 'Active'
                            ],
                            [
                                'id' => 5,
                                'name' => 'Sushi Masa',
                                'status' => 'Non-Active'
                            ],
                            [
                                'id' => 6,
                                'name' => 'Sushi Hana',
                                'status' => 'Active'
                            ],
                            [
                                'id' => 7,
                                'name' => 'Sushi Tama',
                                'status' => 'Active'
                            ],
                            [
                                'id' => 8,
                                'name' => 'Sushi Zaku',
                                'status' => 'Non-Active'
                            ],
                            [
                                'id' => 9,
                                'name' => 'Sushi Ichi',
                                'status' => 'Active'
                            ],
                            [
                                'id' => 10,
                                'name' => 'Sushi Zen',
                                'status' => 'Active'
                            ]
                        ];
                        ?>
                        @foreach ($restaurants as $restaurant)
                        <tr>
                            <td class="border px-4 py-2">{{ $restaurant['id'] }}</td>
                            <td class="border px-4 py-2">{{ $restaurant['name'] }}</td>
                            <td class="border px-4 py-2">{{ $restaurant['status'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>