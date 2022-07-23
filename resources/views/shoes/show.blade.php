@extends('layout')
@section('content')
<a href="/shoe" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src={{$shoe->logo ? asset('storage/'.$shoe->logo) :  asset('images/logo.jpg')}}
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$shoe->name}}</h3>
                        <div class="text-xl font-bold mb-4">{{$shoe->company}}</div>
                        <x-product-colors :colorsmth="$shoe->colors" />
                        <div class="border border-gray-200 w-full mt-4 mb-2"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                {{$shoe->name}}'s Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                    {{$shoe->description}}
                                </p>
                                <a
                                    href="mailto:test@test.com"
                                    class="block bg-cyan-500 text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Company
                                </a>
                            </div>
                            <div class="bg-gray-50 border border-gray-200 p-10 rounded mt-4 p-2 flex space-x-6">
                                <a href="/shoes/{{$shoe->id}}/edit">
                                    <i class="fa-solid fa-pencil"></i>
                                    Edit
                                </a>
                                <form method="POST" action="/shoes/{{$shoe->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">
                                    <i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection