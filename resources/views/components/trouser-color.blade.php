@props(['colorsmth'])


@php
    $colors=explode(',',$colorsmth)
@endphp

<ul class="flex justify-center">
    @foreach ($colors as $color)
        <li class="flex items-center justify-center bg-sky-200 text-black rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/trouser/?color={{$color}}">{{$color}}</a>
        </li>
    @endforeach
</ul>