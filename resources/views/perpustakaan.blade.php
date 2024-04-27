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

    <div class="p-10 h-fit w-full">
        <div class="flex items-center justify-between mb-10 w-full ">
            <div class="flex justify-start gap-2 " id="tagFilters">
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
            </div>
            <form action="/perpustakaan" class="w-full lg:w-1/2 flex items-center " method="POST">
                @csrf
                <input type="search" name="search" id="search" placeholder="cari judul"
                    class="w-full rounded-l-full px-5 focus:ring-primary focus:border-primary text-sm">
                <button type="submit" class="bg-primary text-white px-5 py-2 rounded-r-full">Cari</button>
            </form>
        </div>

        <div class=" w-full h-fit">
            

            <div class="w-full h-full grid grid-cols-4 gap-4">
                @if ($perpustakaans->isEmpty())
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
                                    <p class="text-xs"> {{ $perpustakaan->berita_pendek . '...' }}</p>
                                </div>
                                <div class="container flex text-xs justify-between text-slate-500">
                                    
                                    <p>{{ $perpustakaan->created_at->translatedFormat('l, j F Y') }}</p>
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
