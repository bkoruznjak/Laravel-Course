<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 w-full h-screen">
        <nav class="flex flex-row pt-5 justify-between container mx-auto text-indigo-200">
            <a class="text-4xl font-bold" href="/">
                <x-application-logo class="w-16 h-16 fill-current">

                </x-application-logo>
            </a>

            <div class="flex justify-end">
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </nav>

        <div class="flex container mx-auto items-center h-full px-2">
            <div class="flex flex-col w-1/3 items-start">
                <h1 class="text-white font-bold text-5xl leading-tight mb-4">
                    Simple generic landing page to subscribe
                </h1>
                <p class="text-indigo-200 text-xl mb-10">
                    We are just checking the <span class="font-bold underline">TALL</span> stack. Would you mind subscribing
                </p>
                <x-primary-button class="py-3 px-8 bg-red-500 hover:bg-red-600">
                    Subscribe
                </x-primary-button>
            </div>

        </div>
    </div>

    <div class="flex flex-col bg-pink-400 w-full h-screen">


    </div>
</x-guest-layout>
