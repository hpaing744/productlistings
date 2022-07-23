@props(['sizetrouser'])


@php
    $sizes=explode(',',$sizetrouser)
@endphp

<ul class="flex justify-center">
    @foreach ($sizes as $size)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/trouser/?size={{$size}}">{{$size}}</a>
        </li>
    @endforeach
</ul>