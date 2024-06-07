<script src="https://unpkg.com/typeit@8.8.3/dist/index.umd.js"></script>
<div class="w-full flex flex-row justify-between items-center mb-6 lg:px-6 py-4 bg-[#F2F5F5] shadow-lg">
    <button id="mobile-nav-toggle" onclick="open()" class="lg:hidden z-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    <div class="flex flex-col justify-end lg:justify-start">
        <p class="text-sm">{{$router}}</p>
        <h2 class="font-bold">{{$titlepage}}</h2>
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

    function open() {
        mobileNav.classList.add('block');
        mobileNavToggle.setAttribute('onclick', 'close()');
    }

    function close() {
        mobileNav.classList.remove('block');
        mobileNavToggle.setAttribute('onclick', 'open()');
    }


    let sessionData;

    async function getSessionData() {
        try {
            const response = await fetch('http://localhost:8000/api/getsessiondata');
            const data = await response.json();
            console.log(data.name);
            return data;
        } catch (error) {
            console.error(error);
        }
    }

    document.addEventListener("DOMContentLoaded", async function() {
        sessionData = await getSessionData();
        if (sessionData) {
            new TypeIt("#element", {
                strings: ["Welcome to dashboard, " + sessionData.name],
                loop: true,
            }).go();
        } else {
            console.error("Session data not available");
        }
    });
</script>