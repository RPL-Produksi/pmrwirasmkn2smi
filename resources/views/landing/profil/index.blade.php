@extends('layouts.app')

@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')
    
    @include('landing.profil.section.sejarah')
    @include('landing.profil.section.lambang')
    @include('landing.profil.section.struktur')
    

    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
