@extends('layouts.main')
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@push('style2')
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper.mySwipers .swiper-slide {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 18px !important;
            font-size: 22px !important;
            font-weight: bold !important;
            color: #fff !important;
            width: 80% !important;
            height: 80% !important;
            padding: 0 !important;
        }

        .swiper.mySwipers .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 10rem;
            height: 10rem;
            /* padding: .5vw; */
            /* overflow: hidden !important; */
            /* margin-right: 1vw !important; */
        }

        .mySwiper3 .swiper-slide {
            background-position: center;
            background-size: cover;
            /* width: 20% !important; */
            height: 100% !important;
            /* padding: .5vw; */
            /* overflow: hidden !important;                                                                                                         margin-right: 1vw !important; */
            /* margin: 0 !important; */
        }


        .mitra .swiper-slide {
            display: flex !important;
        }

        .mitra .swiper-slide img {
            width: 100% !important;
            height: auto !important;
        }


        .swiper-slide img {
            display: block;
            height: 100% !important;
            width: 100% !important;
            object-fit: cover !important;
            object-position: top !important;
        }
    </style>
@endpush
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush
@push('script2')
    <script>
        var swiper = new Swiper(".mySwipers", {
            effect: "coverflow",
            grabCursor: true,
            loop: true,
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 10,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 10,
            loop: true,
            speed: 4000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                easing: 'linear',
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 0,
                modifier: 0,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper3", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                easing: 'linear',
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 0,
                modifier: 0,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
@endpush
@section('main')
    <header class="h-screen w-full flex flex-col justify-center items-center scroll-smooth">
        <button onclick="togglePusatBantuan()" class="bg-blue-500 text-white flex fixed bottom-5 right-5 rounded-md z-50 p-3">Pusat Bantuan</button>
        <img class="w-full block lg:hidden md:w-2/3 animate__animated animate__fadeInDown"src="/img/hero2.png" alt="hero">
        <div class="w-full flex  lg:content-center lg:justify-between px-10  ">
            <div
                class="w-full flex flex-col m-auto justify-center  lg:items-start items-center animate__animated animate__fadeInLeft">
                <h1 class="text-white flex-grow-0  lg:text-2xl text-center lg:text-start">Selamat Datang</h1>
                <p class="text-3xl text-center lg:text-start lg:text-5xl  font-bold text-white">YAMALI TB SULSEL</p>
                <p class="lg:text-2xl text-center lg:text-start  text-white">Yayasan Masyarakat Peduli Tubercolosis sulawesi
                    Selatan</p>
                <p class=" text-white mt-2 px-4 py-2 rounded-full bg-blue-500 w-fit text-xs text-center lg:text-start">
                    "Kolaborasi Masyarakat Sipil Untuk
                    Indonesia
                    Bebas
                    Tubercolosis"
                </p>
            </div>
            <img class="m-auto w-1/3 hidden lg:block animate__animated animate__fadeInRight"src="/img/hero2.png"
                alt="hero">
        </div>
    </header>
    <div class=" w-full p-5 lg:p-10" id="tentang">
        <div class="flex gap-3 justify-center lg:justify-start " data-aos="fade-up">
            <div class="list h-8 w-8 bg-primary rounded-lg hidden lg:block">

            </div>
            <h1 class="text-2xl lg:text-3xl font-bold text-primary">Tentang Kami</h1>
        </div>
        <div class="w-full tentang-yamali flex  gap-1 lg:gap-5 content-center h-fit flex-col lg:flex-row"
            data-aos="fade-up">
            <div class=" flex justify-center content-center w-full lg:w-1/3">
                <div class="swiper mySwipers w-full flex content-center justify-center">
                    <div class="swiper-wrapper flex items-center ">
                        <div class="swiper-slide "><img src="/img/Profile-YamaliTB.jpeg" class=" w-full rounded-md"
                                alt=""></div>
                        <div class="swiper-slide"><img src="/img/yamali2.jpeg" class=" w-full rounded-md" alt="">
                        </div>
                        <div class="swiper-slide"><img src="/img/yamali3.jpeg" class=" w-full rounded-md" alt="">
                        </div>
                        <div class="swiper-slide"><img src="/img/yamali4.jpeg" class=" w-full rounded-md" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center gap-2 w-full lg:w-2/3 lg:ps-2">
                <h1 class="text-center lg:text-start text-xl font-bold text-primary"> Profil Yamali TB Sulawesi Selatan
                </h1>
                <p class="text-justify">Yayasan Masyarakat Peduli Tuberkulosis Sulawesi Selatan atau disingkat Yamali TB
                    Sulsel adalah sebuah
                    yayasan
                    yang bergerak dalam mengkolaborasikan kekuatan masyarakat sipil untuk kemanusiaan, kepedulian dan
                    perhatian
                    pada individu dan atau masyarakat terdampak persoalan sosial kesehatan, khususnya Tuberkulosis. Berdiri
                    pada
                    18 September 2016 dengan nama KMP TB ASA yang pembentukannya difasilitasi oleh TB Care Aisyiyah Sulsel.
                    Berbagai aksi dan kegiatan untuk upaya penaggulangan penyakit Tuberkulosis (TBC) telah dilakukan;
                    pencarian
                    kasus, penyediaan rumah singgah, pemberian bantuan nutrisi, hingga support pendampingan sampai sembuh
                    bagi
                    penyintas TBC. Dalam perjalanannya, KMP TB ASA mengalami perkembangan dan mendapat pengakuan dari banyak
                    pihak sehingga terhitung sejak 25 Agustus 2020 dalam rangka memperkuat kemandirian dan status badan
                    hukum,
                    maka ia berganti nama menjadi Yayasan Masyarakat Peduli Tuberkulosis Sulawesi Selatan.</p>
            </div>
        </div>
        <div data-aos="fade-up"
            class="w-full tentang-yamali flex  items-center h-fit mt-10 flex-col lg:flex-row gap-5 overflow-hidden">
            <div class=" lg:w-2/5">
                <h1 class=" text-2xl text-center lg:text-start lg:text-4xl font-bold text-primary">Mengenal Tim Kami</h1>
                <h1 class="text-center lg:text-start">Keberagaman dan Dedikasi di Balik Yamali TB</h1>
            </div>
            <div class=" lg:w-3/5 ">
                <div class="swiper mySwiper mb-3 !hidden ">
                    <div class="swiper-wrapper">
                        @foreach ($tims as $tim)
                            <div class="swiper-slide relative rounded-md overflow-hidden">
                                <div
                                    class=" absolute bottom-0 w-full p-2 flex justify-end items-center flex-col h-20  bg-gradient-to-t from-primary to-transparent">
                                    <h4 class="font-semibold text-white text-center text-sm">{{ $tim['nama'] }}</h4>
                                    <p class="text-white text-center text-xs">{{ $tim['Divisi'] }}</p>
                                </div>
                                <img src="/img/speaker/{{ $tim['gambar'] }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper mySwiper" dir="rtl">
                    <div class="swiper-wrapper">
                        @foreach ($tims as $tim)
                            <div class="swiper-slide relative rounded-lg overflow-hidden">
                                <div
                                    class=" absolute bottom-0 w-full p-2 flex justify-end items-center flex-col h-20  bg-gradient-to-t from-primary to-transparent">
                                    <h4 class="font-semibold text-white text-center text-sm">{{ $tim['nama'] }}</h4>
                                    <p class="text-white text-center text-xs">{{ $tim['Divisi'] }}</p>
                                </div>
                                <img src="/img/speaker/{{ $tim['gambar'] }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div data-aos="fade-up"
        class="w-full berita p-5 lg:p-10 h-screen bg-slate-900 mt-14 flex items-center flex-col gap-10 justify-center">
        <div class="flex gap-3 justify-center w-full flex-col items-center">
            <h1 class="text-3xl font-bold text-primary-light">Berita Terkini</h1>
            <p class="text-md text-white text-center">Aksi Yayasan dalam Perang Melawan TBC</p>
        </div>

        <div class="swiper mySwiper3 w-full">
            <div class="swiper-wrapper">
                @foreach ($beritas as $berita)
                    <a href="/berita/{{ $berita->slug }}" class="swiper-slide rounded-md bg-white p-2 !w-full lg:!w-1/5 ">
                        <div class=" h-3/5 w-full rounded-sm overflow-hidden">
                            <img src={{ asset('/storage/' . $berita->gambar) }} class="w-full" />
                        </div>
                        <div class="bg-white pt-2 flex flex-col justify-between h-2/5">
                            <div>
                                <h1 class="font-semibold text-primary text-lg truncate">{{ $berita->judul }}</h1>
                                <p class="text-xs text-black"> {{ $berita->berita_pendek . '...' }}</p>
                            </div>
                            <div class="w-full flex text-xs justify-between text-slate-500">
                                <p>{{ $berita->author }}</p>
                                <p>{{ $berita->created_at->translatedFormat('l, j F Y') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{-- @foreach ($beritas as $berita)
                    <a href="/berita/{{ $berita->slug }}" class="swiper-slide rounded-md bg-white p-2 ">
                        <div class="container h-3/5 w-full rounded-sm overflow-hidden">
                            <img src={{ asset('/storage/' . $berita->gambar) }} class="w-full" />
                        </div>
                        <div class="bg-white pt-2 flex flex-col justify-between h-2/5">
                            <div>
                                <h1 class="font-semibold text-primary text-lg truncate">{{ $berita->judul }}</h1>
                                <p class="text-xs text-black"> {{ $berita->berita_pendek . '...' }}</p>
                            </div>
                            <div class="container flex text-xs justify-between text-slate-500">
                                <p>{{ $berita->author }}</p>
                                <p>{{ $berita->created_at->translatedFormat('l, j F Y') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                @foreach ($beritas as $berita)
                    <a href="/berita/{{ $berita->slug }}" class="swiper-slide rounded-md bg-white p-2 ">
                        <div class="container h-3/5 w-full rounded-sm overflow-hidden">
                            <img src={{ asset('/storage/' . $berita->gambar) }} class="w-full" />
                        </div>
                        <div class="bg-white pt-2 flex flex-col justify-between h-2/5">
                            <div>
                                <h1 class="font-semibold text-primary text-lg truncate">{{ $berita->judul }}</h1>
                                <p class="text-xs text-black"> {{ $berita->berita_pendek . '...' }}</p>
                            </div>
                            <div class="container flex text-xs justify-between text-slate-500">
                                <p>{{ $berita->author }}</p>
                                <p>{{ $berita->created_at->translatedFormat('l, j F Y') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach --}}
            </div>
        </div>
        <div class="flex gap-3 justify-center w-full flex-col items-center">
            <h1 class="lg:text-2xl text-xl text-primary-light font-semibold text-center"> Ayo Turut Serta Dalam
                Menyelesaikan Masalah TBC</h1>
            <div class="flex items-center gap-5">
                <a href="/berita"
                    class="transition ease-in-out text-primary px-4 py-2  border border-primary border-solid flex gap-3 justufy-center items-center rounded-md hover:bg-primary hover:text-white">
                    <i class="ph ph-arrow-circle-right text-xl"></i>
                    <p>Lainnya</p>
                </a>
                <a href="https://kitabisa.com/campaign/sedekahuntukpejuangtbdanduafa"
                    class="transition ease-in-out bg-white text-primary px-4 py-2 flex gap-3 justufy-center items-center rounded-md hover:bg-primary hover:text-white">
                    <i class="ph ph-cube text-xl"></i>
                    <p>Donasi</p>
                </a>
            </div>
        </div>
    </div>

    <div data-aos="fade-up" class="w-full h-fit lg:h-screen p-5 lg:p-10  flex items-center justify-center flex-col gap-5 ">
        <h1 class="text-2xl lg:text-4xl font-bold text-primary">Program Kerja Yamali TB</h1>
        <h1 class="text-center">Program Kerja YAMALI TB merupakan wujud aksi nyata dari YAMALI TB dalam usaha mengeliminasi
            Tuberkulosis di
            Sulawesi Selatan melalui beberapa program sebagai berikut:</h1>
        <div class="flex gap-5 flex-col lg:flex-row">
            <div class=" rounded-lg border-double border-2 border-primary p-5 w-full lg:w-1/3">
                <p>Sebagai pengelola program TB Komunitas di wilayah Sulawesi Selatan melalui pendanaan GF-TB ATM via
                    Konsorsium Penabulu-STPI</p>
            </div>
            <div class=" rounded-lg border-double border-2 border-primary p-5 w-full lg:w-1/3">
                <p>Secara kelembagaan, YAMALI TB sebagai sebuah NGO bekerja untuk penguatan kelembagaan dan pemenuhan
                    kebutuhan
                    orang-orang terdampak TBC, upaya advokasi untuk isu dan pembiayaan TBC serta penyebarluasan informasi
                    dan
                    perkembangan situasi TBC di Indonesia dan Sulawesi Selatan pada khususnya.</p>
            </div>
            <div class=" rounded-lg border-double border-2 border-primary p-5 w-full lg:w-1/3">
                <p>Penguatan dan perluasan relasi untuk kepentingan isu TBC, baik dengan kegiatan pendidikan maupun
                    pengabdian
                    masyarakat</p>
            </div>
        </div>

        <h1 class="font-bold text-primary text-xl text-center lg:text-3xl"> AYO BERANTAS PENYAKIT TUBERKULOSIS BERSAMA
            YAMALI TB</h1>

    </div>

    <div data-aos="fade-up"
        class="w-full p-5 lg:p-10 h-fit lg:h-screen  bg-slate-900 flex items-center justify-center flex-col relative gap-5">
        <h1 class="text-2xl lg:text-5xl text-primary font-bold hidden lg:block"> Cerita Kader Yamali TB</h1>
        <div
            class="text-sm w-full lg:w-2/5 lg:absolute rounded-md border-solid border border-white text-white p-5 flex flex-col justify-between top-20 left-20">
            <p>"Pengalaman yang paling berharga selama saya hidup, bukan tentang kesembuhan, tetapi tentang bagaimana
                membantu dan menjadikan manusia menjadi lebih kuat, tak mudah goyah meski tubuh digerogoti penyakit"</p>
            <p class="text-sm text-slate-500">Hera Wati, 25 Tahun</p>
        </div>
        <div
            class=" text-sm w-full lg:w-2/5 lg:absolute rounded-md border-solid border border-white text-white p-5 flex flex-col justify-between bottom-20 left-20">
            <p>"Mangkir minum obat hanya akan membuatmu mangkir dari kesembuhan"</p>
            <p class="text-sm text-slate-500">Pretty Fera, 27 Tahun</p>
        </div>
        <h1 class="text-2xl lg:text-5xl text-primary font-bold lg:hidden"> Cerita Kader Yamali TB</h1>
        <div
            class="text-sm w-full lg:w-2/5 lg:absolute rounded-md border-solid border border-white text-white p-5 flex flex-col justify-between bottom-20 right-20">
            <p>"Saya selalu berharap, bukan hanya obat-obatan yang terus menerus diminum, tetapi keyakinan diri, dukungan
                keluarga, juga berserah diri pada-Nya, adalah hal yang perlu dimiliki pasien TB"</p>
            <p class="text-sm text-slate-500">Sri Wahyuni, 25 Tahun</p>
        </div>
        <div
            class="text-sm w-full lg:w-2/5 lg:absolute rounded-md border-solid border border-white text-white p-5 flex flex-col justify-between top-20 right-20">
            <p>"Selama menjadi kader saya harus berhadapan dengan berbagai tipe pasien, ada yang rewel, penurut, inisiatif,
                dan lain-lain"</p>
            <p class="text-sm text-slate-500">Rusnita Sari, 32 Tahun</p>
        </div>
    </div>


    <div data-aos="fade-up" class="w-full h-screen flex flex-col justify-center items-center mitra gap-10">
        <div class="flex w-full ps-10  relative">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i < 7; $i++)
                        <div class="swiper-slide relative rounded-md border border-solid border-primary p-5">
                            <img src="/img/mitra_pemerintah/{{ 'mitra' . $i . '.png' }}" class="w-full h-full" />
                        </div>
                    @endfor
                    @for ($i = 1; $i < 7; $i++)
                        <div class="swiper-slide relative rounded-md border border-solid border-primary p-5">
                            <img src="/img/mitra_pemerintah/{{ 'mitra' . $i . '.png' }}" class="w-full h-full" />
                        </div>
                    @endfor
                </div>
            </div>
            <div
                class=" w-1/3 lg:w-1/5 mitra-name flex items-center justify-center p-5 lg:p-10 rounded-l-full absolute right-0 h-full z-10 ">
                <h1 class="font-bold text-white text-md lg:text-xl">Pemerintah</h1>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-3xl lg:text-5xl font-bold text-primary">Mitra Yamali TB</h1>
            <p>Mitra Di Balik Kesuksesan Yamali TB</p>
        </div>
        <div class="flex w-full pe-10  relative">
            <div class="swiper mySwiper" dir="rtl">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i < 7; $i++)
                        <div
                            class="swiper-slide rounded-md border border-solid border-primary p-5 flex items-center justify-center">
                            <img src="/img/mitra_cso/{{ 'mitra' . $i . '.png' }}" class="w-full my-auto" />
                        </div>
                    @endfor
                    @for ($i = 1; $i < 7; $i++)
                        <div
                            class="swiper-slide rounded-md border border-solid border-primary p-5 flex items-center justify-center">
                            <img src="/img/mitra_cso/{{ 'mitra' . $i . '.png' }}" class="w-full my-auto" />
                        </div>
                    @endfor
                </div>
            </div>
            <div class=" w-1/3 lg:w-1/5 mitra-name flex items-center justify-center p-5 lg:p-10 rounded-r-full absolute left-0 h-full z-10">
                <h1 class="font-bold text-white text-md lg:text-xl">CSO</h1>
            </div>

        </div>
    </div>

    <div data-aos="fade-up" class="w-full px-10 " id="faq">
        <div class="flex gap-3 mb-6">
            <div class="list h-8 w-8 bg-primary rounded-lg hidden lg:block">
            </div>
            <h1 class="text-3xl font-bold text-primary text-center lg:text-start w-full">Faq</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-10">
            <ul class="flex flex-col !gap-6 list-disc list-outside ">
                <li class="relative" >
                    <a id="Faq1"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apa yang harus saya lakukan saat mengalami gejala-gejala Tuberkulosis?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq1 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Memeriksakan diri ke layanan kesehatan terdekat. Apabila terindikasi
                            betul adanya gejala Tuberkulosis, maka anda akan disarankan untuk cek dahak yang hasilnya akan
                            keluar selama 1-2 hari</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq2"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apa yang harus saya lakukan saat mengalami atau melihat buruknya stigma dan terdapat tindakan
                        diskriminasi pada pasien tuberkulosis?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq2 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Anda dapat melaporkan kasus tersebut kepada yayasan kami agar kami
                            berikan bimbingan konseling dan kader khusus di wilayah anda.</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq3"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apakah pengobatan Tuberkulosis gratis?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq3 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Ya, pengobatan tuberkulosis (TB) disediakan secara gratis melalui
                            program-program yang diselenggarakan oleh Kementerian Kesehatan Republik Indonesia.</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq4"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Bagaimana batasan dalam berinteraksi dengan pasien tuberkulosis?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq4 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Saat berinteraksi dengan pasien Tuberkulosis, jangan lupa untuk
                            menggunakan alat pelindung diri seperti masker medis. Selain itu, anda perlu menjaga kebersihan
                            tangan dan membatasi kontak dekat.</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq5"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apakah pasien Tuberkulosis diberi bantuan dana?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq5 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Di beberapa negara, termasuk Indonesia, pemerintah menyediakan bantuan
                            dana atau subsidi bagi pasien tuberkulosis (TB) untuk membantu mereka dalam biaya pengobatan dan
                            perawatan.</li>
                    </ul>
                </li>
            </ul>

            <ul class="flex flex-col !gap-6 list-disc ">
                <li class="relative" >
                    <a id="Faq6"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apabila terdapat pasien dari daerah di luar kota Makassar, apakah Yamali punya rekomendasi tempat
                        untuk
                        pasien yang datang dari jauh?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq6 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Ya, Yamali menyediakan rumah singgah (shelter) yang diperuntukkan
                            kepada pasien yang datang dari daerah jauh untuk berobat.</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq7"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apakah pasien Tuberkulosis diperbolehkan bekerja atau beraktivitas seperti biasa selama menjalani
                        pengobatan ?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq7 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Ya, pasien Tuberkulosis diperbolehkan bekerja atau beraktivitas seperti
                            biasa selama menjalani pengobatan, selama kondisi kesehatannya memungkinkan.</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq8"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apakah orang yang terinfeksi TBC harus dikarantina?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq8 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Orang yang terinfeksi TBC tidak perlu dikarantina, tetapi mereka harus
                            mematuhi tindakan pencegahan penyebaran penyakit seperti menggunakan masker dan menjaga jarak
                            dengan
                            orang lain, terutama saat batuk atau bersin.</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq9"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Berapa lama masa pengobatan Tuberkulosis?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq9 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Lama pengobatan bervariasi tergantung pada jenis TB, tingkat keparahan,
                            dan respons individu terhadap pengobatan. Secara umum, pengobatan TB biasanya berlangsung selama
                            minimal 6 bulan hingga 9 bulan.
                            Beberapa kasus TB yang lebih kompleks atau resisten terhadap obat mungkin memerlukan pengobatan
                            yang
                            lebih lama, bahkan hingga setahun atau lebih.</li>
                    </ul>
                </li>

                <li class="relative" >
                    <a id="Faq10"
                        class=" text-justify  flex cursor-pointer items-top gap-2  py-4 px-6 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Apakah ada penanganan khusus untuk anak-anak, ibu hamil, atau lansia dengan risiko tinggi yang
                        terinfeksi TBC?
                        <i class="ph ph-caret-down"></i>
                    </a>
                    <style>
                        .custom-li {
                            padding: 18px;
                            font-size: 16px;
                        }
                    </style>
                    <ul class="hidden dropdown-menu Faq10 absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li class="custom-li ">Iya ada, Ini termasuk penggunaan regimen obat yang disesuaikan dengan
                            kondisi khusus mereka, pemantauan yang ketat terhadap efek samping obat, serta perawatan yang
                            terkoordinasi dengan dokter spesialis yang berpengalaman dalam menangani kasus-kasus khusus ini.
                            Pemantauan teratur dan dukungan yang kuat dari sistem kesehatan juga penting untuk memastikan
                            bahwa
                            penanganan yang tepat diberikan dan komplikasi yang mungkin terjadi dapat dideteksi dan
                            ditangani
                            dengan cepat.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq1 = document.querySelector('#Faq1');
            const dropdownMenu = document.querySelector('.Faq1');

            Faq1.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq2 = document.querySelector('#Faq2');
            const dropdownMenu = document.querySelector('.Faq2');

            Faq2.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq3 = document.querySelector('#Faq3');
            const dropdownMenu = document.querySelector('.Faq3');

            Faq3.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq4 = document.querySelector('#Faq4');
            const dropdownMenu = document.querySelector('.Faq4');

            Faq4.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq5 = document.querySelector('#Faq5');
            const dropdownMenu = document.querySelector('.Faq5');

            Faq5.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq6 = document.querySelector('#Faq6');
            const dropdownMenu = document.querySelector('.Faq6');

            Faq6.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq7 = document.querySelector('#Faq7');
            const dropdownMenu = document.querySelector('.Faq7');

            Faq7.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq8 = document.querySelector('#Faq8');
            const dropdownMenu = document.querySelector('.Faq8');

            Faq8.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq9 = document.querySelector('#Faq9');
            const dropdownMenu = document.querySelector('.Faq9');

            Faq9.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Faq10 = document.querySelector('#Faq10');
            const dropdownMenu = document.querySelector('.Faq10');

            Faq10.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    </div>
    <br>
    <x-kontak />
@endsection
