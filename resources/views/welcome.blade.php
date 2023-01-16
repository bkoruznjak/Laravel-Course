<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 w-full h-screen">
        <nav class="flex flex-row">
            <a href="/">
                <div class="bg-gray-100 w-40 h-40">
                    <x-application-logo>

                    </x-application-logo>
                </div>

            </a>

            <div>
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </nav>
    </div>

    <div class="flex flex-col bg-pink-400 w-full h-screen">


    </div>
</x-guest-layout>
