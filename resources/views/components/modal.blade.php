@props(['trigger'])

<div xmlns:x-on="http://www.w3.org/1999/xhtml"
     class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full"
     x-show="{{$trigger}}"
     x-on:click.self="{{$trigger = false}}"
     x-on:keydown.escape.window="{{$trigger = false}}"
     x-cloak
>
    <div {{$attributes->merge(['class' => 'm-auto bg-gray-200 shadow-2xl rounded-xl p-8'])}}>


        {{$slot}}
    </div>
</div>
