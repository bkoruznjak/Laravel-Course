<div xmlns:x-on="http://www.w3.org/1999/xhtml" xmlns:wire="http://www.w3.org/1999/xhtml"
     class="flex flex-col bg-indigo-900 w-full h-screen"
     x-data="{
            showSubscribe: false,
            showSuccess: false,
        }"
>
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
                We are just checking the <span class="font-bold underline">TALL</span> stack. Would you mind
                subscribing
            </p>
            <x-primary-button
                class="py-3 px-8 bg-red-500 hover:bg-red-600"
                x-on:click="showSubscribe = true"
            >
                Subscribe
            </x-primary-button>
        </div>

    </div>
    <template x-if="true">
        <div
            class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full"
            x-show="showSubscribe"
            x-on:click.self="showSubscribe = false"
            x-on:keydown.escape.window="showSubscribe = false"
        >

            <div class="m-auto bg-pink-400 shadow-2xl rounded-xl p-8">
                <p class="text-white text-5xl font-extrabold text-center">
                    Let's do it
                </p>

                <!-- prevents the page to refresh -->
                <form
                    wire:submit.prevent="subscribe"
                    class="flex flex-col items-center p-24"
                >
                    <x-text-input
                        class="px-5 py-3 w-80 border border-blue-400"
                        type="email"
                        name="email"
                        placeholder="Email address"
                        wire:model="email"
                    >

                    </x-text-input>

                    <span class="text-gray-100 text-xs">
                We will send you a confirmation email.
            </span>

                    <button
                        class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center"
                    >
                        Get In
                    </button>
                </form>

            </div>

        </div>
    </template>

    <template x-if="true">
        <div
            class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full"
            x-show="showSuccess"
            x-on:click.self="showSuccess = false"
            x-on:keydown.escape.window="showSuccess = false"
        >

            <div class="m-auto bg-green-400 shadow-2xl rounded-xl p-8">
                <p class="animate-pulse text-white text-9xl font-extrabold text-center">
                    &check;
                </p>
                <p class="animate-pulse text-white text-5xl font-extrabold text-center">
                    Great!
                </p>

                <p class="text-white text-3xl text-center">
                    See you in your inbox
                </p>
            </div>

        </div>
    </template>
</div>
