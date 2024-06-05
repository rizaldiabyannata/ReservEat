<script src="https://unpkg.com/typeit@8.8.3/dist/index.umd.js"></script>
<div class="flex flex-row justify-between items-center mb-6 px-6 py-4 bg-[#F2F5F5] shadow-lg">
    <div class="flex flex-col">
        <p class="text-sm">{{$router}}</p>
        <h2 class="font-bold">{{$titlepage}}</h2>
    </div>
    <div class="flex flex-row space-x-4">
        <div class="w-40 h-10">
            <h1 id='element'></h1>
        </div>
    </div>
</div>

<script>
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