@extends('layouts.app')
@push('css')
    {{-- This js only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section class="relative min-h-screen bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/img/foto_bersama.jpg') }}');">

        <div class="absolute inset-0 bg-black/60 z-10"></div>

        <div class="relative z-20 flex flex-col justify-center items-center text-white min-h-screen text-center px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">PMR Wira <br>
                SMK Negeri 2 Sukabumi</h1>
            <p class="text-sm md:text-md font-light max-w-2xl mx-auto mb-6">
                PMR Wira SMK Negeri 2 Sukabumi merupakan organisasi siswa yang aktif, terstruktur, dan berorientasi pada
                pengembangan karakter, kedisiplinan, serta kerja sama tim.
            </p>
            <a href="" class=" text-white py-2 px-4 rounded transition duration-300 btn-yellow-to-red"><span
                    class="text font-bold">Get Started</span></a>
        </div>
    </section>

    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
