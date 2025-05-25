@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Periode Purnawira</h2>
            <p class="mt-1 text-gray-600">Menelusuri perjalanan Purnawira dari tahun ke tahun</p>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6">
            @foreach ($periodes as $item)
                <a class="group flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl hover:shadow-md focus:outline-hidden focus:shadow-md transition"
                    href="{{ route('purnawira.show', $item->tahun) }}">
                    <div class="p-4 md:p-5">
                        <div class="flex justify-between items-center gap-x-3">
                            <div class="grow">
                                <h3 class="group-hover:text-yellow-600 font-semibold text-gray-800">
                                    Periode | {{ $item->tahun }}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    {{ $item->purnawiras_count }} Purna
                                </p>
                            </div>
                            <div>
                                <svg class="shrink-0 size-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
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
