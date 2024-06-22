@extends('frontend.layouts.app')

@section('title')
    Kalkulator Persamaan Linear & Kuadrat <br>
    JEFFRY - NIM 411232050
@endsection

@section('_konten_')
    <div class="my-5 mx-3">

        <h2 style="text-shadow:
        -1px -1px 0 #000,
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000; font-size:29px" class="mb-4 text-white">@yield('title')</h2>

        @include('frontend.pages.kalkulus.partials._form')

        <div id="result" class="mt-4"></div>

    </div>
@endsection

@push('addScript')
    @include('frontend.pages.kalkulus.partials._script')
@endpush
