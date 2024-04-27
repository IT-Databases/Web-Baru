<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class BeritaController extends Controller
{
    public function index() {
        $status ='berita';
        $beritas = Berita::orderBy('created_at','desc')->paginate(8);
        return view('berita',compact('beritas','status'));
    }

    public function detail($slug){
        $status ='berita';
        $berita = Berita::where('slug', $slug)->first();
        $beritaRandom = Berita::inRandomOrder()->take(5)->get();
        return view ('berita-detail', compact('berita','status','beritaRandom'));
    }

    public function cari(Request $request){
        $beritas = Berita::where('judul','LIKE','%'.$request->search.'%')->paginate(8);
        return view ('berita', compact('beritas'));
    }
}
