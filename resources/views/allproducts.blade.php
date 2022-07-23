@extends('layout')
@section('content')
<div >
    <h1 class="text-center text-6xl font-bold uppercase text-black">
        Welcome to <span class="text-cyan-500">Shop</span>
    </h1>
</div>
<div class="mt-20 mb-20 bg-gray-50 border border-gray-200 rounded p-6">
    <section class="  mx-auto pb-10">
        <img class="mx-auto" src="images/products.jpg" alt="" width="192" height="99" >
    </section>
    <div class="text-center">
        <h3 class="text-2xl">
            <a href="/product" class="underline">Products</a>
        </h3>
    </div>
</div>
<div class="mt-20 mb-20 bg-gray-50 border border-gray-200 rounded p-6">
    <section class="  mx-auto pb-10">
        <img class="mx-auto" src="images/shoes.jpg" alt="" width="192" height="99" >
    </section>
    <div class="text-center">
        <h3 class="text-2xl">
            <a href="/shoe" class="underline">Shoes</a>
        </h3>
    </div>
</div>

<div class="mt-20 mb-20 bg-gray-50 border border-gray-200 rounded p-6">
    <section class="  mx-auto pb-10">
        <img class="mx-auto" src="images/shirts.jpg" alt="" width="192" height="99" >
    </section>
    <div class="text-center">
        <h3 class="text-2xl">
            <a href="/shirt" class="underline">Shirts</a>
        </h3>
    </div>
</div>

<div class="mt-20 mb-20 bg-gray-50 border border-gray-200 rounded p-6">
    <section class="  mx-auto pb-10">
        <img class="mx-auto" src="images/trousers.jpg" alt="" width="192" height="99" >
    </section>
    <div class="text-center">
        <h3 class="text-2xl">
            <a href="/trouser" class="underline">Trousers</a>
        </h3>
    </div>
</div>
@endsection