@extends('layouts.main')
@section('main')
    <div class="flex flex-col md:flex-row py-20 px-10 lg:px-20 gap-10">
        <div class="w-full lg:w-3/4">
            <div class="container flex flex-col justify-center h-fit detail-berita">
                <h1 class=" text-xl lg:text-2xl font-bold text-black text-center mb-10 mt-10"> {{ $faq->pertanyaan }}</h1>
                <p class="text-md lg:text-xl text-primary font-bold">{{ $faq->created_at->translatedFormat('l, j F Y') }}
                </p>
                <div class="container w-full my-5 text-justify flex flex-col justify-start gap-3">
                    {!! html_entity_decode($faq->faq) !!}
                </div>

                <div class="flex gap-1">
                    <p>Sumber :</p><a class="text-blue-500 hover:underline" href={{ $faq->sumber }}>Sumber
                        Informasi</a>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col justify-center gap-3 md:hidden">
            <h1 class="text-slate-500 border-slate-500 rounded-md border-solid border p-3 w-full">Baca Juga</h1>
            <div class="w-full lg:w-1/4 flex overflow-scroll">
                @foreach ($faqRandom as $random)
                    <a href="/faq/{{ $random->slug }}"
                        class="mb-3 rounded-md bg-white h-72 block p-2 w-full border border-solid border-primary me-3 lg:me-0">
                        <div class="h-2/5 bg-white pt-2 flex flex-col justify-between">
                            <div>
                                <h1 class="font-semibold text-primary text-lg truncate">{{ $random->pertanyaan }}</h1>
                                <p class="text-xs"> {{ $random->jawaban . '...' }}</p>
                            </div>
                            <div class="container flex text-xs justify-between text-slate-500">
                                <p>{{ $random->created_at->translatedFormat('l, j F Y') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="/faq" class=" text-primary flex gap-2 items-center md-hidden"><i
                    class="ph ph-arrow-circle-right text-xl"></i>
                <p class="hover:underline">Berita selengkapnya</p>
            </a>
        </div>
        <div class="w-1/4 hidden md:block">
            <h1 class="text-slate-500 border-slate-500 rounded-md border-solid border p-3 w-full mb-3">
                Baca Juga</h1>
            @foreach ($faqRandom as $random)
                <a href="/faq/{{ $random->slug }}"
                    class="mb-3 rounded-md bg-white h-72 block p-2 w-full border border-solid border-primary me-3 lg:me-0">
                    <div class="h-2/5 bg-white pt-2 flex flex-col justify-between">
                        <div>
                            <h1 class="font-semibold text-primary text-lg truncate">{{ $random->pertanyaan }}</h1>
                            <p class="text-xs"> {{ $random->jawaban . '...' }}</p>
                        </div>
                        <div class="container flex text-xs justify-between text-slate-500">
                            <p>{{ $random->created_at->translatedFormat('l, j F Y') }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
            <a href="/faq" class="mt-5 text-primary flex gap-2 items-center"><i
                    class="ph ph-arrow-circle-right text-xl"></i>
                <p class="hover:underline">Berita selengkapnya</p>
            </a>
        </div>
    </div>
@endsection
