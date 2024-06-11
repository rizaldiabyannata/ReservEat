<script src="https://unpkg.com/typeit@8.8.3/dist/index.umd.js"></script>
<div class="w-full flex flex-row justify-between items-center mb-6 lg:px-6 py-4 bg-[#F2F5F5] shadow-lg">
    <div class="flex flex-row space-x-4">
        <a href="/admin/myprofile">
            <img id="profile" class="w-12 rounded-full" src="" alt="profile">
        </a>
        <div class="flex flex-col justify-end lg:justify-start">
            <p class="text-sm">{{$router}}</p>
            <h2 class="font-bold">{{$titlepage}}</h2>
        </div>
    </div>
    <div class="flex flex-row space-x-4">
        <div class="hidden lg:block w-40 h-10">
            <h1 id='element'></h1>
        </div>
    </div>
</div>

<div id="mobile-nav" class="bg-gray-200 hidden w-lvw h-lvh top-0 fixed z-40 lg:hidden">
    <button onclick="close()" class="lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</div>

<script>
    let mobileNav = document.getElementById('mobile-nav');
    let mobileNavToggle = document.getElementById('mobile-nav-toggle');
    let sessionData;

    function open() {
        mobileNav.classList.add('block');
        mobileNavToggle.setAttribute('onclick', 'close()');
    }

    function close() {
        mobileNav.classList.remove('block');
        mobileNavToggle.setAttribute('onclick', 'open()');
    }


    async function getSessionData() {
        try {
            const response = await fetch('http://127.0.0.1:8000/api/getsessiondata');
            const data = await response.json();
            if (!data || Object.keys(data).length === 0) {
                console.log('No data available');
                return null;
            }
            console.log('Received data:', data);
            return data;
        } catch (error) {
            console.error('Error fetching data:', error);
            return null;
        }
    }

    document.addEventListener("DOMContentLoaded", async function() {
        sessionData = await getSessionData();
        if (Object.keys(sessionData).length !== 0) {
            console.log('Session data:', sessionData);
            new TypeIt("#element", {
                strings: ["Welcome to dashboard, " + sessionData.name],
                loop: true,
            }).go();

            document.getElementById('profile').src = `{{URL::to('/assets/profiles/${sessionData.photo}')}}`;
        } else {
            console.log('No session data available');
            new TypeIt("#element", {
                strings: ["Welcome to dashboard, Admin"],
                loop: true,
            }).go();
            document.getElementById('profile').classList.add('hidden');
        }
    });
</script>