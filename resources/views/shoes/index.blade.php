@extends('layout')
@section('content')
<div >
    <h1 class="text-center text-6xl font-bold uppercase text-cyan-500">
        Welcome to <span class="text-black">Shoes Page</span>
    </h1>
</div>
<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a>
@include('_shoesearch')
<div class="grid grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">
@foreach ($shoes as $shoe)
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="mx-auto pb-10">
        <a href="{{asset('storage/'. $shoe->logo)}}">
        <img 
        class="mx-auto"
        src={{$shoe->logo ? asset('storage/'.$shoe->logo) :  asset('images/logo.jpg')}}
        alt="" width="142" height="95" />
        </a>
        <div class="mt-4 text-center">
            <h3 class="text-2xl">{{$shoe->name}}</h3>
            <div class="text-xl font-bold mb-6">{{$shoe->company}}</div>
            <div class="mt-2 mb-10"><x-shoe-colors :colorsmth="$shoe->colors"/></div>
            <a href="/shoes/{{$shoe->id}}" class="mt-10 underline text-bold">Click for more Details</a>
        </div>
    </div>
    
</div>
@endforeach
</div>
<div class="mt-3 p-4">
    {{$shoes->links()}}
</div>
<div>
    <a
        href="/shoecreate"
        class=" left-50 bg-cyan-500 text-white py-2 px-5"
        >Post New Shoes
    </a>
</div>
@endsection
