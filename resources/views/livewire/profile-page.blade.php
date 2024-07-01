<div>
    <div class="p-4 md:w-[60%] mx-auto mt-8 mb-8 max-w-md bg-blue-600 text-white">

        <h2 class="text-2xl font-bold mb-4 text-center">Profile Details</h2>
        <form action="" class="mx-auto mb-0 mt-8 max-w-md space-y-4" wire:submit.prevent="updateProfile">
            <div class="my-2 flex justify-between">
                <label for="name" class="font-bold py-1">Name :</label>
                <input type="text" id="name" class="px-2 py-1 rounded-md w-[80%] bg-gray-500"
                    placeholder="Your Name" wire:model="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="my-2 flex justify-between">
                <label for="email" class="font-bold py-1">Email :</label>
                <input type="text" id="email" class="px-2 py-1 rounded-md w-[80%] bg-gray-500"
                    placeholder="Your Email" wire:model="email" value="{{ Auth::user()->email }}">
            </div>
            <div class="my-2 flex justify-between">
                <label for="image" class="font-bold py-1">Profile Image :</label>
                <input type="file" id="image" wire:model="image">
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="my-2 flex justify-between">
                <label for="phone" class="font-bold py-1">Phone :</label>
                <input type="text" id="phone" class="px-2 py-1 rounded-md w-[80%] bg-gray-500"
                    placeholder="Your Phone" wire:model="name" value="{{ Auth::user()->phone }}">
            </div>
            <div class="ml-12 my-2 flex justify-between text-white font-bold">
                (examples : Basic Computer, MS-Office, HTML, Advanced Excel, Hindi Typing)
            </div>
            <div class="my-2 flex justify-between">
                <label for="skills" class="font-bold py-1">Skills :</label>
                <input type="text" id="skills" class="px-2 py-1 rounded-md w-[80%] bg-gray-500"
                    placeholder="Your Phone" wire:model="name" value="{{ Auth::user()->skills }}">
            </div>
            <div class="my-2 flex justify-between">
                <label for="history" class="font-bold py-1 w-[11%]">Working History </label>
                <textarea type="text" id="skills" class="px-2 py-1 rounded-md w-[80%] bg-gray-500"
                    placeholder="Your Phone" wire:model="name" value="{{ Auth::user()->history }}">{{ Auth::user()->history }}</textarea>
            </div>
            <div class="my-2 flex justify-between">
                <label for="experience" class="font-bold py-1">Experience :</label>
                <input type="number" id="experience" class="px-2 py-1 rounded-md w-[30%] bg-gray-500"
                    placeholder="Your Phone" wire:model="name" value="{{ Auth::user()->experience }}">

                <span class="text-sm mr-[20%] text-white font-bold">(year/s)</span>
            </div>
            

            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md w-full hover:bg-blue-800 hover:border-white hover:border-2 hover:font-bold">Save</button>
        </form>
        <a href="/dashboard" wire:navigate class="text-center w-[100%] block mt-5 hover:font-bold hover:bg-blue-300 hover:border-2 hover:border-blue-500"> Skipp for now >> </a>
    </div>
</div>
