@extends('layout')
@section('content')
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Create New Shoe
    </h2>
</header>

<form method="POST" action="/shoes" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2"
            >Shoe Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
        />
        @error('name')
            <p class="text-red-500 mt-1 text-xs">
                {{$message}}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label
            for="company"
            class="inline-block text-lg mb-2"
            >Company Name</label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
        />
        @error('company')
            <p class="text-red-500 mt-1 text-xs">
                {{$message}}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            >Company Email</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
        />
        @error('email')
            <p class="text-red-500 mt-1 text-xs">
                {{$message}}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="colors" class="inline-block text-lg mb-2">
            Colors
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="colors"
        />
        @error('colors')
            <p class="text-red-500 mt-1 text-xs">
                {{$message}}
            </p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Logo
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
        />
        @error('logo')
            <p class="text-red-500 mt-1 text-xs">
                {{$message}}
            </p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="description"
            class="inline-block text-lg mb-2"
        >
            Product Description
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="description"
            rows="5"
        ></textarea>
        @error('description')
            <p class="text-red-500 mt-1 text-xs">
                {{$message}}
            </p>
        @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-cyan-500 text-white rounded py-2 px-4 hover:bg-blue-500"
        >
            Create Shoe
        </button>

        <a href="{{url()->previous()}}" class="text-black ml-4"> Back </a>
    </div>
</form>
</div>
@endsection