<div x-data="{showSubscribe: false}" class="flex flex-col bg-indigo-900 w-100 h-screen">
    <nav class="flex pt-5 justify-between container mx-auto text-indigo-200">
        <a class="text-4xl font-bo" href="/">
            <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
        </a>
        <div class="flex justify-end">
            @auth
            <a href="{{ route('dashboard')}}">Dashboard</a>
            @else
            <a href="{{ route('login')}}">Login</a>
            @endauth
        </div>
    </nav>
    <div class="flex container mx-auto items-center h-full">
        <div class="flex flex-col w-1/3 items-start">
            <h1 class="text-white font-bold text-5xl leading-tight mb-4">Simple generic langing page to subscribe
            </h1>
            <p class="text-indigo-200 text-xl mb-10">We are just checking the <span
                    class="font-bold underline">Tall</span> stack.</p>
            <x-primary-button @click="showSubscribe = !showSubscribe" class="py-3 px-8">Subscribe
            </x-primary-button>
        </div>
    </div>
    <div x-show="showSubscribe" @click.self="showSubscribe = !showSubscribe"
        @keydown.escape.window="showSubscribe = !showSubscribe"
        class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full">
        <div class=" bg-pink-500 m-auto rounded-xl shadow-2xl p-8">
            <p class="text-white text-5xl font-extrabold text-center">Let's Do It!</p>
            <form wire:submit.prevent="subscribe" class="flex flex-col items-center p-24">
                <x-text-input wire:model="email" class="px-5 py-3 w-80 border border-blue-400" type="email" name="email"
                    placeholder="Email Address"></x-text-input>
                <span class="text-gray-100 text-xs">We will send you a confirmation email</span>
                <x-primary-button class="px-2 py-3 mt-5 w-80 bg-blue-500 justify-center">Get In</x-primary-button>
            </form>
        </div>
    </div>
</div>