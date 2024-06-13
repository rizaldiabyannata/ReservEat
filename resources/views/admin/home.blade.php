<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/typeit@8.8.3/dist/index.umd.js"></script>
    @vite('resources/css/app.css')
    <title>Dashboard admin</title>
</head>

<body class="font-['Montserrat']">
    <x-side-bar></x-side-bar>
    <div class="lg:ml-64">
        <x-admin-nav router='admin / home' titlepage='Dashboard' photo="{{ URL::to('/assets/profiles/' . $authUser['photo'])}}"></x-admin-nav>
        <div class="p-4">
            <div class="mb-4">
                <h1 class="font-['Montserrat'] font-bold text-lg lg:hidden" id='elementor'></h1>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4 lg:px-0">
                <div class="flex items-center justify-center h-16 lg:h-24 rounded-lg bg-slate-200 shadow-sm shadow-slate-400">
                    <div class="w-full flex flex-row justify-between items-center px-4 py-2 lg:px-10">
                        <div class="flex flex-col">
                            <p class="text-xs text-black">Jumlah User</p>
                            <h4 class="text-lg lg:text-2xl text-black">{{ @count($users)}}</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 lg:w-12 lg:h-12">
                            <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center justify-center h-16 lg:h-24 rounded-lg bg-slate-200 shadow-sm shadow-slate-400">
                    <div class="w-full flex flex-row justify-between items-center px-4 py-2 lg:px-10">
                        <div class="flex flex-col">
                            <p class="text-xs text-black">Jumlah Order</p>
                            <h4 class="text-base lg:text-2xl text-black">34</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 lg:w-12 lg:h-12">
                            <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center justify-center h-16 lg:h-24 rounded-lg bg-slate-200 shadow-sm shadow-slate-400">
                    <div class="w-full flex flex-row justify-between items-center px-4 py-2 lg:px-10">
                        <div class="flex flex-col">
                            <p class="text-xs text-black">Jumlah Restaurant</p>
                            <h4 class="text-base lg:text-2xl text-black">14</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 lg:w-12 lg:h-12">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>

                    </div>
                </div>
                <div class="flex items-center justify-center h-16 lg:h-24 rounded-lg bg-slate-200 shadow-sm shadow-slate-400">
                    <div class="w-full flex flex-row justify-between items-center px-4 py-2 lg:px-10">
                        <div class="flex flex-col">
                            <p class="text-xs text-black">Reservation Today</p>
                            <h4 class="text-base lg:text-2xl text-black">4</h4>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 lg:w-12 lg:h-12">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-center items-center lg:space-x-10">
                <div class="flex items-center justify-center w-full mb-4 p-2 rounded-lg border">
                    <canvas class="w-full" id="reservasiChart"></canvas>
                </div>
                <div class="flex items-center justify-center w-full mb-4 p-2 rounded-lg border">
                    <canvas class="w-full" id="reservasiJanuari"></canvas>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mt-8">
                <h1 class="font-bold text-2xl mb-4">List Restaurant</h1>
                <div class="overflow-x-auto w-full">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-slate-200 text-black">
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Phone</th>
                            </tr>
                        </thead>
                        <tbody id="restaurantList"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        const ctx = document.getElementById('reservasiChart').getContext('2d');
        const ctxBar = document.getElementById('reservasiJanuari').getContext('2d');

        const data = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: '',
                data: [10, 150, 200, 180, 220, 250, 280, 300, 250, 220, 200, 180],
                borderWidth: 1,
                borderColor: '#37b9f1'
            }]
        };
        const dataBar = {
            labels: [1, 3, 5, 8, 10, 12, 14, 16, 18, 10],
            datasets: [{
                label: '',
                data: [4, 2, 6, 3, 5, 2, 4, 3, 2, 3],
                borderWidth: 1,
                borderColor: '#37b9f1',
                backgroundColor: 'rgb(135, 57, 249)',
            }]
        };

        const options = {
            plugins: {
                title: {
                    display: true,
                    text: 'Jumlah Reservasi Bulanan',
                    font: {
                        size: 16
                    },
                },
                legend: {
                    display: false,
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
                },
            }
        };
        const optionsBar = {
            plugins: {
                title: {
                    display: true,
                    text: 'Jumlah Reservasi Juni',
                    font: {
                        size: 16
                    },
                },
                legend: {
                    display: false,
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
                },
            }
        };

        const reservasiChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });

        const reservasiJanuari = new Chart(ctxBar, {
            type: 'bar',
            data: dataBar,
            options: optionsBar
        });

        async function getRestaurants() {
            try {
                const response = await fetch('http://localhost:8000/api/getrestaurants');
                const data = await response.json();
                const restaurantList = document.getElementById('restaurantList');
                restaurantList.innerHTML = '';

                data.forEach(restaurant => {
                    const row = document.createElement('tr');
                    row.classList.add('bg-white', 'hover:bg-[#F2F5F5]');

                    const nameCell = document.createElement('td');
                    nameCell.classList.add('px-4', 'py-2');
                    nameCell.textContent = restaurant.name;

                    const phoneCell = document.createElement('td');
                    phoneCell.classList.add('px-4', 'py-2');
                    phoneCell.textContent = restaurant.phone_number;

                    row.appendChild(nameCell);
                    row.appendChild(phoneCell);

                    restaurantList.appendChild(row);
                });
            } catch (error) {
                console.error(error);
            }
        }

        async function getSessionData() {
            try {
                const response = await fetch('http://localhost:8000/api/getsessiondata');
                const data = await response.json();
                return data;
            } catch (error) {
                console.error(error);
            }
        }

        document.addEventListener("DOMContentLoaded", async function() {
            const sessionData = await getSessionData();
            if (sessionData) {
                new TypeIt("#elementor", {
                    strings: ["Welcome to dashboard, " + sessionData.name],
                    loop: true,
                }).go();
            } else {
                console.error("Session data not available");
            }
            await getRestaurants();
        });
    </script>
</body>

</html>