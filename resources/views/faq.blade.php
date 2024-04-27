@extends('layouts.main')

@section('main')
    <div class="flex gap-3 items-start flex-col justify-center p-10 h-screen berita-page w-full">
        <h1
            class="text-center lg:text-start w-full text-4xl lg:text-5xl font-bold text-white bg-blue-500 lg:bg-transparent rounded-full py-2">
            FaQ
        </h1>
        <p class="text-sm text-center lg:text-start lg:text-md lg:bg-blue-500 px-5 py-2 rounded-full text-white"> Ketahui
            lebih
            lanjut upaya Yamali TB mengatasi
            penyebaran
            tuberkulosis di Sulawesi Selatan</p>
    </div>

    <div class="p-10 h-fit w-full">
        <div class="flex items-center jutify-center lg:justify-end mb-10 w-full">
            <form action="/faq" class="w-full lg:w-1/2 flex items-center " method="POST">
                @csrf
                <input type="search" name="search" id="search" placeholder="cari pertanyaan"
                    class="w-full rounded-l-full px-5 focus:ring-primary focus:border-primary text-sm">
                <button type="submit" class="bg-primary text-white px-5 py-2 rounded-r-full">Cari</button>
            </form>
        </div>

        <div class=" w-full h-fit">

            <div class="w-full h-full flex flex-wrap justify-center gap-5">
                @if ($faqs->isEmpty())
                    <p class="text-red-500 font-bold">Data FaQ tidak ditemukan</p>
                @else
                    @foreach ($faqs as $faq)
                        <a href="/faq/{{ $faq->slug }}"
                            class="swiper-slide rounded-md bg-white p-2 w-64 h-72 border border-solid border-primary">
                            <div class="h-2/5 bg-white pt-2 flex flex-col justify-between">
                                <div>
                                    <h1 style="overflow-wrap: break-word;" class="font-semibold text-primary text-lg truncate">{{ $faq->pertanyaan }}</h1>
                                </div>
                                <div class="container flex text-xs justify-between text-slate-500">
                                    <p>{{ $faq->sumber }}</p>
                                    <p>{{ $faq->created_at->translatedFormat('l, j F Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>
            <div class="w-full flex justify-center pagination mt-10">
                {{ $faqs->links() }}
            </div>
        </div>
    </div>
@endsection
