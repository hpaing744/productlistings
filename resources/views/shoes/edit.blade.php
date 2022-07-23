@extends('layout')
@section('content')
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Edit Shoe
    </h2>
    <p class="mb-4">Edit: {{$shoe->name}}</p>
</header>

<form method="POST" action="/shoes/{{$shoe->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2"
            >Shoe Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            value="{{$shoe->name}}"
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
            value="{{$shoe->company}}"
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
            value="{{$shoe->email}}"
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
            value="{{$shoe->colors}}"
        />
        @error('colors')
            <p class="text-red-500 mt-1 text-xs">
                {{$message}}
            </p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
        />
        <img class="mx-auto"
                 src={{$shoe->logo ? asset('storage/'.$shoe->logo) :  asset('images/logo.jpg')}}
                 alt="" width="142" height="95" />
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
            Shoe Description
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
            Update Shoe
        </button>

        <a href="{{url()->previous()}}" class="text-black ml-4"> Back </a>
    </div>
</form>
</div>
@endsection