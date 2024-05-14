<?php

namespace App\Http\Controllers;

use App\Models\PusatBantuan;
use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PusatBantuanController extends Controller
{
    public function index(){
        // Alert::toast('Selamat datang di Pusat Bantuan','success');
        $status = 'pusatbantuan';
        return view ('beranda', compact('status'));

    }
    public function create(Request $request){
        $pusatbantuan = new PusatBantuan();
        $pusatbantuan->nama = $request->name;
        $pusatbantuan->nomor_telepon = $request->phone;
        $pusatbantuan->email = $request->email;
        $pusatbantuan->laporan = $request->kendala;
        $pusatbantuan->save();
        Alert::toast('Kendala berhasil dikirim','success');
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
        return view ('beranda', compact('status', 'beritas', 'tims'));
    }
}
