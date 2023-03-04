@props(['trigger'])

<div x-show="{{$trigger}}" @click.self="{{$trigger}} = !{{$trigger}}"
    @keydown.escape.window="{{$trigger}} = !{{$trigger}}"
    class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full">
    <div {{ $attributes->merge(['class' => ' bg-green-500 m-auto rounded-xl shadow-2xl p-8'])}}>
        {{$slot }}
    </div>
</div>