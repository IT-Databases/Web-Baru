<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/img/yamali.svg" />
    <title>Yamali TB</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
    @stack('style')
    @stack('style2')
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
</head>

<body class="font-body  w-screen overflow-x-hidden bg-white">
    <nav
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 animate__animated animate__fadeInDown">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/img/yamali.svg" class="h-9" alt="Yamali Logo">
                <span
                    class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white md:text-primary">Yamali
                    TB Sulsel</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="/admin"><button type="button"
                        class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Login </button></a>
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
                        <a href="/"
                            class="block py-2 px-3 bg-primary rounded md:bg-transparent md:p-0 md:dark:text-blue-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <!--<li>
                        <a href="/#tentang"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li> -->
                    <li class="relative">
                        <a id="publikasiButton" class="flex cursor-pointer items-center gap-2 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            <p>Publikasi</p>
                            <i class="ph ph-caret-down"></i>
                        </a>
                        
                        <ul class="hidden dropdown-menu absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                            <li><a href="/perpustakaan" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Perpustakaan</a></li>
                            <li><a href="/berita" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Berita</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://kitabisa.com/campaign/sedekahuntukpejuangtbdanduafa"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Donasi</a>
                    </li>
                    <li>
                        <a href="/laporan-diskriminasi"
                            class=" block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Report
                            Diskriminasi</a>
                    </li>

                    <!-- <li class="relative w-fit">
                        <a id="publikasiButton" class="flex cursor-pointer items-center gap-2 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            <p>Tentang kami</p>
                            <i class="ph ph-caret-down"></i>
                        </a>
                        
                        <ul class=" w-fit dropdown-menu absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                        <li><a href="/Tentang-kami" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Tentang Kami</a></li>
                            <li><a href="/Hubungi-kami" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Hubungi Kami</a></li>
                            <li><a href="/Faq" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Faq</a></li>
                        </ul>
                    </li> -->
                    <li class="relative">
                        <a id="tentangKamiButton" class="flex cursor-pointer items-center gap-2 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            <p>Tentang Kami</p>
                            <i class="ph ph-caret-down"></i>
                        </a>
                        <ul class="hidden dropdown-menu tentangKamiDropdown absolute z-10 bg-white border rounded-lg shadow-lg mt-2">
                            <li><a href="/Tentang-kami" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Tentang Kami</a></li>
                            <li><a href="/Hubungi-kami" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Hubungi Kami</a></li>
                            <li><a href="/Faq" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Faq</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="w-full overflow-x-hidden">
        @yield('main')
    </main>


    <footer class="bg-slate-900 dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between justify-between">
                <div class="mb-6 md:mb-0 w-full flex flex-col justify-between lg:px-10">
                    <a href="#"
                        class="flex items-center flex-col lg:flex-row justify-center lg:justify-start space-x-3 rtl:space-x-reverse">
                        <img src="/img/yamali.svg" class="h-9" alt="Yamali Logo">
                        <span
                            class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white md:text-primary text-white">Yamali
                            TB Sulsel</span>
                    </a>

                    <p class="text-gray-400 mt-5 lg:mt-0">Yamali TB menggerakkan para pegiat TBC Komunitas untuk
                        berupaya dalam
                        penemuan kasus baru dengan kegiatan penyuluhan aktif di masyarakat,
                        investigasi kontak serta pendampingan pasien hingga sembuh,
                        advokasi isu TBC kepada pemangku kepentingan, serta meng
                        kampanyekan isu TBC di media sosial dan media massa.</p>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 w-full grid-end">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="/" class="hover:underline">Beranda</a>
                            </li>
                            <li class="mb-4">
                                <a href="/perpustakaan" class="hover:underline">Publikasi</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://kitabisa.com/campaign/sedekahuntukpejuangtbdanduafa" class="hover:underline">Donasi</a>
                            </li>
                            <li class="mb-4">
                                <a href="/laporan-diskriminasi" class="hover:underline">Report Diskriminasi</a>
                            </li>
                            <li class="mb-4">
                                <a href="/Tentang-kami" class="hover:underline">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Ikuti Kami</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://instagram.com/yamalitb.sulsel" class="hover:underline ">Instagram</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://www.facebook.com/yamalitb?mibextid=ZbWKwL"
                                    class="hover:underline ">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://www.tiktok.com/@yamalitb?_t=8kxxoyx3JVX&_r=1"
                                    class="hover:underline ">Tiktok</a>
                            </li>
                            <li>
                                <a href="https://youtube.com/@YamaliTB?si=9G4bJuwQPi1N30us"
                                    class="hover:underline ">Youtube</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/"
                        class="hover:underline">Yamali TB™</a>. All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>
    @stack('script')
    @stack('script2')
    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        let activePage = window.location.href;
        // window.addEventListener('unload', function() {
        //     activePage = window.location.path;
        // });
        // console.log(activePage);
        let navLink = document.querySelectorAll('nav a').forEach(link => {
            link.classList.remove('text-primary');
            if (link.href == activePage) {
                link.classList.add('text-primary');
            }
        })
        window.addEventListener('hashchange', function() {
            activePage = window.location.href;
            navLink = document.querySelectorAll('nav a').forEach(link => {
                link.classList.remove('text-primary');
                if (link.href == activePage) {
                    link.classList.add('text-primary');
                }
            })
        });

        function activeNav() {
            let
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const publikasiButton = document.querySelector('#publikasiButton');
            const dropdownMenu = document.querySelector('.absolute');
    
            publikasiButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tentangKamiButton = document.querySelector('#tentangKamiButton');
            const dropdownMenu1 = document.querySelector('.tentangKamiDropdown');
    
            tentangKamiButton.addEventListener('click', function() {
                dropdownMenu1.classList.toggle('hidden');
            });
        });
    </script>
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> --}}
</body>

</html>
