@extends('layouts.main')

@section('main')
    <div class="flex gap-3 items-start flex-col justify-center p-10 h-screen berita-page w-full">
        <h1
            class="text-center lg:text-start w-full text-4xl lg:text-5xl font-bold text-white bg-blue-500 lg:bg-transparent rounded-full py-2">
            Perpustakaan Media
        </h1>
        <p class="text-sm text-center lg:text-start lg:text-md lg:bg-blue-500 px-5 py-2 rounded-full text-white"> Ketahui
            lebih
            lanjut upaya Yamali TB mengatasi
            penyebaran
            tuberkulosis di Sulawesi Selatan</p>
    </div>
    <style>
        /* Aturan CSS untuk layar dengan lebar kurang dari 768px (mobile) */
        @media (max-width: 767px) {
            .flex-responsive {
                flex-direction: column; /* Mengubah arah flex menjadi kolom pada layar mobile */
            }

            .btn {
                margin-right: 0;
                margin-bottom: 10px; /* Menambahkan jarak antara tombol pada layar mobile */
            }

            #tagFilters {
                justify-content: center; /* Center the buttons horizontally */
            }

            .search-form {
                display: flex; /* Mengatur tata letak menjadi flex */
                align-items: stretch; /* Mengatur item untuk meregang pada lebar penuh */
                flex-wrap: wrap; /* Mengatur wrap item jika overflow */
            }

            .search-input {
                width: calc(80% - 5px); /* Menjadikan input pencarian penuh lebar pada layar mobile */
                border-top-left-radius: 20px; /* Mengatur radius sudut pada sudut kiri atas */
                border-bottom-left-radius: 20px;
            }
        
            .search-button {
                width: calc(20% - 5px); /* Menjadikan tombol pencarian penuh lebar pada layar mobile */
                border-top-right-radius: 20px; /* Mengatur radius sudut pada sudut kanan atas */
                border-bottom-right-radius: 20px;
            }
        }

        @media (min-width: 768px) {
            .search-input {
                width: 80%; /* Menjadikan input pencarian 80% lebar pada layar desktop */
                border-top-left-radius: 20px; /* Mengatur radius sudut pada sudut kiri atas */
                border-bottom-left-radius: 20px; /* Mengatur radius sudut pada sudut kiri bawah */
            }
        
            .search-button {
                width: 20%; /* Menjadikan tombol pencarian 20% lebar pada layar desktop */
                border-top-right-radius: 20px; /* Mengatur radius sudut pada sudut kanan atas */
                border-bottom-right-radius: 20px; /* Mengatur radius sudut pada sudut kanan bawah */
            }
        }
    </style>
    <div class="p-10 h-fit w-full">
        <div class="flex items-center justify-between mb-10 w-full flex-responsive">
            <div class="flex justify-start gap-2 flex-wrap" id="tagFilters">
                <a href="/perpustakaan" class="btn btn-primary block py-2 mr-5 
                px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 
                md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white 
                md:dark:hover:bg-transparent dark:border-gray-700">Semua</a>
                <a href="{{ route('perpustakaan.index', ['tags' => 'buku']) }}" class="btn btn-primary block py-2 mr-5
                    px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 
                    md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white 
                    md:dark:hover:bg-transparent dark:border-gray-700">Buku</a>
                <a href="{{ route('perpustakaan.index', ['tags' => 'laporan']) }}" class="btn btn-primary block py-2 mr-5
                    px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 
                    md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white 
                    md:dark:hover:bg-transparent dark:border-gray-700">Laporan</a>
                <a href="/newsletter" class="btn btn-primary block py-2 mr-5
                    px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 
                    md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white 
                    md:dark:hover:bg-transparent dark:border-gray-700">Newsletter</a>
            </div>
            <form action="/perpustakaan" class="w-full lg:w-1/2 flex items-center search-form" method="POST">
                @csrf
                <input type="search" name="search" id="search" placeholder="cari judul"
                    class="rounded-l-full px-5 focus:ring-primary focus:border-primary text-sm search-input">
                <button type="submit" class="bg-primary text-white px-5 py-2 rounded-r-full search-button">Cari</button>
            </form>
        </div>
        
        
        <style>
            /* Aturan CSS untuk layar dengan lebar kurang dari 768px (mobile) */
            @media (max-width: 767px) {
                .grid {
                    grid-template-columns: repeat(auto-fill, minmax(100%, 1fr)); /* Menjadikan grid satu kolom pada layar mobile */
                }
            
                .swiper-slide {
                    width: 80%; /* Mengatur lebar slider menjadi penuh pada layar mobile */
                    margin: 0 auto;
                }
            
                .h-72 {
                    height: auto; /* Mengatur tinggi item menjadi otomatis untuk menghindari pembatasan pada layar kecil */
                }
            }
            
            /* Aturan CSS untuk layar dengan lebar 768px atau lebih (desktop) */
            @media (min-width: 768px) {
                .grid {
                    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Menyesuaikan jumlah kolom pada layar desktop */
                }
            }
        </style>
        <div class=" w-full h-fit">
            <div class="w-full h-full grid grid-cols-4 gap-4">
                @if ($perpustakaans->isEmpty() && $newsletters->isEmpty())
                    <p class="text-red-500 font-bold">Data perpustakaan tidak ditemukan</p>
                @else
                    @foreach ($perpustakaans as $perpustakaan)
                        <a href="/perpustakaan/{{ $perpustakaan->slug }}"
                            class="swiper-slide rounded-md bg-white p-2 w-full h-72 border border-solid border-primary">
                            <div class="container h-3/5 rounded-sm overflow-hidden bg-red-500">
                                <img src={{ asset('/storage/' . $perpustakaan->gambar) }}
                                    class="h-full w-full object-center object-cover" />
                            </div>
                            <div class="h-2/5 bg-white pt-2 flex flex-col justify-between">
                                <div>
                                    <h1 class="font-semibold text-primary text-lg truncate">{{ $perpustakaan->judul }}</h1>
                                    <p class="text-xs">{{ Illuminate\Support\Str::limit(strip_tags($perpustakaan->ringkasan), 30) . '...' }}</p>
                                </div>

                                <div class="container flex text-xs justify-between text-slate-500">
                                    <p>{{ $perpustakaan->created_at->translatedFormat('l, j F Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    @foreach ($newsletters as $newsletter)
                        <a href="/newsletter/{{ $newsletter->slug }}"
                            class="swiper-slide rounded-md bg-white p-2 w-full h-72 border border-solid border-primary">
                            <div class="container h-3/5 rounded-sm overflow-hidden bg-red-500">
                                <img src={{ asset('/storage/' . $newsletter->gambar) }}
                                    class="h-full w-full object-center object-cover" />
                            </div>
                            <div class="h-2/5 bg-white pt-2 flex flex-col justify-between">
                                <div>
                                    <h1 class="font-semibold text-primary text-lg truncate">{{ $newsletter->judul }}</h1>
                                    <p class="text-xs">{{ Illuminate\Support\Str::limit(strip_tags($newsletter->ringkasan), 30) . '...' }}</p>
                                </div>
                                <div class="container flex text-xs justify-between text-slate-500">
                                    
                                    <p>{{ $newsletter->created_at->translatedFormat('l, j F Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>
            <div class="w-full flex justify-center pagination mt-10">
                {{ $perpustakaans->links() }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tagFilters = document.querySelectorAll('.tag-filter');
            const perpustakaanItems = document.querySelectorAll('.perpustakaan-item');
    
            tagFilters.forEach(function(filter) {
                filter.addEventListener('click', function() {
                    const selectedTag = this.getAttribute('data-tag');
    
                    perpustakaanItems.forEach(function(item) {
                        const itemTags = JSON.parse(item.getAttribute('data-tags'));
    
                        if (selectedTag === 'all' || itemTags.includes(selectedTag)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@endsection
