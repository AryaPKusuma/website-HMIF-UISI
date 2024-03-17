@extends('partials.layout')

@section('tittle', 'Home')

@section('content')
    <section
        class="mt-16 py-16 flex flex-1 items-center bg-center bg-cover bg-blend-overlay bg-fixed bg-black/50"
        style="background-image: url('{{ asset('img/hero_image.jpg') }}');">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-left sm:text-center lg:py-20 lg:px-12">
            <h1 class="mb-4 text-4xl font-bold leading-none md:text-6xl lg:text-7xl text-white">
                HIMPUNAN MAHASISWA <br> <span
                    class="bg-gradient-to-r from-indigo-600 to-cyan-500 inline-block text-transparent bg-clip-text">INFORMATIKA</span>
            </h1>
            <p class="mb-12 text-lg font-semibold text-gray-200 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-300">
                Universitas Internasional Semen Indonesia</p>
            <div class="hidden sm:block sm:flex-row sm:justify-center">
                <a href="#tentang" aria-current="page"
                    class="inline-flex justify-center items-center py-3 px-3 text-base font-medium text-center text-white rounded-full border-2 bg-transparent hover:bg-white">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19V5m0 14-4-4m4 4 4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
