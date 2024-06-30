<div class="bg-purple-900 h-16 text-white flex items-center justify-between">
    <div class="px-5 flex-row flex gap-3">

        <img src="./images/hamburger.svg" alt="menu" width="30" height="30" class="cursor-pointer lg:hidden block"
            onclick="toggleMenu()">
        <h3>Navbar</h3>

    </div>
    <ul id="menu"
        class="hidden lg:flex gap-3 flex-col lg:ml-52 lg:flex-row mt-40 md:mt-40 bg-purple-300 lg:bg-transparent lg:mt-0 text-center pb-2 md:pt-0 w-full absolute lg:static lg:w-auto opacity-80 z-10 lg:opacity-100">
        <li><a href="/" wire:navigate class="p-2 hover:font-bold hover:text-red-400 duration-300">Home</a></li>
        <li><a href="/about" wire:navigate class="p-2 hover:font-bold hover:text-red-400 duration-300">About</a></li>
        <li><a href="#" wire:navigate class="p-2 hover:font-bold hover:text-red-400 duration-300">Services</a>
        </li>
        <li><a href="/contact" wire:navigate class="p-2 hover:font-bold hover:text-red-400 duration-300">Contact</a>
        </li>
    </ul>
    <div class="flex gap-2 px-5">
        @if (Auth::check())
            <button
                class="border border-white px-2 lg:px-3 py-1 rounded hover:bg-blue-600 bg-gradient-to-r from-black to-blue-500 hover:scale-105 hover:font-bold duration-400 text-sm lg:text-[0.9rem]">
                <a href="/logout" wire:navigate> Logout </a></button>
        @else
            <button
                class="border border-white px-2 lg:px-3 py-1 rounded hover:bg-blue-600 bg-gradient-to-r from-black to-blue-500 hover:scale-105 hover:font-bold duration-400 text-sm lg:text-[0.9rem]">
                <a href="/login" wire:navigate> Hire Now </a></button>
            <button
                class="border border-white px-2  lg:px-3 py-1 rounded hover:bg-blue-600 bg-gradient-to-r from-blue-500 to-black hover:scale-105 hover:font-bold duration-400 text-sm lg:text-[0.9rem]">
                <a href="/login" wire:navigate> Get a Job </a></button>
            <button
                class="hidden lg:block bg-white text-purple-900 font-bold hover:scale-105 px-3 py-1 rounded text-sm lg:text-[0.8] ">Post
                a Project</button>
        @endif
       
       
    </div>

    <script>
        function toggleMenu() {
            document.getElementById('menu').classList.toggle('hidden');
        }
    </script>
</div>
