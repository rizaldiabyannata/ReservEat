<div class="flex flex-row justify-between items-center mb-6 px-6 py-4 bg-[#F2F5F5] shadow-lg">
    <div class="flex flex-col">
        <p class="text-sm">{{$router}}</p>
        <h2 class="font-bold">{{$titlepage}}</h2>
    </div>
    <div class="flex flex-row space-x-4">
        <label class="input input-bordered flex items-center gap-2">
            <input type="text" class="grow" placeholder="Search" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
            </svg>
        </label>
        <div class="avatar online">
            <div class="w-12 rounded-full">
                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
            </div>
        </div>
    </div>
</div>