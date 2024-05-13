<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Perpustakaan;
use App\Models\Newsletter;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class PerpusController extends Controller
{
    public function index(Request $request) {
        $status = 'perpustakaan';
        $perpustakaans = Perpustakaan::orderBy('created_at', 'desc');
        $status2 ='newsletter';
        $newsletters = Newsletter::orderBy('created_at','desc')->paginate(8);

        // Check if tags are present in the request
        if ($request->has('tags')) {
            $tags = is_array($request->tags) ? $request->tags : explode(',', $request->tags);
            $perpustakaans->where(function ($query) use ($tags) {
                foreach ($tags as $tag) {
                    $query->orWhere('tag', 'like', '%' . $tag . '%');
                }
            });
        }

        $perpustakaans = $perpustakaans->paginate(8);

        return view('perpustakaan', compact('perpustakaans', 'status', 'newsletters','status2'));
    }

    public function detail($slug){
        $status ='perpustakaan';
        $perpustakaan = Perpustakaan::where('slug', $slug)->first();
        $perpustakaanRandom = Perpustakaan::inRandomOrder()->take(5)->get();
        return view ('perpustakaan-detail', compact('perpustakaan','status','perpustakaanRandom'));
    }

    public function cari(Request $request){
        $perpustakaans = Perpustakaan::where('judul','LIKE','%'.$request->search.'%')->paginate(8);
        return view ('perpustakaan', compact('perpustakaans'));
    }
    public function downloadPdf($slug) {
        $perpustakaan = Perpustakaan::where('slug', $slug)->firstOrFail();
    
        // Ambil path file PDF dari model Perpustakaan
        $pdfPath = $perpustakaan->pdf_file;
    
        // Mendapatkan nama file PDF
        $pdfName = pathinfo($pdfPath, PATHINFO_FILENAME);
    
        // Menggunakan Storage facade untuk mengambil file PDF dari penyimpanan
        $pdfFile = Storage::disk('public')->get($pdfPath);
    
        // Mengembalikan file PDF sebagai response
        return response($pdfFile)
            ->header('Content-Type', 'application/pdf');
    }
}
