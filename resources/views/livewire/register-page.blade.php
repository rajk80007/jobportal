<div>
    @if ($errmessage)
        <h1 class="text-red-500 text-center text-2xl font-bold flex justify-center items-center bg-white w-full">
            {{ $errmessage }} <span
                class="text-red-500 cursor-pointer border-2 border-red-500 px-2 rounded-md mx-2 text-md hover:bg-red-500 hover:text-white"
                wire:click="close">X</span> </h1>
    @elseif($message)
        <h1 class="text-green-500 text-center text-2xl font-bold flex justify-center items-center bg-white w-full">
            {{ $message }} <span
                class="text-green-500 cursor-pointer border-2 border-green-500 px-2 rounded-md mx-2 text-md hover:bg-green-500 hover:text-white"
                wire:click="close">X</span> </h1>
    @endif
    <div class="w-full px-2 md:w-[95%] grid grid-cols-2 mx-auto h-full lg:h-[70vh] my-2">


        <div
            class="w-[99%] bg-url('/images/register.png') h-[88vh] col-span-2 lg:col-span-1 hover:border-2 hover:border-white hvoer:scale-90">
            <img src="/images/registerpic.jpg" alt="registerImage" class="w-full h-full">

        </div>
        <div
            class="w-[99%] bg-blue-600 h-[88vh] col-span-2 lg:col-span-1 rounded-md hover:border-2 hover:border-white hvoer:scale-90">
            <h3 class="text-white font-bold text-3xl text-center my-16">Welcome!</h3>
            <form action="#" wire:submit.prevent="register"
                class="mx-auto mb-0 mt-8 max-w-md space-y-4 flex justify-center flex-col items-center py-2 px-2">
                <input type="text" wire:model="name"
                    class="w-full rounded-full border-gray-200 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm lg:w-[80%] mt-2 lg:hover:w-[85%] duration-200 transition-all ease-in-out"
                    placeholder="Your Name">
                <input type="text" wire:model="email"
                    class="w-full rounded-full border-gray-200 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm lg:w-[80%] my-2
            lg:hover:w-[85%] duration-200 transition-all ease-in-out"
                    placeholder="Your e-mail">
                <input type="Password" wire:model="password"
                    class="w-full rounded-full border-gray-200 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm lg:w-[80%] my-2 lg:hover:w-[85%] duration-200 transition-all ease-in-out"
                    placeholder="Your Password">
                <input type="Password" wire:model="password_confirmation"
                    class="w-full rounded-full border-gray-200 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm lg:w-[80%] my-2 lg:hover:w-[85%] duration-200 transition-all ease-in-out"
                    placeholder="Confirm Your Password">

                <button type="submit"
                    class="w-full rounded-full bg-teal-500 hover:bg-teal-600 px-4 py-2 md:text-lg pe-12 text-sm shadow-sm md:w-[80%] my-2 hover:text-white hover:font-bold hvoer:border-white hover:border-2 hover:w-[85%] duration-200 transition-all ease-in-out">Register</button>

                <p class="text-white">Already have an account? <a href="/login"
                        class="underline font-bold hover:scale-105" wire:navigate>Sign in</a></p>

            </form>
        </div>

    </div>
</div>
