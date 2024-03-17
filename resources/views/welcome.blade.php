<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>HMIF</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="latte">

    <header>
        <nav
            class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('img/logo_hmif.png') }}" class="h-8" alt="HMIF Logo">
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap text-blue-600 dark:text-blue-500">HMIF</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="hidden sm:block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Contact Us
                    </button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#tentang"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700
                                relative cursor-pointer before:bg-blue-500 before:absolute before:-bottom-1 before:block before:h-[2px] before:w-full before:origin-bottom-right before:scale-x-0 before:transition before:duration-300 before:ease-in-out hover:before:origin-bottom-left hover:before:scale-x-100
                                ">Tentang</a>
                        </li>
                        <li>
                            <a href="#tujuan"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700
                                relative cursor-pointer before:bg-blue-500 before:absolute before:-bottom-1 before:block before:h-[2px] before:w-full before:origin-bottom-right before:scale-x-0 before:transition before:duration-300 before:ease-in-out hover:before:origin-bottom-left hover:before:scale-x-100
                                ">Tujuan</a>
                        </li>
                        <li>
                            <a href="#divisi"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 
                                relative cursor-pointer before:bg-blue-500 before:absolute before:-bottom-1 before:block before:h-[2px] before:w-full before:origin-bottom-right before:scale-x-0 before:transition before:duration-300 before:ease-in-out hover:before:origin-bottom-left hover:before:scale-x-100
                                ">Divisi</a>
                        </li>
                        <li>
                            <a href="#contact"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 
                                relative cursor-pointer before:bg-blue-500 before:absolute before:-bottom-1 before:block before:h-[2px] before:w-full before:origin-bottom-right before:scale-x-0 before:transition before:duration-300 before:ease-in-out hover:before:origin-bottom-left hover:before:scale-x-100
                                ">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section
        class="mt-16 sm:h-screen py-16 flex flex-1 items-center bg-center bg-cover bg-blend-overlay bg-fixed bg-black/50"
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
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19V5m0 14-4-4m4 4 4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="tentang" class="bg-white dark:bg-gray-900">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full h-auto dark:block rounded-lg shadow-xl dark:shadow-gray-800"
                src="https://source.unsplash.com/random/" alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Tentang HMIF UISI
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Himpunan Mahasiswa Informatika
                    Universitas Internasional Semen Indonesia adalah organisasi mahasiswa tingkat prodi Informatika yang
                    berfokus pada
                    mengembangkan minat dan bakat di bidang non-akademik, serta melaksanakan berbagai
                    kegiatan kemahasiswaan.</p>
            </div>
        </div>
    </section>

    <section id="tujuan" class="bg-white dark:bg-gray-800">

        <div class="px-4 py-12 md:py-16 lg:px-12 lg:py-20 lg:grid lg:grid-cols-3 gap-4 items-center">

            <div class="lg:col-span-1">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-4xl lg:text-4xl sm:text-center lg:text-left dark:text-white">
                    Tujuan HMIF
                </h1>
                <p class="font-medium text-gray-500 md:text-lg sm:text-center lg:text-left dark:text-gray-400">
                    kunci untuk mencapai kesuksesan dan pertumbuhan yang berkelanjutan
                </p>
            </div>

            <div class="lg:col-span-2 grid grid-cols sm:grid-cols-2 gap-4 py-6">
                <div
                    class="bg-gray-900 p-6 text-gray-400 hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg border-solid border border-gray-700">
                    <p>
                        Menciptakan Mahasiswa Informatika UISI yang berkualitas, Inovatif, dan siap bersaing dalam
                        dunia kerja.
                    </p>
                </div>

                <div
                    class="bg-gray-900 p-6 text-gray-400 hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg border-solid border border-gray-700">
                    <p>
                        Menumbuhkan jiwa entrepreneurship bagi mahasiswa informatika UISI
                    </p>
                </div>

                <div
                    class="bg-gray-900 p-6 text-gray-400 hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg border-solid border border-gray-700">
                    <p>Menjalin hubungan yang baik dan berkontribusi aktif dalam kegiatan kemasyarakatan yang
                        berasaskan
                        kekeluargaan</p>
                </div>

                <div
                    class="bg-gray-900 p-6 text-gray-400 hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg border-solid border border-gray-700">
                    <p>
                        Mewadahi, memproses, serta mengimplementasikan potensi dan kompetensi mahasiswa informatika UISI
                    </p>
                </div>
            </div>

        </div>

    </section>

    <section id="visiMisi" class="bg-white dark:bg-gray-900">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full md:hidden rounded-lg shadow-xl dark:shadow-gray-800"
                src="{{ asset('img/visiMisiSmall.jpg') }}" alt="Visi Misi Image">
            <img class="w-full hidden md:block rounded-lg shadow-xl dark:shadow-gray-800"
                src="{{ asset('img/visiMisiLg.jpg') }}" alt="Visi Misi Image">
            <div class="mt-6 md:mt-0">
                <h2
                    class="mb-4 md:mb-8 text-4xl tracking-tight text-center font-extrabold text-gray-900 dark:text-white">
                    Visi &
                    Misi HMIF</h2>
                <br>
                <h3 class="text-2xl mb-4 font-bold dark:text-white">Visi</h3>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    "HMIF sebagai katalisator unggul dalam Harmonis"
                </p>

                <h3 class="text-2xl mb-4 font-bold dark:text-white">Misi</h3>
                <article>
                    <ol
                        class="ps-5 mt-2 space-y-2 text-left list-disc font-light text-gray-500 md:text-lg dark:text-gray-400">
                        <li>Membangun HMIF sebagai rumah aspiratif, kolaboratif, dan harmoni</li>
                        <li>Mengoptimalisasi inovasi dan potensi anggota HMIF berdasarkan minat dan bakatnya.
                        </li>
                        <li>Mengembangkan wadah untuk berkarya sebagai bentuk aktualisasi diri yang
                            berasaskan profesionalitas.
                        </li>
                        <li>
                            Mengoptimalkan peran HMIF yang aktif sebagai mediator aspirasi Mahasiswa dengan penuh rasa
                            kekeluargaan.
                        </li>
                        <li>
                            Mengembangkan peran HMIF dalam memfasilitasi yang mendorong peningkatan kreatifitas dan
                            prestasi serta jiwa kompetitif Mahasiswa.
                        </li>
                        <li>Menumbuh kembangkan rasa kekeluargaan didalam HMIF dan Mahasiswa Informatika agar
                            terciptanya keselarasan dan lingkungan yang harmonis.</li>
                        <li>
                            Menjalin dan memperluas relasi dengan pihak internal dan external informatika UISI demi
                            mendorong jiwa sosial Mahasiswa.
                        </li>
                    </ol>
                </article>
            </div>
        </div>
    </section>

    {{-- <section id="visi-misi">
        <div class="py-6 px-4 mx-auto lg:py-20 lg:px-12 text-center bg-white dark:bg-gray-900">

            <header>
                <h1
                    class="mb-12 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                    Visi & Misi <br> HMIF
                </h1>
            </header>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse"
                    id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                            aria-controls="about" aria-selected="false"
                            class="inline-block text-xl w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Visi</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                            aria-controls="faq" aria-selected="false"
                            class="inline-block text-xl w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Misi</button>
                    </li>
                </ul>

                <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about"
                        role="tabpanel" aria-labelledby="about-tab">

                        <article>
                            <blockquote class="text-xl text-center italic font-semibold text-gray-900 dark:text-white">
                                <p>
                                    "HMIF sebagai katalisator unggul dalam Harmonis"
                                </p>
                            </blockquote>
                        </article>

                    </div>
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="faq"
                        role="tabpanel" aria-labelledby="faq-tab">
                        <div id="accordion-flush" data-accordion="collapse"
                            data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                            data-inactive-classes="text-gray-500 dark:text-gray-400">

                            <article>
                                <ol
                                    class="ps-5 mt-2 space-y-1 text-left list-decimal list-insidetext-gray-900 dark:text-white">
                                    <li>Membangun HMIF sebagai rumah aspiratif, kolaboratif, dan harmoni</li>
                                    <li>Mengoptimalisasi inovasi dan potensi anggota HMIF berdasarkan minat dan bakatnya
                                    </li>
                                    <li>Mengembangkan wadah untuk berkarya sebagai bentuk aktualisasi diri yang
                                        berasaskan profesionalitas</li>
                                </ol>
                            </article>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section id="divisi" class=" bg-center bg-cover bg-blend-overlay bg-fixed bg-black/75"
        style="background-image: url('{{ asset('img/hero_image.jpg') }}');">
        <div class="grid sm:grid-cols-3 gap-4 p-12 lg:py-20">
            <div class="flex items-center">
                <h1 class="text-white text-4xl mb-8 tracking-tight font-extrabold dark:text-white">Divisi HMIF</h1>
            </div>
            <div
                class="border border-gray-400 py-20 hover:border-gray-50  hover:text-gray-50 rounded-lg text-gray-300 flex items-center justify-center ">
                <h5 class="text-4xl tracking-widest font-medium">HUMAS</h5>
            </div>
            <div
                class="border border-gray-400 py-20 hover:border-gray-50  hover:text-gray-50 rounded-lg text-gray-300 flex items-center justify-center ">
                <h5 class="text-4xl tracking-widest font-medium">PSDM</h5>
            </div>
            <div
                class="border border-gray-400 py-20 hover:border-gray-50  hover:text-gray-50 rounded-lg text-gray-300 flex items-center justify-center ">
                <h5 class="text-4xl tracking-widest font-medium">KOMINFO</h5>
            </div>
            <div
                class="border border-gray-400 py-20 hover:border-gray-50  hover:text-gray-50 rounded-lg text-gray-300 flex items-center justify-center ">
                <h5 class="text-4xl tracking-widest font-medium">RISTEK</h5>
            </div>
            <div
                class="border border-gray-400 py-20 hover:border-gray-50  hover:text-gray-50 rounded-lg text-gray-300 flex items-center justify-center ">
                <h5 class="text-4xl tracking-widest font-medium">KWU</h5>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-800">

        <div class="px-4 py-8 sm:py-12 text-center items-center">
            <h2
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                Dokumentasi Kegiatan</h2>
            <p class="mb-6 text-lg font-light text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Berikut
                ini
                Beberapa dokumentasi kegiatan yang kami jalankan.</p>


            <div class="grid grid-cols-3 gap-1">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('img/IMG_6985(1).jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('img/IMG_7167(1).jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('img/IMG_7174(1).jpg') }}" alt="">
                </div>
            </div>

        </div>

    </section>

    <section id="follow" class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="px-4 font-light text-gray-600 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Ikuti Kami
                </h2>
                <p class="mb-4">
                    Follow sosial media kami untuk mendapatkan update terbaru.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <a href="https://www.instagram.com/hmif.uisi/"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white rounded-lg bg-gradient-to-br from-purple-800 via-rose-600 to-yellow-400 focus:ring-4 hover:shadow-rose-500 shadow-md focus:ring-blue-300 dark:focus:ring-blue-900 transition-all duration-500">
                        Instagram
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 bg-black rounded-lg hover:bg-gray-100 dark:text-white hover:dark:text-black dark:hover:shadow-red-600 shadow-md dark:focus:ring-gray-600 transition-all duration-500">
                        Tiktok
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8 px-4">
                <img class="w-full rounded-lg" src="{{ asset('img/ig.jpg') }}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('img/tk.jpg') }}" alt="office content 2">
            </div>
        </div>
    </section>

    <section id="contact" class="bg-white dark:bg-gray-900">
        <div class="pt-12 lg:pt-16 px-8 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Hubungi
                Kami</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Anda punya
                pertanyaan ? atau saran untuk hmif ? Beri tau kami.
            </p>
        </div>

        <div class="grid sm:grid-cols-3 gap-6 px-8 pb-12 lg:pb-16">
            <form action="#" class="space-y-8 sm:col-span-2">
                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="name@gmail.com" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subjek</label>
                    <input type="text" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send
                    message</button>
            </form>

            <div
                class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Email</h5>
                    <a class="mb-4 font-normal text-gray-700 dark:text-gray-400">hmif@uisi.ac.id</a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lokasi</h5>
                    <a href="https://maps.app.goo.gl/oCmHhcXyLjv1jAzE6"
                        class="font-normal text-gray-700 dark:text-gray-400">
                        Kompleks PT. Semen Indonesia, Jl. Veteran, Tuban Barat, Tlogobendung, Kec. Gresik, Kabupaten
                        Gresik, Jawa Timur 61122
                    </a>
                </div>
            </div>

        </div>

    </section>

    <section>
        <div class="h-screen bg-ctp-base flex justify-center mx-auto">
            <h1 class="text-ctp-blue text-center ">CATPPUCCIN</h1>
        </div>
    </section>

    <footer>
        <footer class="p-4 bg-white sm:p-6 dark:bg-gray-900">
            <div class="mx-auto max-w-screen-xl">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="#" class="flex items-center">
                            <img src="{{ asset('img/logo_hmif.png') }}" class="mr-3 h-8" alt="HMIF Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HMIF
                                UISI </span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-12 sm:gap-16">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Halaman
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="https://uisi.ac.id/" class="hover:underline">UISI</a>
                                </li>
                                <li>
                                    <a href="https://if.uisi.ac.id/" class="hover:underline">Informatika UISI</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Ikuti Kami
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="https://www.instagram.com/hmif.uisi/"
                                        class="hover:underline ">Instagram</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline">Tiktok</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                            href="https://flowbite.com" class="hover:underline">RISTEK™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M16.5 7.5l0 .01" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tiktok"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </footer>

</body>

</html>
