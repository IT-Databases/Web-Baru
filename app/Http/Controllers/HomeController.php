<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tims = [
            [
                'nama' => 'Kamaruddin',
                'Divisi' => 'Divisi Litbang & Data',
                'gambar' => 'kama.jpeg.jpg',
            ],
            [
                'nama' => 'Ilham Riyadi',
                'Divisi' => 'Divisi Program',
                'gambar' => 'ilham.jpeg.jpg',
            ],
            [
                'nama' => 'Niken',
                'Divisi' => 'Sekretaris',
                'gambar' => 'niken.png',
            ],
            [
                'nama' => 'Ulfa Chairunnisa',
                'Divisi' => 'Divisi Keuangan',
                'gambar' => 'ulfa.jpeg.jpg',
            ],
            [
                'nama' => 'Ummu Kalsum',
                'Divisi' => 'Divisi Barang & Jasa',
                'gambar' => 'ummu.jpeg.jpg',
            ],
            [
                'nama' => 'Kasri Riswadi',
                'Divisi' => 'Ketua Yamali',
                'gambar' => 'kasri.jpeg',
            ],
            [
                'nama' => 'Masnidar',
                'Divisi' => 'Bendahara',
                'gambar' => 'masnidar.jpg',
            ],
        ];
        $status = 'beranda';
        $beritas = Berita::latest()->take(10)->get();
        return view('beranda', compact('tims','beritas','status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function donasi()
    {
        $status = 'donasi';
        return view('donasi',compact('$status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
