@extends('layouts.app')

@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section class="relative bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">PMR Wira SMKN 2 Sukabumi</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Organisasi yang berlandaskan kepedulian, solidaritas, dan pengabdian.
                Bersama kami, jadilah bagian dari generasi muda yang siap menolong sesama dan bangga berprestasi.
            </p>
        </div>
    </section>

    @include('landing.profil.section.sejarah')
    @include('landing.profil.section.lambang')
    @include('landing.profil.section.struktur')


    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
