<div class="w-full px-2 md:w-[95%] grid grid-cols-2 mx-auto h-full lg:h-[70vh] my-2">
    <div class="w-[99%] bg-url('/images/register.png') h-[88vh] col-span-2 lg:col-span-1 hover:border-2 hover:border-white hvoer:scale-90">
        <img src="/images/registerpic.jpg" alt="registerImage" class="w-full h-full">

    </div>
    <div class="w-[99%] bg-blue-600 h-[88vh] col-span-2 lg:col-span-1 rounded-md hover:border-2 hover:border-white hvoer:scale-90">
        <h3 class="text-white font-bold text-3xl text-center my-16">Welcome!</h3>
        <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4 flex justify-center flex-col items-center py-2 px-2">
            <input type="text" class="w-full rounded-full border-gray-200 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm lg:w-[80%] mt-2 lg:hover:w-[85%] duration-200 transition-all ease-in-out" placeholder="Your Name">
            <input type="text" class="w-full rounded-full border-gray-200 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm lg:w-[80%] my-2 
            lg:hover:w-[85%] duration-200 transition-all ease-in-out" placeholder="Your e-mail">
            <input type="Password" class="w-full rounded-full border-gray-200 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm lg:w-[80%] my-2 lg:hover:w-[85%] duration-200 transition-all ease-in-out" placeholder="Your Password">

            <button type="submit" class="w-full rounded-full bg-teal-500 hover:bg-teal-600 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm md:w-[80%] my-2 hover:text-white hover:font-bold hvoer:border-white hover:border-2 hover:w-[85%] duration-200 transition-all ease-in-out">Register</button>

            <p class="text-white">Already have an account? <a href="/login/{{3}}" class="underline font-bold hover:scale-105" wire:navigate>Sign in</a></p>

        </form>
    </div>
   
</div>
