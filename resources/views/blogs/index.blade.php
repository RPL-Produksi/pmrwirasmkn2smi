@extends('layouts.app')

@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <div class="max-w-[85rem] pt-32 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">The Blog</h2>
            <p class="mt-1 text-gray-600">See how game-changing companies are making the most of every
                engagement with Preline.</p>
        </div>

        <div class="grid sm:grid-cols- md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($blogs as $item)
                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-hidden focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5"
                    href="{{ route('blogs.detail', $item->slug) }}">
                    <div class="aspect-w-16 aspect-h-11">
                        <img class="w-full object-cover rounded-xl" src="{{ 'storage/' . $item->thumbnail }}"
                            alt="Blog Image">
                    </div>
                    <div class="my-6">
                        <h3 class="text-xl font-semibold text-gray-800">
                            {{ $item->title }}
                        </h3>
                        <p class="mt-5 text-gray-600">
                            {{ $item->excerpt }}
                        </p>
                    </div>
                    <div class="mt-auto flex items-center gap-x-3">
                        <img class="size-8 rounded-full" src="{{ asset('assets/img/avatar.png') }}" alt="Avatar">
                        <div>
                            <h5 class="text-sm text-gray-800">By {{ $item->user->name }}</h5>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
