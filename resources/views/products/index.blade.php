@extends('layout')
@section('content')
<div >
    <h1 class="text-center text-6xl font-bold uppercase text-cyan-500">
        Welcome to <span class="text-black">Products Page</span>
    </h1>
</div>
<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a>
@include('_search')
<div class="grid grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">
@foreach ($products as $product)
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="mx-auto pb-10">
        <a href="{{asset('storage/'.$product->logo)}}">
        <img 
        class="mx-auto"
        src={{$product->logo ? asset('storage/'.$product->logo) :  asset('images/logo.jpg')}}
        alt="" width="142" height="95"/>
        </a>
        <div class="mt-4 text-center">
            <h3 class="text-2xl">{{$product->name}}</h3>
            <div class="text-xl font-bold mb-4">{{$product->company}}</div>
            <div class="mt-2 mb-4 mx-16" ><x-product-colors :colorsmth="$product->colors"/></div>
            <a href="/products/{{$product->id}}" class="mt-6 underline ">Click for more Details</a>
        </div>
    </div>
</div>
@endforeach
</div>
<div class="mt-6 p-4">
    {{$products->links()}}
</div>
<div>
    <a
        href="/create"
        class=" left-50 bg-cyan-500 text-white py-2 px-5"
        >Post New Products
    </a>
    </div>
@endsection
