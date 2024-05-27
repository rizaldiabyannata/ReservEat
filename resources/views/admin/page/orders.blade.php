<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')
    <title>Orders</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / Orders' titlepage='Orders'></x-admin-nav>
        <div class="px-4">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded border border-gray-400">
                    <div class="w-full flex flex-row justify-between px-10">
                        <div class="flex flex-col">
                            <p class="text-xs">Reservation Today</p>
                            <h4 class="text-2xl">2</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                            <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center justify-center h-24 rounded border border-gray-400">
                    <div class="w-full flex flex-row justify-between px-10">
                        <div class="flex flex-col">
                            <p class="text-xs">Total Reservation</p>
                            <h4 class="text-2xl">10</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="">
                <canvas class="w-1/2 h-1/2" id="orders-chart"></canvas>
            </div>
            <div class="overflow-x-auto sm:rounded-lg py-4">
                <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white ">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for users">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-black rounded-lg">
                    <thead class="text-xs text-black uppercase bg-[#5AB2FF]">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-tl-lg">Reservation By</th>
                            <th scope="col" class="px-6 py-3">Restaurant</th>
                            <th scope="col" class="px-6 py-3">Number Of People</th>
                            <th scope="col" class="px-6 py-3">Create At</th>
                            <th scope="col" class="px-6 py-3">Time Reservation</th>
                            <th scope="col" class="px-6 py-3">Desc</th>
                            <th scope="col" class="px-6 py-3 rounded-tr-lg">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr class="border-b  bg-[#CAF4FF] hover:bg-[#A0DEFF]">
                            <td class="px-6 py-4">{{$order['reservation_by']}}</td>
                            <td class="px-6 py-4">{{$order['restaurant']}}</td>
                            <td class="px-6 py-4">{{$order['number_of_people']}}</td>
                            <td class="px-6 py-4">{{$order['created_at']}}</td>
                            <td class="px-6 py-4">{{$order['time_reservation']}}</td>
                            <td class="px-6 py-4">{{$order['details']}}</td>
                            <td class="px-6 py-4">
                                <button class="btn" type="button">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('orders-chart').getContext('2d');
        const apiUrl = 'http://localhost:8000/api/getorders';

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const labels = [];
                const datasets = [];

                data.forEach(item => {
                    const date = item.created_at.split(' ')[0].split('-')[2]; // extract day of the month
                    labels.push(date);

                    const peopleCount = item.number_of_people;
                    const existingDataset = datasets.find(dataset => dataset.label === 'Jumlah Orang');
                    if (existingDataset) {
                        existingDataset.data[date - 1] = (existingDataset.data[date - 1] || 0) + peopleCount;
                    } else {
                        datasets.push({
                            label: 'Jumlah Orang',
                            data: new Array(31).fill(0),
                            borderWidth: 1
                        });
                        datasets[0].data[date - 1] = peopleCount;
                    }
                });

                const maxDate = Math.max(...data.map(item => parseInt(item.created_at.split('-')[2])));
                const chartData = {
                    labels: Array.from({
                        length: maxDate
                    }, (_, i) => i + 1),
                    datasets
                };

                const options = {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Jumlah Reservasi Bulan Januari',
                            font: {
                                size: 16
                            }
                        },
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: false,
                            }
                        },
                        x: {
                            beginAtZero: true,
                            grid: {
                                display: false,
                            }
                        }
                    }
                };

                const reservasiChart = new Chart(ctx, {
                    type: 'bar',
                    data: chartData,
                    options
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>

</html>